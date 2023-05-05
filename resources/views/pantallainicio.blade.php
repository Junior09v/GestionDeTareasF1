@extends('madre.plantilla') 

@section('titulo', 'Lista de tareas')
@section('contenido')

@if (session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>

@endif
<div class="container">
    <h5>Buscar Evento</h5>
    <div class="row" ALIGN="letf">
      <div class="col-xl-12" ALIGN="letf">
        <form action="{{ route('tarea.index')}}" method="get">
          <div class="form-row">
            <div class="col-sm-4">
              <input type="text" class="form-control" name="buscar" value="{{$buscarTarea}}">
            </div>
            <div class="col-auto">
              <br>
              <input type="submit" class="btn btn-primary" value="Buscar">
              <a class="btn btn-warning" href="{{ route('tarea.index') }}">Volver</a>
            </div>
          </div>
        </form>
      </div>
      <div class="col-xl-12">
      </div>
    </div>
  </div>
  <br>




<h2 ><center><strong>LISTA DE TAREAS </strong></center></h2>
   
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-primary" href="{{ route('tarea.crear') }}">Nueva Tarea</a>
</div>

<table  class="table table-striped table-hover" class="pagination">
    <thead>
   
        
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre </th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha Inicio</th>
        <th scope="col">Fecha Fin</th>
        <th scope="col">Proyrcto ID</th>
        <th scope="col">Usuario ID</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($tarea_b as $tarea )
        <tr>
            <th scope="row">{{ $tarea->id }}</th>
            <td>{{ $tarea->nombre }} </td>
            <td>{{ $tarea->estado }}</td>
            <td>{{ $tarea->fecha_inicio }}</td>
            <td>{{ $tarea->fecha_fin }}</td>
            <td>{{ $tarea->proyecto_id}}</td>
            <td>{{ $tarea->usuario_id }}</td>
            <td><a  class="btn btn-outline-success" href="{{ route('tarea.mostrar' , ['id'=>$tarea->id]) }}">Ver</a></td>
            <td><a  class="btn btn-outline-info" href="{{ route('tarea.edit' , ['id'=>$tarea->id]) }}">Editar</a></td>
            <td>
                <form method="POST" action="{{ route('tarea.borrar', ['id'=>$tarea->id]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                </form>
            </td>

            
            </td>


          </tr>
        @empty
        <tr>
            <td colspan="4">No hay contactos</td>
        </tr>
        @endforelse
        <nav aria-label="Page navigation example">
    </tbody>

 

  </table>
  {{ $tarea_b->links() }}
 



