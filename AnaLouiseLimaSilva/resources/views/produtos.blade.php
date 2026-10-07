@extends('layout')

@section('titulo', 'Produtos')

@section('conteudo')

<h1 class="mb-4">Sistema de Produtos</h1>

<table class="table table-bordered table-striped">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

        @foreach($produtos as $produto)

            <tr>

                <td>{{ $produto['id'] }}</td>

                <td>{{ $produto['nome'] }}</td>

                <td>
                    R$ {{ number_format($produto['preco'], 2, ',', '.') }}
                </td>

                <td>{{ $produto['estoque'] }}</td>

                <td>

                    @if($produto['estoque'] > 0)

                        <span class="badge bg-success">
                            DISPONÍVEL
                        </span>

                    @else

                        <span class="badge bg-danger">
                            ESGOTADO
                        </span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('produto.detalhes', $produto['id']) }}"
                       class="btn btn-primary btn-sm">

                        Detalhes

                    </a>

                </td>

            </tr>

        @endforeach

    </tbody>

</table>

@endsection