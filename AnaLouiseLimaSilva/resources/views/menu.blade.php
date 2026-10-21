<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <div class="navbar-nav">

        

            <a class="nav-link"
               href="{{ route('produtos.index', [], false) }}">
                Produtos
            </a>

            <a class="nav-link"
               href="{{ route('filmes.index', [], false) }}">
                Filmes
            </a>

            <a class="nav-link"
               href="{{ route('jogos.index', [], false) }}">
                Jogos
            </a>

        </div>

    </div>
</nav>