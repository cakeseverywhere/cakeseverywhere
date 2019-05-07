<?php

namespace App\Http\Controllers\ModuloPedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($request)
    {
        //
    }


    public function addProduct(){

        return view('productos.cart');
    }
}
