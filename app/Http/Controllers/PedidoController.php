<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PedidoController extends Controller
{
    public function finalizar(Request $request)
    {
        // Aquí puedes agregar la lógica para procesar el pedido, guardar en la base de datos, etc.

        // Vaciar el carrito
        Cart::instance('shopping')->destroy();

        // Redirigir a la página de gracias
        return redirect()->route('gracias');
    }

    public function gracias()
    {
        return view('gracias');
    }
}

