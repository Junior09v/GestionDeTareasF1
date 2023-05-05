<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;

class proyectoscontroller extends Controller
{
    public function index(){
        $proyectos = proyecto::paginate(10);
        return view ('inicioproyrcto', compact('proyectos'));
    }

    
    public function show($id){
        $proyecto = proyecto::findOrFail($id);
        return view ('proyectoindividual')->with('proyecto', $proyecto);
    }

    
    public function create(){
        return view('formularioproyecto');
    }
    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
    

        $nuevaproyecto = new proyecto();

      
        $nuevaproyecto->nombre =  $request->input('nombre');
        $nuevaproyecto->descripcion = $request->input('descripcion');
        $nuevaproyecto->fecha_inicio = '20000509';
        $nuevaproyecto->fecha_fin = '20250509';


        $creado = $nuevaproyecto->save();


        if($creado){
            return redirect()->route('proyecto.index')->with('mensaje', 'el proyecto fue creado exitosamente.');
        }else{
            
        }
    }
    
    public function update(Request $request, $id){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            
        ]);

        $proyecto  = proyecto::findOrFail($id);

        $proyecto->nombre =  $request->input('nombre');
        $proyecto->descripcion = $request->input('descripcion');

        $proyecto->fecha_inicio = '20020509';
        $proyecto->fecha_fin = '20230509';


        $creado = $proyecto->save();


        if($creado){
            return redirect()->route('proyecto.index')->with('mensaje', 'la tarea editada exitosamente.');
        }else{
        }
       
    }
    public function edit($id){
        $proyecto = proyecto::findOrFail($id);
        return view ('editarproyecto')->with('proyecto');
    }

    public function destroy($id){
        proyecto::destroy($id);

        return redirect()->route('proyecto.index')->with('mensaje', 'el proyecto fue borrada completamente');
    }
}
