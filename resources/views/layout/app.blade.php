<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1b414065fc.js" crossorigin="anonymous"></script>
    <title>JOGO DO BICHO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class=”container”>
    <main role="main">
        @component('components.component_navbar', [ "current" => $current ?? '' ])
        @endcomponent
        <div style="padding: 0 20px">
            @hasSection('body')
            @yield('body')
        </div>
        @endif
    </main>
</div>

<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
