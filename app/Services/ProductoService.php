<?php

namespace App\Services;

use App\Models\Producto;
use illuminate\Database\Eloquent\Collection;
use App\Exceptions\ProductoException;

class ProductoService
{

    public function listar(): Collection
    {
        return Producto::all();
    }

    public function obtener(string $id): Producto
    {
        return Producto::findOrFail($id);
    }

    public function crear(array $datos): Producto
    {
        $existe = Producto::where('nombre', $datos['nombre'])->exists();

        if($existe)  {
            throw   ProductoException::nombreDuplicado($datos['nombre']);
        }
        return Producto::create($datos);
    }

    public function actualizar(string $id, array $datos): Producto
    {
        $producto = $this->obtener($id);
        $producto->update($datos);
        return $producto;
    }

    public function eliminar(string $id): void
    {
        if ($this->obtener($id)->stock > 0) {
            throw ProductoException::conStock($this->obtener($id)->nombre, $this->obtener($id)->stock);
        }
        $this->obtener($id)->delete();
    }
}
