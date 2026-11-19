<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class ProductoException extends Exception
{
    private function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }


    public static function nombreDuplicado(string $nombre): self
    {
        return new self("Ya existe un producto llamado \"{$nombre}\".", 409);
    }

    public static function conStock(string $producto, int $stock): self
    {
        return new self(
            "No puedes eliminar \"{$producto}\" porque aún tiene {$stock} unidades en stock.",
            409
        );
    }

    public function render(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['mensaje' => $this->getMessage()], $this->getCode());
        }

        if ($this->getCode() === 404) {
            return redirect()
                ->route('productos.index')
                ->with('error', $this->getMessage());
        }

        return back()
            ->withInput()
            ->with('error', $this->getMessage());
    }
}