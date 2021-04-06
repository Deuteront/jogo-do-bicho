<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #228B22">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbar" aria-controls="navbar" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif
                data-toggle="tooltip" data-placement="top" title="Home">
                <a class="nav-link fas fa-home fa-2x" href="/"></a>
            </li>
            <li @if($current=="jogadores") class="nav-item active" @else class="nav-item"
                @endif data-toggle="tooltip" data-placement="top" title="Menu Jogadores">
                <a class="nav-link fas fa-users fa-2x" href="/jogadores"></a>
            </li>
            <li @if($current=="palpites") class="nav-item active" @else class="nav-item"
                @endif data-toggle="tooltip" data-placement="top" title="Menu Sorteios">
                <a class="nav-link fas fa-dollar-sign fa-2x" href="/palpites"></a>
            </li>
        </ul>
    </div>
</nav>
