<!DOCTYPE html>
<html>
<head>
    <title>Administrador/Contador</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Panel de Administrador/Contador</h1>
        <nav>
            <ul>
                <li><a href="{{ route('empleados.index') }}">Empleados</a></li>
                <li><a href="{{ route('planillas.index') }}">Planillas</a></li>
                <li><a href="{{ route('pagos.index') }}">Pagos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Centro Escolar</p>
    </footer>
</body>
</html>
