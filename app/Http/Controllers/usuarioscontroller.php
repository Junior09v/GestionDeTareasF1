<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class usuarioscontroller extends Controller
{
    public function index(){
        $usuarios = usuario::paginate(10);
        return view ('iniciousuario', compact('usuarios'));
    }

    public function show($id){
        $usuario = usuario::findOrFail($id);
        return view ('usuarioindevidual')->with('usuario', $usuario);
    }

    public function create(){
        return view('crearusuario');
    }
    public function store(Request $request){

        $request->validate([
            'nombre'=>'required|alpha',
            'correo_electronico'=>'required',
            
        ]);
    

        $nuevausuario = new usuario();

      
        $nuevausuario->nombre =  $request->input('nombre');
        $nuevausuario->correo_electronico = $request->input('correo_electronico');
    
     


        $creado = $nuevausuario->save();


        if($creado){
            return redirect()->route('usuario.index')->with('mensaje', 'el usuario fue creado exitosamente.');
        }else{
            
        }
    }

}
