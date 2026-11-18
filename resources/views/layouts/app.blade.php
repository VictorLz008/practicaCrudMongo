<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventario')</title>
</head>
<body>
    <nav>
        <a href="{{ route('productos.index') }}">Inventario</a> |
        <a href="{{ route('productos.create') }}">Nuevo producto</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>