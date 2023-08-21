@extends('layouts.app')

@section('content')
<div class="products">
    <h1>Produtos</h1>

    <div>
        <a href="product"></a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">COD</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Registro em</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>00{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>R${{ $product->price }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
