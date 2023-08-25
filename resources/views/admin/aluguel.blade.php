@extends('layouts.app')

@section('content')
<div class="rent">
    <h1>Aluguéis</h1>

    <div class="btn btn-success mb-3">
        <a class="link-light text-decoration-none" href="novo-aluguel">Novo Aluguel</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">COD</th>
                <th scope="col">Produto</th>                
                <th scope="col">Data Inicial</th>
                <th scope="col">Data Final</th>
                <th scope="col">Cliente</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rent as $item)
            <tr>
                <td>00{{ $item->id }}</td>
                <td>00{{ $item->product_id }}</td>
                <td>{{ $item->initial_date }}</td>
                <td>{{ $item->final_date }}</td>
                <td>{{ $item->user_id }}</td>
                <td>R${{ $item->total_value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
