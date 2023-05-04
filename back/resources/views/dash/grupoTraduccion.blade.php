@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Grupos de traducciones</h1>
@stop

@section('content')
<table class="table" id="tabla_traducciones">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Grupo traductor</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($traductores as $registro)
    <tr>
      <td>{{ $registro->id }}</td>
      <td>{{ $registro->nombre_grupo }}</td>
      <td>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Modificar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </td>
      <!-- Agrega más columnas según las columnas de tu tabla -->
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    $('#tabla_traducciones').DataTable();
  });
</script>

@stop