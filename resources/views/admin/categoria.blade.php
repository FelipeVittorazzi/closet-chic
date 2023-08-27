@extends('layouts.app')

@section('content')
    <div class="categories">
        <h1>Categorias</h1>

        <div class="btn btn-success mb-3">
            <a class="link-light text-decoration-none" href="nova-categoria">Novo Categoria</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">COD</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Registro em</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>00{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
