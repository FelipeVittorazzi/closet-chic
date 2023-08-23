@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('produto.form') }}" novalidate>
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Nome</label>

                <div class="col-md-6">
                    <input id="name" name="name" type="text" class="form-control" required autocomplete="name" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-md-4 col-form-label text-md-end">Preço</label>

                <div class="col-md-6">
                    <input id="price" name="price" type="number" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="size" class="col-md-4 col-form-label text-md-end">Tamanho</label>

                <div class="col-md-6">
                    <input id="size" name="size" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="color" class="col-md-4 col-form-label text-md-end">Cor</label>

                <div class="col-md-6">
                    <input id="color" name="color" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="origin_product" class="col-md-4 col-form-label text-md-end">Origem do produto</label>

                <div class="col-md-6">
                    <input id="origin_product" name="origin_product" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="obs" class="col-md-4 col-form-label text-md-end">Observação</label>

                <div class="col-md-6">
                    <input id="obs" name="obs" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label text-md-end">Imagem</label>

                <div class="col-md-6">
                    <input id="image" name="image" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Descrição</label>

                <div class="col-md-6">
                    <input id="description" name="description" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-md-4 col-form-label text-md-end">Categoria</label>

                <div class="col-md-6">
                    <input id="category_id" name="category_id" type="text" class="form-control" required autofocus>
                </div>
            </div>


            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                    Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection