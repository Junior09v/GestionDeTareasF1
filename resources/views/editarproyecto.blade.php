@extends('madre.plantilla')

@section('titulo', 'Formulario de estudiante')

@section('contenido')
<h1>Proyecto</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form  method="POST" action="{{ route('proyecto.update', ['id'=>$proyecto->id]) }}">
@method('put')
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del proyecto" value="{{ $proyecto->nombre }}">
      </div><br>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" name="descripcion"  id="descripcion" placeholder="Descripcion de la tarea" value="{{ $proyecto->descripcion }}">
      </div>
      <br>
      <button class="btn btn-primary" type="submit">Guardar</button>
      <input class="btn btn-danger" type="reset" value="Borrar">

</form>
@endsection
