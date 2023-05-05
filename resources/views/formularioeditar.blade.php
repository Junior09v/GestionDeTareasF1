@extends('madre.plantilla')

@section('titulo', 'Formulario de estudiante')

@section('contenido')
<h1>Estudiante</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form  method="post" action="{{ route('tarea.update', ['id'=>$tarea->id]) }}">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre de la tarea" value="{{ $tarea->nombre }}" >
      </div><br>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" name="descripcion"  id="descripcion" placeholder="Descripcion de la tarea" value="{{ $tarea->descripcion }}">
      </div><br>
      <div class="form-group">
      <label for="estado">Selecciona una estado:</label>
        <select name="estado" id="estado" value="{{ $tarea->estado }}">
        <option value="opcion1">completada</option>
        <option value="opcion2">pendiente</option>
        <option value="opcion3">en progreso</option>
        </select>
      </div><br>
    
      <div class="form-group">
        <label for="proyecto_id">Id Proyecto</label>
        <input type="number" class="form-control" name="proyecto_id"  id="proyecto_id" placeholder="###########" value="{{ $tarea->proyecto_id }}">
      </div><br>
      <div class="form-group">
        <label for="usuario_id">Id Usuario</label>
        <input type="number" class="form-control" name="usuario_id"  id="usuario_id" placeholder="###########" value="{{ $tarea->usuario_id }}">
      </div><br>
      <button class="btn btn-outline-info" type="submit">Guardar</button>
      

</form>
@endsection
