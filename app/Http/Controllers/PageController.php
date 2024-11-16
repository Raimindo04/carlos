<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Prato;
use Illuminate\Http\Request;

class PageController extends Controller
{

        public function index() {
            return view('index');
        }

        public function menu() {

            return view('menu', ['pratos' => Prato::all(), 'categorias'=>Menu::all()]);
        }

        public function reservas() {
            return view('reservas');
        }

        public function contato() {
            return view('contato');
        }

}
