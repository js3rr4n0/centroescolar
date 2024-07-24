<!DOCTYPE html>
<html>
<head>
    <title>Mis Pagos</title>
</head>
<body>
    <h1>Mis Pagos</h1>
    <ul>
        @foreach ($pagos as $pago)
            <li>Planilla: {{ $pago->planilla->nombre }} - Monto: {{ $pago->monto }} - Fecha: {{ $pago->fecha_pago }}</li>
        @endforeach
    </ul>
</body>
</html>
