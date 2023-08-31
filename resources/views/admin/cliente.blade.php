@extends('layouts.app')

@section('content')
<div class="costumers">
    <h1>Clientes</h1>

    <div class="btn btn-success mb-3">
        <a class="link-light text-decoration-none" href="novo-cliente">Novo Cliente</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">COD</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Aluguel ativo</th>
                <th scope="col">Registro em</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($costumers as $costumer)
            <tr>
                <td>00{{ $costumer->id }}</td>
                <td>{{ $costumer->name }}</td>
                <td>{{ $costumer->cpf }}</td>
                <td>{{ $costumer->phone }}</td>
                <td>{{ $costumer->id }}</td>
                <td>{{ $costumer->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
