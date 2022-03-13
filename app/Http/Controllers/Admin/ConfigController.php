<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index(Request $request)
    {
        $nome = 'Arthur';
        $idade = 23;
        $cidade = $request->input('cidade');

        $lista = [
            ['nome'=>'farinha', 'qt'=>'2'],
            ['nome'=>'ovo', 'qt'=>'4'],
            ['nome'=>'açucar', 'qt'=>'1'],
            ['nome'=>'manteiga', 'qt'=>'1'],
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $lista
        ];

        return view('admin.config', $data);
    }

    public function info()
    {
        echo "Página de config INFO...";
    }

    public function permissoes()
    {
        echo "Página de config PERMISSÕES...";
    }
}
