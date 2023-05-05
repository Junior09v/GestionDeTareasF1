@extends('madre.plantilla')

@section('titulo', 'Tarea')

@section('contenido')

<h1>Detalles de tarea: {{ $tarea->nombre }} 
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
            <td>{{ $tarea->nombre }}</td>
          </tr>
        <tr>
            <th scope="row">Descripcion</th>
            <td>{{ $tarea->descripcion }}</td>
        </tr>
        <tr>
            <th scope="row">Estado</th>
            <td>{{ $tarea->estado }}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Inicio</th>
            <td>{{ $tarea->fecha_inicio }}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Fin</th>
            <td>{{ $tarea->fecha_fin }}</td>
        </tr>
        <tr>
            <th scope="row">Id Proyecto</th>
            <td>{{ $tarea->proyecto_id }}</td>
        </tr>
        <tr>
            <th scope="row">Id Usuario</th>
            <td>{{ $tarea->usuario_id }}</td>
        </tr>
    </tbody>

  </table>

  <a class="btn btn-outline-info" href="{{ route('tarea.index') }}">Volver</a>
@endsection
