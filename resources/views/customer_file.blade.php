<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Estilos CSS (você pode usar o Laravel Mix, por exemplo) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo dinâmico -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; {{ date('Y') }} - My Laravel App</p>
    </footer>

    <!-- Scripts JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
