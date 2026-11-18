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
    <input type="number" name="cantidad" class="form-control"
           value="{{ old('cantidad', $producto->cantidad ?? 0) }}">
</div>
<div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control"
           value="{{ old('precio', $producto->precio ?? 0) }}">
</div>
<button class="btn btn-success">Guardar</button>
<a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>