<!DOCTYPE html>
<html>
<head>
    <title>Planillas</title>
</head>
<body>
    <h1>Planillas</h1>
    <ul>
        @foreach ($planillas as $planilla)
            <li>{{ $planilla->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>
