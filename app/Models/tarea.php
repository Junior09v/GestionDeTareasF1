<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\factories\tareafactory;

class tarea extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this-> belongsTo(usuario::class); 
    }

    public function proyectos (){
        return $this-> belongsTo(proyecto::class); 
    }
}
