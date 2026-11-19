@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}

        <button type="button" class="btn-close" 
                data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
@endif

 
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <strong>Hay errores en el formulario:</strong>

        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif