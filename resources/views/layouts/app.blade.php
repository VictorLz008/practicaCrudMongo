<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventario')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

</head>
<body>
<nav class="d-flex justify-content-between align-items-center">
    <a href="{{ route('productos.index') }}" class="font-monospace text-decoration-none">
        <h1 class="m-0">Inventario</h1>
    </a>

    <a href="{{ route('productos.create') }}" class="btn btn-primary theme-primary btn-solid btn-styled">Agregar Producto</a>
</nav>

    <hr>

    <main>
        @yield('content')     
    </main>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</body>
</html>