<?php

namespace App\Http\Controllers;

use App\Models\Contenedores;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio 
        $datos = Contenedores::orderBy('ruta', 'desc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    public function invitado()
    {
        //pagina de inicio 
        $datos = Contenedores::orderBy('ruta', 'desc')->paginate(3);
        return view('invitado', compact('datos'));
    }

    public function create()
    {
        //el formulario donde 
        //nosotros agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $contenedores = new Contenedores();
        $contenedores->ruta = $request->post('ruta');
        $contenedores->contenedor = $request->post('contenedor');
        $contenedores->ubicacion = $request->post('ubicacion');
        $contenedores->estatus = $request->post('estatus');
        $contenedores->alerta = 0;
        $contenedores->save();

        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $contenedores = Contenedores::find($id);
        return view("eliminar" , compact('contenedores'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $contenedores = Contenedores::find($id);
        return view("actualizar" , compact('contenedores'));
        
    }

    public function alert($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $contenedores = Contenedores::find($id);
        return view("alerta" , compact('contenedores'));
        
    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $contenedores = Contenedores::find($id);
        $contenedores->ruta = $request->post('ruta');
        $contenedores->contenedor = $request->post('contenedor');
        $contenedores->ubicacion = $request->post('ubicacion');
        $contenedores->estatus = $request->post('estatus');
        $contenedores->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
        
    }

    public function alertUpdate(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $contenedores = Contenedores::find($id);
        $contenedores->alerta = $request->post('alert');
        $contenedores->save();

        return redirect()->route("personas.invitado")->with("success", "Alerta con exito!");
        
    }

    public function destroy($id)
    {
        $contenedores = Contenedores::find($id);
        $contenedores->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
