<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Services\ProductoService;

class ProductoController extends Controller
{
    public function __construct(private ProductoService $productos){}

    public function index()
    {
        $productos = $this->productos->listar();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(ProductoRequest $request)
    {
        $this->productos->crear($request->validated());

        return redirect()->route('productos.index');
    }

    public function show(string $id)
    {
        $producto = $this->productos->obtener($id);
        return view('productos.show', compact('producto'));
    }

    public function edit(string $id)
    {
        $producto = $this->productos->obtener($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(ProductoRequest $request, string $id)
    {
        $this->productos->actualizar($id, $request->validated());
        return redirect()->route('productos.index');
    }

    public function destroy(string $id)
    {
        $this->productos->eliminar($id);
        return redirect()->route('productos.index');
    }
}