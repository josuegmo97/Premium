<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de mis locuras</title>
</head>
<body>
    <h2>Estoy en roles</h2>
    @foreach ($datos as $dato)
        <h2>{{ $dato->name }}</h2>
        <p>{{ $dato->description }}</p>
        <span>Creado el {{ $dato->created_at }}</span>
    @endforeach
</body>
</html>
