<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\factories\proyectofactory;



class proyecto extends Model
{
    use HasFactory;

    public function tareas(){
        return $this-> hasMany(tarea::class); 
    }
}
