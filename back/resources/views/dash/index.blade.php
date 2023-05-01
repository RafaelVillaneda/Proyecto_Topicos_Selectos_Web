@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<table class="table" id="tabla_Juegos">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Genero del juego</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Año de publicacion</th>
      <th scope="col">Desarrolladora</th>
      <th scope="col">Grupo de traducción</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mi pequeña lulu</td>
      <td>horror</td>
      <td>Juego de meyo</td>
      <td>2015/td>
      <td>no se</td>
      <td>no se</td>
      <td>
        <button type="button" class="btn btn-warning">Modificar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#tabla_Juegos').DataTable();
  });
</script>
@stop