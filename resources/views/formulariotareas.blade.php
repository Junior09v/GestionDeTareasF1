@extends('madre.plantilla')

@section('titulo', 'Formulario de estudiante')

@section('contenido')
<h1>Tarea</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form  method="POST" action="">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del estudiante">
      </div><br>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" name="descripcion"  id="descripcion" placeholder="Descripcion de la tarea">
      </div><br>
      <div class="form-group">
      <label for="estado">Selecciona una estado:</label>
        <select name="estado" id="estado">
        <option value="opcion1">completada</option>
        <option value="opcion2">pendiente</option>
        <option value="opcion3">en progreso</option>
        </select>
      </div><br>
    
      <div class="form-group">
        <label for="proyecto_id">Id Proyecto</label>
        <input type="number" class="form-control" name="proyecto_id"  id="proyecto_id" placeholder="###########">
      </div><br><br>
      <div class="form-group">
        <label for="usuario_id">Id Usuario</label>
        <input type="number" class="form-control" name="usuario_id"  id="usuario_id" placeholder="###########">
      </div><br>
      <button class="btn btn-primary" type="submit">Guardar</button>
      <input class="btn btn-danger" type="reset" value="Borrar">

</form>
@endsection
