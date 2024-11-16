@extends('layout')

@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">

        <h1 class="mb-4">Reservas</h1>

        <!-- Formulário para nova reserva -->
        <h2 class="mt-5">Fazer Nova Reserva</h2>
        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome_cliente" >
                @error('nome_cliente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email_cliente" >
                @error('email_cliente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone_cliente" >
                @error('telefone_cliente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data_reserva" >
                @error('data_reserva')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora_reserva" >
                @error('hora_reserva')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="numero_pessoas" class="form-label">Número de Pessoas</label>
                <input type="number" class="form-control" id="numero_pessoas" name="numero_pessoas" >
                @error('numero_pessoas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observa&ccedil;&atilde;o</label>
                <textarea class="form-control" id="observacao" name="observacao" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>

</section>
@endsection
