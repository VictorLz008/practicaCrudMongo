<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Inventario')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body class="container py-3">
    <nav class="d-flex justify-content-between align-items-center flex-wrap gap-3">
        <a href="{{ route('productos.index') }}" class="font-monospace text-decoration-none">
            <h1 class="m-0">Inventario</h1>
        </a>

        <div class="d-flex align-items-center gap-3">
            @auth
                <a href="{{ route('productos.create') }}" class="btn theme-primary btn-solid btn-styled">
                    Agregar Producto
                </a>

                <div class="position-relative">
                    <button type="button" class="btn btn-outline theme-secondary" data-bs-toggle="menu" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="menu" data-bs-placement="bottom-end">
                        <a href="{{ route('profile.edit') }}" class="menu-item">
                            Perfil
                        </a>
                        <hr class="menu-divider">
                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="menu-item theme-danger w-100 text-start">
                                Cerrar sesión
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline theme-primary">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn theme-primary btn-solid">Registrarse</a>
            @endauth
        </div>
    </nav>

    <hr>

    <x-alertas />

    <main>
        @isset($slot)
            {{ $slot }}
        @else
            @yield('content')
        @endisset
    </main>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>
