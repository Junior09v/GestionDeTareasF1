@extends('madre.plantilla')

@section('titulo', 'Tarea')

@section('contenido')

<h1>Detalles de usuario: {{ $usuario->nombre }} 
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
            <td>{{ $usuario->nombre }}</td>
          </tr>
        <tr>
            <th scope="row">Descripcion</th>
            <td>{{ $usuario->correo_electronico }}</td>
        </tr>
        <tr>
    </tbody>

  </table>

  <a class="btn btn-outline-info" href="{{ route('usuario.index') }}">Volver</a>
@endsection
