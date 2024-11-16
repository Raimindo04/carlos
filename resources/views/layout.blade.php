<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sabores da Terra')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header class="bg-success text-white py-3">
        <div class="container">
            <h1>Sabores da Terra</h1>
            <nav class="nav">
                <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                <a class="nav-link text-white" href="{{ url('/menu') }}">Menu</a>
                <a class="nav-link text-white" href="{{ url('/reservas') }}">Reservas</a>
                <a class="nav-link text-white" href="{{ url('/contacto') }}">Contato</a>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Sabores da Terra. Todos os direitos reservados.</p>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/menu.js') }}"></script>
</body>
</html>
