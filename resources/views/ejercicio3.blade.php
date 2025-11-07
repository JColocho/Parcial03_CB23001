<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('departamentos.show') }}">Departamentos</a>
        <a href="{{ route('TipoClientes.show') }}">Tipo de clientes</a>
    </nav>

    @yield('content')
</body>
</html>