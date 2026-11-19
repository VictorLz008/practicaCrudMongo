<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProductoRequest;
use App\Services\ProductoService;
use Illuminate\Support\Facades\Gate;
use App\Models\Producto;

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
        if (Gate::denies('create', Producto::class)) {
            return back()->with('error', 'Solo los administradores pueden agregar productos.');
        }
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
    if (Gate::denies('delete', Producto::class)) {
        return back()->with('error', 'Solo los administradores pueden eliminar productos.');
    }
    $this->productos->eliminar($id);

    return redirect()->route('productos.index');
}
}