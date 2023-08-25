@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('aluguel.form') }}" novalidate>
            @csrf

            <div class="row mb-3">
                <label for="product_id" class="col-md-4 col-form-label text-md-end">Produto</label>

                <div class="col-md-6">
                    <input id="product_id" name="product_id" type="number" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="initial_date" class="col-md-4 col-form-label text-md-end">Data Inicial</label>

                <div class="col-md-6">
                    <input id="initial_date" name="initial_date" type="date" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="final_date" class="col-md-4 col-form-label text-md-end">Data Final</label>

                <div class="col-md-6">
                    <input id="final_date" name="final_date" type="date" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="user_id" class="col-md-4 col-form-label text-md-end">Cliente</label>

                <div class="col-md-6">
                    <input id="user_id" name="user_id" type="number" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="total_value" class="col-md-4 col-form-label text-md-end">Valor Total</label>

                <div class="col-md-6">
                    <input id="total_value" name="total_value" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="obs" class="col-md-4 col-form-label text-md-end">Observação</label>

                <div class="col-md-6">
                    <input id="obs" name="obs" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Descrição</label>

                <div class="col-md-6">
                    <input id="description" name="description" type="text" class="form-control" required autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="contract" class="col-md-4 col-form-label text-md-end">Contrato</label>

                <div class="col-md-6">
                    <input id="contract" name="contract" type="text" class="form-control" required autofocus>
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