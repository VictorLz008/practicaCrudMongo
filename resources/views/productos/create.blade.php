@extends('layouts.app')

@section('content')
<h3>Nuevo producto</h3>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    @include('productos._form')
</form>
@endsection