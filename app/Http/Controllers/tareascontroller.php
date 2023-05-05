<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;
use Illuminate\Support\Facades\DB;


class tareascontroller extends Controller
{

    public function index(Request $request){
        $buscarTarea=$request->get('buscar');
        $tarea_b=DB::table('tareas')
                    ->select('id','nombre','estado', 'descripcion', 'fecha_inicio', 'fecha_fin', 'proyecto_id', 'usuario_id')
                    ->where('nombre', 'LIKE', '%'.$buscarTarea.'%')
                    ->paginate(10);
        return view ('pantallainicio', compact('tarea_b','buscarTarea'));

        $tarea_b = tarea::paginate(20);
        return view('pantallainicio', compact('tarea_b'));
    }


    public function show($id){
        $tarea = tarea::findOrFail($id);
        return view ('tareaindividual')->with('tarea', $tarea);
    }

    public function create(){
        return view('formulariotareas');
    }
    public function store(Request $request){

        $request->validate([
            'nombre'=>'required|alpha',
            'descripcion'=>'required',
            'proyecto_id'=>'required|numeric|min:0|max:20',
            'usuario_id'=>'required|numeric|min:0|max:20',
            
        ]);
    

        $nuevatarea = new tarea();

      
        $nuevatarea->nombre =  $request->input('nombre');
        $nuevatarea->descripcion = $request->input('descripcion');
        $nuevatarea->proyecto_id = $request->input('proyecto_id');
        $nuevatarea->usuario_id = $request->input('usuario_id');
        $nuevatarea->fecha_inicio = '20020509';
        $nuevatarea->fecha_fin = '20230509';


        $creado = $nuevatarea->save();


        if($creado){
            return redirect()->route('tarea.index')->with('mensaje', 'la tarea fue creado exitosamente.');
        }else{
            
        }
    }
    
    public function update(Request $request, $id){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'proyecto_id'=>'required|numeric|min:0|max:20',
            'usuario_id'=>'required|numeric|min:0|max:20',
            
        ]);

        $tarea  = tarea::findOrFail($id);

        $tarea->nombre =  $request->input('nombre');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->proyecto_id = $request->input('proyecto_id');
        $tarea->usuario_id = $request->input('usuario_id');

        $tarea->fecha_inicio = '20020509';
        $tarea->fecha_fin = '20230509';


        $creado = $tarea->save();


        if($creado){
            return redirect()->route('tarea.index')->with('mensaje', 'la tarea editada exitosamente.');
        }else{
        }
       
    }
    public function edit($id){
        $tarea = tarea::findOrFail($id);
        return view ('formularioeditar')->with('tarea', $tarea);
    }
    public function destroy($id){
        tarea::destroy($id);

        return redirect()->route('tarea.index')->with('mensaje', 'La tarea fue borrada completamente');
    }
}
