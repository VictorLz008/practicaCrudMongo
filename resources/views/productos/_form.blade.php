<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control"
           value="{{ old('nombre', $producto->nombre ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">Cantidad</label>
    <input type="number" name="stock" class="form-control"
           value="{{ old('stock', $producto->stock ?? 0) }}">
</div>
<div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control"
           value="{{ old('precio', $producto->precio ?? 0) }}">
</div>

<div class="content d-flex justify-content-end">
<button class="btn btn-success theme-primary btn-solid btn-styled">Guardar</button>
<a href="{{ route('productos.index') }}" class="btn btn-secondary theme-danger btn-solid btn-styled">Cancelar</a>
</div>