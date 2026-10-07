<?php

namespace App\Http\Controllers;

class FilmeController extends Controller
{
    private $filmes = [
        [
            'id' => 1,
            'titulo' => 'Toy Story',
            'ano' => 1995,
            'classificacao' => 'LIVRE'
        ],
        [
            'id' => 2,
            'titulo' => 'Homem-Aranha',
            'ano' => 2021,
            'classificacao' => '12 ANOS'
        ],
        [
            'id' => 3,
            'titulo' => 'Batman',
            'ano' => 2022,
            'classificacao' => '16 ANOS'
        ],
        [
            'id' => 4,
            'titulo' => 'Deadpool',
            'ano' => 2016,
            'classificacao' => '16 ANOS'
        ],
        [
            'id' => 5,
            'titulo' => 'Coringa',
            'ano' => 2019,
            'classificacao' => '18 ANOS'
        ]
    ];

    public function index()
    {
        return view('filmes', [
            'filmes' => $this->filmes
        ]);
    }

    public function show($id)
    {
        foreach ($this->filmes as $filme) {

            if ($filme['id'] == $id) {
                return view('filme', [
                    'filme' => $filme
                ]);
            }
        }

        abort(404);
    }
}