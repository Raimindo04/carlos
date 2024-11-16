<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    public function create()
    {
        $menu = Menu::all();
        return view('pratos.create',['menus' => $menu]);
    }

    public function store(Request $request)
    {
        // dd($request->all() );

        $validated = $request->validate([
            'menu_id' => 'required|integer',
            'nome' => 'required|string|min:3',
            'descricao' => 'required|string|min:5',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg',
            'is_prato_do_dia' => 'required',
            'is_vegetariano' => 'required',
        ]);

        if ($request->hasFile('imagem')) {
            $validated['imagem'] = $request->file('imagem')->store('pratos', 'public');
        }

        Prato::create($validated);

        return redirect()->route('pratos.create')->with('success', 'Prato registrado com sucesso!');
    }
}
