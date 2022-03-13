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

        $data = [
            'nome' => $nome,
            'idade' => $idade
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
