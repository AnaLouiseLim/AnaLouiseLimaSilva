<?php

namespace App\Http\Controllers;

class JogoController extends Controller
{
    private $jogos = [
        [
            'id' => 1,
            'nome' => 'Minecraft',
            'genero' => 'Aventura',
            'preco' => 99.90,
            'idade_minima' => 10
        ],
        [
            'id' => 2,
            'nome' => 'Fortnite',
            'genero' => 'Battle Royale',
            'preco' => 0,
            'idade_minima' => 12
        ],
        [
            'id' => 3,
            'nome' => 'The Sims 4',
            'genero' => 'Simulação',
            'preco' => 0,
            'idade_minima' => 12
        ],
        [
            'id' => 4,
            'nome' => 'GTA V',
            'genero' => 'Ação',
            'preco' => 120.00,
            'idade_minima' => 18
        ],
        [
            'id' => 5,
            'nome' => 'Stardew Valley',
            'genero' => 'Simulação',
            'preco' => 24.99,
            'idade_minima' => 10
        ]
    ];

    public function index()
    {
        return view('jogos', [
            'jogos' => $this->jogos
        ]);
    }

    public function show($id)
    {
        foreach ($this->jogos as $jogo) {

            if ($jogo['id'] == $id) {
                return view('jogo', [
                    'jogo' => $jogo
                ]);
            }
        }

        abort(404);
    }
}