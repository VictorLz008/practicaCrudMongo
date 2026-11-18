@extends('layouts.app')

@section('content')
<h3>Editar producto</h3>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('productos._form')
</form>
@endsection