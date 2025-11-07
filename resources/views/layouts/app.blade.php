<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav style="margin-bottom: 10px;">
            <a href="{{ route('ejercicio1') }}">Ejecicio 1</a>
            <a href="{{ route('ejercicio3') }}">Ejercicio 3</a>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>