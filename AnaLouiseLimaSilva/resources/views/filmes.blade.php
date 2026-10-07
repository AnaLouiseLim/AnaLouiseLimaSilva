@extends('layout')

@section('titulo', 'Filmes')

@section('conteudo')

<h1 class="mb-4">Sistema de Filmes</h1>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Ano</th>
            <th>Classificação</th>
            <th>Ações</th>
        </tr>

    </thead>

    <tbody>

        @foreach($filmes as $filme)

            <tr>

                <td>{{ $filme['id'] }}</td>

                <td>{{ $filme['titulo'] }}</td>

                <td>{{ $filme['ano'] }}</td>

                <td>

                    @if($filme['classificacao'] == 'LIVRE')

                        <span class="badge bg-success">
                            LIVRE
                        </span>

                    @elseif($filme['classificacao'] == '12 ANOS')

                        <span class="badge bg-primary">
                            12 ANOS
                        </span>

                    @elseif($filme['classificacao'] == '16 ANOS')

                        <span class="badge bg-warning text-dark">
                            16 ANOS
                        </span>

                    @elseif($filme['classificacao'] == '18 ANOS')

                        <span class="badge bg-danger">
                            18 ANOS
                        </span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('filme.detalhes', $filme['id']) }}"
                       class="btn btn-primary btn-sm">

                        Ver filme

                    </a>

                </td>

            </tr>

        @endforeach

    </tbody>

</table>

@endsection