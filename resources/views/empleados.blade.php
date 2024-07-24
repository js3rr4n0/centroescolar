<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
</head>
<body>
    <h1>Empleados</h1>
    <ul>
        @foreach ($empleados as $empleado)
            <li>{{ $empleado->nombre }} - {{ $empleado->email }}</li>
        @endforeach
    </ul>
</body>
</html>
