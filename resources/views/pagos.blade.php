<!DOCTYPE html>
<html>
<head>
    <title>Pagos</title>
</head>
<body>
    <h1>Pagos</h1>
    <ul>
        @foreach ($pagos as $pago)
            <li>Empleado: {{ $pago->empleado->nombre }} - Monto: {{ $pago->monto }} - Fecha: {{ $pago->fecha_pago }}</li>
        @endforeach
    </ul>
</body>
</html>

