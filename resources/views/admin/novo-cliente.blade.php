@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('cliente.form') }}" novalidate>
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Nome</label>

                <div class="col-md-6">
                    <input id="name" name="name" type="text" class="form-control" required autocomplete="name" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="cpf" class="col-md-4 col-form-label text-md-end">CPF</label>

                <div class="col-md-6">
                    <input id="cpf" name="cpf" type="text" class="form-control is-invalid cpf" value="{{ old('cpf') }}" required autofocus>
                    @error('cpf')
                    <div class="error-message invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-md-4 col-form-label text-md-end">Telefone</label>

                <div class="col-md-6">
                    <input id="phone" name="phone" type="tel" class="form-control is-invalid phone" required autofocus>
                    @error('phone')
                    <div class="error-message invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                    <input id="email" name="email" type="text" class="form-control" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">Endereço</label>

                <div class="col-md-6">
                    <input id="address" name="address" type="text" class="form-control" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="photo" class="col-md-4 col-form-label text-md-end">Foto</label>

                <div class="col-md-6">
                    <input id="photo" name="photo" type="text" class="form-control" disabled autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="payment_method_id" class="col-md-4 col-form-label text-md-end">Método de pagamento</label>

                <div class="col-md-6">
                    <input id="payment_method_id" name="payment_method_id" type="text" class="form-control" disabled autofocus>
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
