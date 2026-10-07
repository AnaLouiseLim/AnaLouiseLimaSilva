<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtos = [
        [
            'id' => 1,
            'nome' => 'Notebook',
            'preco' => 3500.00,
            'estoque' => 5
        ],
        [
            'id' => 2,
            'nome' => 'Mouse',
            'preco' => 80.00,
            'estoque' => 10
        ],
        [
            'id' => 3,
            'nome' => 'Teclado',
            'preco' => 150.00,
            'estoque' => 0
        ],
        [
            'id' => 4,
            'nome' => 'Monitor',
            'preco' => 900.00,
            'estoque' => 3
        ],
        [
            'id' => 5,
            'nome' => 'Headset',
            'preco' => 200.00,
            'estoque' => 0
        ],
        [
            'id' => 6,
            'nome' => 'Webcam',
            'preco' => 250.00,
            'estoque' => 7
        ]
    ];

    public function index()
    {
        return view('produtos', [
            'produtos' => $this->produtos
        ]);
    }

    public function show($id)
    {
        foreach ($this->produtos as $produto) {
            if ($produto['id'] == $id) {
                return view('produto', [
                    'produto' => $produto
                ]);
            }
        }

        abort(404);
    }
}