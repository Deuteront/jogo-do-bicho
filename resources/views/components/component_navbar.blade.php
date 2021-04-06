<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #228B22">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbar" aria-controls="navbar" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif
                data-toggle="tooltip" data-placement="top" title="Home">
                <a class="nav-link fas fa-home fa-2x" href="/Home"></a>
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
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
