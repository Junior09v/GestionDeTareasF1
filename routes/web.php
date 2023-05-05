<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareascontroller;
use App\Http\Controllers\proyectoscontroller;
use App\Http\Controllers\usuarioscontroller;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas', [tareascontroller::class, 'index'])->name('tarea.index');

Route::get('/tareas/{id}', [tareascontroller::class, 'show'])
->name('tarea.mostrar')->where('id', '[0-9]+');

Route::get('/tareas/crear', [tareascontroller::class, 'create'])
->name('tarea.crear');

Route::post('/tareas/crear', [tareascontroller::class, 'store'])
->name('tarea.guardar');


Route::get('/tareas/{id}/editar', [tareascontroller::class, 'edit'])
->name('tarea.edit')->where('id', '[0-9]+');

Route::put('/tareas/{id}/editar', [tareascontroller::class, 'update'])
->name('tarea.update')->where('id','[0-9]+');

Route::delete('/tareas/{id}/borrar', [tareascontroller::class, 'destroy'])
->name('tarea.borrar')->where('id', '[0-9]+');


//proyecto

Route::get('/proyecto', [proyectoscontroller::class, 'index'])->name('proyecto.index');

Route::get('/proyecto/{id}', [proyectoscontroller::class, 'show'])
->name('proyecto.mostrar')->where('id', '[0-9]+');

Route::get('/proyecto/crear', [proyectoscontroller::class, 'create'])
->name('proyecto.crear');

Route::post('/proyecto/crear', [proyectoscontroller::class, 'store'])
->name('proyecto.guardar');

Route::get('/proyecto/{id}/editar', [proyectoscontroller::class, 'edit'])
->name('proyecto.edit')->where('id', '[0-9]+');

Route::put('/proyecto/{id}/editar', [proyectoscontroller::class, 'update'])
->name('proyecto.update')->where('id','[0-9]+');

Route::delete('/proyecto/{id}/borrar', [proyectoscontroller::class, 'destroy'])
->name('proyecto.borrar')->where('id', '[0-9]+');


//usuario

Route::get('/usuario', [usuarioscontroller::class, 'index'])->name('usuario.index');

Route::get('/usuario/{id}', [usuarioscontroller::class, 'show'])
->name('usuario.mostrar')->where('id', '[0-9]+');

Route::get('/usuario/crear', [usuarioscontroller::class, 'create'])
->name('usuario.crear');

Route::post('/usuario/crear', [usuarioscontroller::class, 'store'])
->name('usuario.guardar');