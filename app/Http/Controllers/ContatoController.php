<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
        // Exibe a página de contato
        public function index()
        {
            return view('contacto.index');
        }

        // Envia a mensagem (simulação de envio)
        public function send(Request $request)
        {
            // Validação dos dados
            $validatedData = $request->validate([
                'nome' => 'required|min:3',
                'email' => 'required|email',
                'assunto' => 'required|min:5',
                'mensagem' => 'required|min:10',
            ]);


            // Aqui você pode adicionar a lógica para enviar o e-mail ou salvar a mensagem, por exemplo.
            Contacto::create($validatedData);
            // dd($validatedData);
            // Retorno de sucesso
            return redirect()->route('contacto.index')->with('status', 'Mensagem enviada com sucesso!');
        }
}
