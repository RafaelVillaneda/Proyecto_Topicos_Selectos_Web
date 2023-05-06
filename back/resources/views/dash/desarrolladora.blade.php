@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Desarrolladoras</h1>
@stop

@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Desarrolladora</button>
<br><br>
<table class="table table-responsive-sm" id="tabla_desarrolladores">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de la desarrolladora</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($desa as $registro)
    <tr>
      <td>{{ $registro->id }}</td>
      <td>{{ $registro->nombre_desarrolladora }}</td>
      <td>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalModificar" data-id="{{$registro->id}}" data-nombre="{{$registro->nombre_desarrolladora}}">Modificar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </td>
      <!-- Agrega más columnas según las columnas de tu tabla -->
    </tr>
    @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Desarrolladora</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="/desarrolladora">
        @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la desarrolladora</label>
            <input type="text" class="form-control" id="nombre_desa" name="nombre_desa" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tenemos uno nuevo!</div>
          </div>
          <button type="submit" class="btn btn-primary">Agregar Desarrollador</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Desarrolladora</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="/desarrolladora" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input readonly type="number" class="form-control" id="id" name="id" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la desarrolladora</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tenemos uno nuevo!</div>
          </div>
          <button type="submit" class="btn btn-primary">Agregar Desarrollador</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

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
        $('#modalModificar').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget) // Botón que activó el modal
          var id = button.data('id') // Extraer la información de atributos de datos
          var nombre = button.data('nombre')
          var modal = $(this)

          // Asignar los valores a los campos del formulario
          modal.find('.modal-body #id').val(id)
          modal.find('.modal-body #nombre').val(nombre)
        })
      </script>

<script>
  $(document).ready(function() {
    $('#tabla_desarrolladores').DataTable();
  });
</script>

@stop