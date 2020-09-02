<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function mural() {
        $dados = [
            [
                'user' => 'Victor',
                'texto' => 'MVC é incrível'
            ],
            [
                'user' => 'Thiago',
                'texto' => 'Vou me candidatar para representante da sala.'
            ],
            [
                'user' => 'Alexandre',
                'texto' => 'Ainda estou esperando me deixarem falar.'
            ],
        ];
        return view('mural', ['posts' => $dados]);
    }
}
