@extends('layout')

@section('titulo', 'Detalhes do Jogo')

@section('conteudo')

<h1>Detalhes do Jogo</h1>

<div class="card mt-4">

    <div class="card-body">

        <h3>{{ $jogo['nome'] }}</h3>

        <p>
            <strong>ID:</strong>
            {{ $jogo['id'] }}
        </p>

        <p>
            <strong>Gênero:</strong>
            {{ $jogo['genero'] }}
        </p>

        <p>
            <strong>Preço:</strong>

            @if($jogo['preco'] == 0)

                <span class="badge bg-success">
                    GRÁTIS
                </span>

            @else

                R$ {{ number_format($jogo['preco'], 2, ',', '.') }}

            @endif

        </p>

        <p>
            <strong>Idade mínima:</strong>
            {{ $jogo['idade_minima'] }} anos
        </p>

        <a href="{{ route('jogos.index') }}"
           class="btn btn-secondary">

            Voltar

        </a>

    </div>

</div>

@endsection