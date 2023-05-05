@extends('madre.plantilla')

@section('titulo', 'Tarea')

@section('contenido')

<h1>Detalles de proyecto: {{ $proyecto->nombre }} 
</h1>

<table class="table" class="pagination">
    <thead class="thead-light">
      <tr>
        <th scope="col">Campos</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Nombre</th>
            <td>{{ $proyecto->nombre }}</td>
          </tr>
        <tr>
            <th scope="row">Descripcion</th>
            <td>{{ $proyecto->descripcion }}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Inicio</th>
            <td>{{ $proyecto->fecha_inicio }}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Fin</th>
            <td>{{ $proyecto->fecha_fin }}</td>
    
    </tbody>

  </table>

  <a class="btn btn-outline-info" href="{{ route('proyecto.index') }}">Volver</a>
@endsection
