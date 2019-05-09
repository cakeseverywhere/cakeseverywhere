<?php

namespace App\Http\Controllers\ModuloPedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\models\ModuloPedidos\pedido;

class PedidosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $pedidos = pedido::all();
        return view('productos.cart', compact("pedidos"));
    }


    public function addPedido(Request $request){
        $productos=json_decode($request->lisProduct);
        $id ="";
        foreach($productos as $d){
            $id= $d->id;
        }
        /*Descarga un archivo de forma automatica*/
        //return response()->download(public_path()."/img/producto/p1.jpg");
        return $id;
    }
}
