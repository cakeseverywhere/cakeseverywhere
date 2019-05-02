<?php

namespace App\Http\Controllers;

use App\models\ModuloProducto\foto;
use http\Message;
use Illuminate\Http\Request;
//instacear para poder ocupar el modelo
use App\models\ModuloProducto\producto;

//para usar el flash
use Laracasts\Flash\Flash;
use Intervention\Image\Image;
////usar esta calse para almanecar la imagen
use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toJSON;


class ProductosController extends Controller
{
    protected function index(){
        $productos = producto::all();


        if ($productos -> isNotEmpty() and $productos->count()>7){

            $p = $productos -> random(9);
           // dd($p->get(4)->fotos->get(0)->ur_foto);
            //dd($p);
            return view('productos.principal',compact('p'));
        }


    }

    protected function vistaRegistro(){
        return view('Formularios.registerProductos');
    }
    //store=almacenar
    protected function store(Request $request)
    {
        //------------VALIDAR------------------
        $this->validate($request,[
            'nom_producto' => ['required', 'string', 'max:100'],
            'desc_producto' => ['required', 'string'],
           'imagen' => ['required', 'image'],

        ]);

        //------------Crear
       // $pr=producto::create($request->all());
        $producto= new producto();
        $producto-> nom_producto =$request->input('nom_producto');
        $producto-> desc_producto =$request->input('desc_producto');
        //guardar en nuestra base de datos
        $producto->save();


        $path='img/producto';
        $name='pastel' . '_' . $producto->id . '.'.$request->file('imagen')->extension() ;//.$file -> extension();
        if(!file_exists(public_path() .$path)){
            mkdir(public_path() .$path, 0777, true);
        }
        //dd($request->file('imagen')->move(public_path() .$path, $name));
        //mover imagen a el directorio

        $request->file('imagen')->move(public_path() .'/'.$path, $name);
        $ttt= $path .'/'.$name;

        $imagen= new foto();
        //campo de la base de datos, y le asignamos lo que viene del request
        //especificamente del input(en el formulario) que tiene el nombre de nustra variable a asignar
        $imagen-> fk_id_producto= $producto->id;
        $imagen-> nombre = $name;
        $imagen-> ur_foto = $ttt ;
        $imagen->save();
//        flash('Producto insertado exitosamente');

        return redirect()->route('registarProducto');

    }

    private function storeImage($file , $itemid){

    }

    protected function show(Request $request){
        $producto = producto::findOrFail($request->id);
        $producto->fotos;
        return Response::json($producto);
    }
}
