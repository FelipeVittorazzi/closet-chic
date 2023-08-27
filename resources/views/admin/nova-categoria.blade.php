@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('categoria.form') }}" novalidate>
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Nome</label>

                <div class="col-md-6">
                    <input id="name" name="name" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Descrição</label>

                <div class="col-md-6">
                    <input id="description" name="description" type="text" class="form-control" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label text-md-end">Imagem</label>

                <div class="col-md-6">
                    <input id="image" name="image" type="text" class="form-control" autofocus>
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
