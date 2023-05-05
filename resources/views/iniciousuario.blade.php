@extends('madre.plantilla') 

@section('titulo', 'Lista de tareas')
@section('contenido')

@if (session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>

@endif



<h2 ><center><strong>LISTA DE USUARIOS </strong></center></h2>
   
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-primary"  href="{{ route('usuario.crear') }}">Nueva Usuario</a>
</div>

<table  class="table table-striped table-hover" class="pagination">
    <thead>
   
        
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre </th>
        <th scope="col">Correo</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario )
        <tr>
            <th scope="row">{{ $usuario->id }}</th>
            <td>{{ $usuario->nombre }} </td>
            <td>{{ $usuario->correo_electronico }}</td>
            <td><a  class="btn btn-outline-success" href="{{ route('usuario.mostrar' , ['id'=>$usuario->id]) }}">Ver</a></td>
            <td><a  class="btn btn-outline-info" >Editar</a></td>
            <td>
                <form method="POST" action=>
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
  {{ $usuarios->links() }}
 