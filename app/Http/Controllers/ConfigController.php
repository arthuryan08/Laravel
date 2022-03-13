<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request)
    {
        //all, input, query
        $nome = $request->input('nome');
        echo "blabla" . $nome;
        return view('config');
    }

    public function user()
    {
        echo "Página de config do usuário...";
    }
}
