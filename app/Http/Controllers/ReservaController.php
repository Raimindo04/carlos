<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
      // Exibir o formulário de reserva
      public function index()
      {
          // Exibe todas as reservas armazenadas
          $reservas = Reserva::all();
          return view('reservas.index', compact('reservas'));
      }

    // Exibir o formulário de reserva
    public function create()
    {

        return view('reservas.create');
    }

      // Processar a reserva
      public function store(Request $request)
      {
          // Validação
          $validatedData = $request->validate([
              'nome_cliente' => 'required|min:3',
              'email_cliente' => 'required|email',
              'telefone_cliente' => 'required',
              'data_reserva' => 'required|date',
              'hora_reserva' => 'required',
              'numero_pessoas' => 'required|integer|min:1',
              'observacao'=> 'required'
          ]);

          // Criar a reserva no banco de dados
          $reser= Reserva::create($validatedData);

        //   dd($reser);
          // Retorno de sucesso
          return redirect()->route('reservas.index')->with('status', 'Reserva criada com sucesso!');
      }
}
