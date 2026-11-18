@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="text-center mb-4">Editar producto</h3>
<form action="{{ route('productos.update', $producto->id) }}" method="POST" class="mx-auto" style="max-width: 400px;">
    @csrf
    @method('PUT')
    @include('productos._form')
</form>
</div>

@endsection