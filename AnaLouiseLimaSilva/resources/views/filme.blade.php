@extends('layout')

@section('titulo', 'Detalhes do Filme')

@section('conteudo')

<h1>Detalhes do Filme</h1>

<div class="card mt-4">

    <div class="card-body">

        <h3>{{ $filme['titulo'] }}</h3>

        <p>
            <strong>ID:</strong>
            {{ $filme['id'] }}
        </p>

        <p>
            <strong>Ano:</strong>
            {{ $filme['ano'] }}
        </p>

        <p>
            <strong>Classificação:</strong>
            {{ $filme['classificacao'] }}
        </p>

        <a href="{{ route('filmes.index') }}"
           class="btn btn-secondary">

            Voltar

        </a>

    </div>

</div>

@endsection