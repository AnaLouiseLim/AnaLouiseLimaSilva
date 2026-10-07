@extends('layout')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')

<h1>Detalhes do Produto</h1>

<div class="card mt-4">

    <div class="card-body">

        <h3>{{ $produto['nome'] }}</h3>

        <p>
            <strong>ID:</strong>
            {{ $produto['id'] }}
        </p>

        <p>
            <strong>Preço:</strong>
            R$ {{ number_format($produto['preco'], 2, ',', '.') }}
        </p>

        <p>
            <strong>Estoque:</strong>
            {{ $produto['estoque'] }}
        </p>

        <p>
            <strong>Situação:</strong>

            @if($produto['estoque'] > 0)

                <span class="badge bg-success">
                    DISPONÍVEL
                </span>

            @else

                <span class="badge bg-danger">
                    ESGOTADO
                </span>

            @endif

        </p>

        <a href="{{ route('produtos.index') }}"
           class="btn btn-secondary">

            Voltar

        </a>

    </div>

</div>

@endsection