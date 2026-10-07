<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="#">
            Atividade Laravel
        </a>

        <div class="navbar-nav">

            <a class="nav-link"
               href="{{ route('alunos.index') }}">

                Alunos

            </a>

            <a class="nav-link"
               href="{{ route('produtos.index') }}">

                Produtos

            </a>

            <a class="nav-link"
               href="{{ route('filmes.index') }}">

                Filmes

            </a>

        </div>

    </div>

</nav>