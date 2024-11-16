@extends('layout')

@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">

        <h1 class="mb-4">Reservas</h1>

        <!-- Exibir mensagem de sucesso -->
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <!-- Botão de Nova Reserva -->
        <a href="{{ route('reservas.create') }}" class="btn btn-success mb-3">Nova Reserva</a>

        <!-- Tabela de reservas -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Número de Pessoas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->nome_cliente }}</td>
                        <td>{{ $reserva->email_cliente }}</td>
                        <td>{{ $reserva->telefone_cliente }}</td>
                        <td>{{ \Carbon\Carbon::parse($reserva->data_reserva)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($reserva->hora_reserva)->format('H:i') }}</td>
                        <td>{{ $reserva->numero_pessoas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

</section>
@endsection
