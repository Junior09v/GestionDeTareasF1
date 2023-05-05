@extends('madre.plantilla') 

@section('titulo', 'Lista de tareas')
@section('contenido')

@if (session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>

@endif



<h2 ><center><strong>LISTA DE PROYECTOS </strong></center></h2>
   
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-primary" href="{{ route('proyecto.crear') }}">Nueva Proyecto</a>
</div>

<table  class="table table-striped table-hover" class="pagination">
    <thead>
   
        
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre </th>
        <th scope="col">Fecha Inicio</th>
        <th scope="col">Fecha Fin</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($proyectos as $proyecto )
        <tr>
            <th scope="row">{{ $proyecto->id }}</th>
            <td>{{ $proyecto->nombre }} </td>
            <td>{{ $proyecto->fecha_inicio }}</td>
            <td>{{ $proyecto->fecha_fin }}</td>
            <td><a  class="btn btn-outline-success" href="{{ route('proyecto.mostrar' , ['id'=>$proyecto->id]) }}">Ver</a></td>
            <td><a  class="btn btn-outline-info" href="{{ route('proyecto.edit' , ['id'=>$proyecto->id]) }}">Editar</a></td>
            <td>
                <form method="POST" action="{{ route('proyecto.borrar', ['id'=>$proyecto->id]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                </form>
            </td>


          </tr>
        @empty
        <tr>
            <td colspan="4">No hay proyecto</td>
        </tr>
        @endforelse
        <nav aria-label="Page navigation example">
    </tbody>

 

  </table>
  {{ $proyectos->links() }}
 
