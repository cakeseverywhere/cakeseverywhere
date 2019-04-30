<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//instacear para poder ocupar el modelo
use App\models\ModuloProducto\direcciones_sucursale;

class DireccionesSucursalesController extends Controller
{
    //
    public function index(){
        return view('Formularios.registerDireccionesSucursales');
    }


    //obtenemos informacion desde un formulario desde request
    protected function register(Request $request)
    {
        //---------------METODO 1 ---------------
        //$direccion= new direcciones_sucursale();
        //campo de la base de datos, y le asignamos lo que viene del request
        //especificamente del input(en el formulario) que tiene el nombre de nustra variable a asignar
        //$direccion-> estado =$request->input('estado');
        //$direccion-> municipio =$request->input('municipio');
        //$direccion-> localidad =$request->input('localidad');
        //$direccion-> calle =$request->input('calle');
        //$direccion-> num_ext =$request->input('ne');
        //$direccion-> num_int =$request->input('ni');
        //$direccion-> codigo_postal =$request->input('cp');
        //$direccion-> otras_referencias =$request->input('or');
        //$direccion-> telefono_fijo =$request->input('tf');
        //$direccion-> telefono_celular =$request->input('tc');
        //guardar en nuestra base de datos
       // $direccion->save();


        //------------VALIDAR------------------
        $this->validate($request,[
            'estado' => ['required', 'string', 'max:100'],
            'municipio' => ['required', 'string'],
            'localidad' => ['required', 'string', 'max:100'],
            'calle' => ['required', 'string', 'max:100'],
            'num_ext' => ['required', 'string', 'max:50'],
            'num_int' => ['required', 'string', 'max:50'],
            'codigo_postal' => ['required', 'max:20'],
            'otras_referencias' => ['required', 'string', 'max:255'],
            'telefono_fijo' => ['required', 'max:10'],
            'telefono_celular' => ['required', 'max:10'],
    ]);
        //------------------METODO 2---------------
        //la direferencias es que los input deben de estar con el mismo nombre de los campos en la tabla de la base de datos
        direcciones_sucursale::create($request->all());
        return 'siiiii, ya se guardo :3 eres chida, sigue asi';
    }
}
