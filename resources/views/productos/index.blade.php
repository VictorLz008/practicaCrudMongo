@extends('layouts.app')

@section('title', 'Inventario')

@section('content')
    <h1>Inventario</h1>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $p)
                <tr>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>
                        <a href="{{ route('productos.show', $p->id) }}">Ver</a>
                        <a href="{{ route('productos.edit', $p->id) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $p->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay productos.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection