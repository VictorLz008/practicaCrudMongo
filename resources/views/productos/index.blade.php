@extends('layouts.app')

@section('title', 'Inventario')

@section('content')


<div class="container d-flex justify-content-center"> 

    <table class="table table-sm table-striped table-bordered border-primary table-responsive  w-70">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $p)
                <tr>
                    <td scope="row" >{{ $p->nombre }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td class="w-11">
                        <a href="{{ route('productos.edit', $p->id) }}" class="btn btn-primary theme-primary btn-solid btn-styled">Editar</a>
                        <form action="{{ route('productos.destroy', $p->id) }}"  method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn theme-danger btn-solid btn-styled" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
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