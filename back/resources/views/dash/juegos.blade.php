@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Juegos Publicados</h1>
@if (session('elimiadoCorrecto'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session('elimiadoCorrecto') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@stop

@section('content')
<button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#modal_crear">Crear</button>
<br><br>
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
    @foreach ($juegos as $registro)
    <tr>
      <td>{{ $registro->id }}</td>
      <td>{{ $registro->nombre }}</td>
      <td>{{ $registro->genero }}</td>
      <td>{{ $registro->descripcion }}</td>
      <td>{{ $registro->ano_publicacion }}</td>
      <td>{{ $registro->desarrolladora_id }}</td>
      <td>{{ $registro->grupotraduccion_id }}</td>
      <td>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $registro->id }}" data-nombre="{{ $registro->nombre }}" data-genero="{{ $registro->genero }}" data-descripcion="{{ $registro->descripcion }}" data-ano="{{ $registro->ano_publicacion }}" data-desarrolladora="{{ $registro->desarrolladora_id }}" data-grupo="{{ $registro->grupo_traduccion }}">Modificar</button>
        <br><br>
        <form method="POST" action="/juegos/{{$registro->id}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
        </form>

      </td>
      <!-- Agrega más columnas según las columnas de tu tabla -->
    </tr>
    @endforeach
    </tr>
  </tbody>
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/juegos/{id}" method="post" id="form-juegos">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="text" required class="form-control" name="id" id="input-id" placeholder="Escribe el nombre del juego">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Juego</label>
            <input type="text" required class="form-control" name="nombre" id="nombre" placeholder="Escribe el nombre del juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genero del Juego</label>
            <input type="text" required class="form-control" name="genero" id="genero" placeholder="Escribe el genero del juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del juego</label>
            <input type="text" required class="form-control" name="desc" id="desc" placeholder="Descripcion breve del Juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año de publicacion</label>
            <input type="number" required min="1950" class="form-control" name="año" id="año" placeholder="Año de publicacion">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Desarrolladora</label>
            <select required id="desaSelect" class="form-control" name="desa">
              <option value="">Selecciona una opción</option>
              @foreach ($desa as $registro)
              <option value="{{ $registro->id }}">{{ $registro->nombre_desarrolladora }}</option>
              @endforeach
            </select>
            <br><label for="exampleInputEmail1" class="form-label">Id de la desarrolladora</label>
            <input id="desaInput" readonly required type="text" class="form-control" name="desa" placeholder="Elige la desarrolladora">

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Grupo de traduccion</label>
            <select required id="id:traduccion" class="form-control" name="desa" onchange="updateGroupId()">
              <option value="">Selecciona una opción</option>
              @foreach ($traductores as $registro)
              <option value="{{ $registro->id }}">{{ $registro->nombre_grupo }}</option>
              @endforeach
            </select>
            <br>
            <label for="exampleInputEmail1" class="form-label">Id del grupo de traductores</label>
            <input readonly type="text" required class="form-control" name="grupo_tra" id="grupo_tra" min="1950" placeholder="Nombre del grupo de traduccion">
          </div>
          <button id="submitBtn" type="submit" class="btn btn-primary">Modificar Registro</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/juegos" method="post">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Juego</label>
            <input type="text" required class="form-control" name="nombre" placeholder="Escribe el nombre del juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genero del Juego</label>
            <input type="text" required class="form-control" name="genero" placeholder="Escribe el genero del juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del juego</label>
            <input type="text" required class="form-control" name="desc" placeholder="Descripcion breve del Juego">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año de publicacion</label>
            <input type="number" required min="1950" class="form-control" name="año" placeholder="Año de publicacion">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Desarrolladora</label>
            <select required id="grupoSelectDesa" class="form-control" name="desa" onchange=actualizarIdDesaAltas()>
              <option value="">Selecciona una opción</option>
              @foreach ($desa as $registro)
              <option value="{{ $registro->id }}">{{ $registro->nombre_desarrolladora }}</option>
              @endforeach
            </select>
            <br><label for="exampleInputEmail1" class="form-label">Id de la desarrolladora</label>
            <input id="grupo_desa_altas" readonly required type="text" class="form-control" name="desa" placeholder="Elige la desarrolladora">

          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Grupo de traduccion</label>
            <select required id="grupoSelectTraduccion" class="form-control" name="grupo_tra" onchange=actualizarIdTraduccionAltas()>
              <option value="">Selecciona una opción</option>
              @foreach ($desa as $registro)
              <option value="{{ $registro->id }}">{{ $registro->nombre_desarrolladora }}</option>
              @endforeach
            </select>
            <br>
            <label for="exampleInputEmail1" class="form-label">Id del grupo de traductores</label>
            <input readonly type="text" required class="form-control" name="grupo_tra" id="grupo_traAltas" placeholder="Id del grupo de traductores">
          </div>



          <button id="submitBtn" type="submit" class="btn btn-primary">Agregar registro</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
  // Selecciona el formulario y el campo de entrada
  const form = document.getElementById('form-juegos');
  const inputId = document.getElementById('input-id');

  // Agrega un controlador de eventos para el evento submit del formulario
  form.addEventListener('submit', (event) => {
    // Actualiza el valor del atributo action con el valor del campo id
    form.setAttribute('action', `/juegos/${inputId.value}`);
  });
</script>

<script>
  $('#exampleModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var id = button.data('id') // Extraer la información de atributos de datos
    var nombre = button.data('nombre')
    var genero = button.data('genero')
    var descripcion = button.data('descripcion')
    var ano = button.data('ano')
    var desarrolladora = button.data('desarrolladora')
    var grupo = button.data('grupo')
    var modal = $(this)

    // Asignar los valores a los campos del formulario
    modal.find('.modal-body #input-id').val(id)
    modal.find('.modal-body #nombre').val(nombre)
    modal.find('.modal-body #genero').val(genero)
    modal.find('.modal-body #desc').val(descripcion)
    modal.find('.modal-body #año').val(ano)
    modal.find('.modal-body #desa').val(desarrolladora)
    modal.find('.modal-body #grupo_tra').val(grupo)
  })
</script>


<script>
  document.getElementById("submitBtn").onclick = function() {
    if (!confirm("¿Estás seguro de que quieres efectuar los cambios?")) {
      return false;
    }
  };
</script>



<script>
  $(document).ready(function() {
    $('#tabla_Juegos').DataTable();
  });
</script>

<script>
  const desaSelect = document.getElementById('desaSelect');
  const desaInput = document.getElementById('desaInput');

  desaSelect.addEventListener('change', (event) => {
    desaInput.value = event.target.value;
  });
</script>

<script>
  function updateGroupId() {
    var select = document.getElementById("id:traduccion");
    var groupId = select.options[select.selectedIndex].value;
    document.getElementById("grupo_tra").value = groupId;
  }
</script>

<script>
  function actualizarIdTraduccionAltas() {
    var select = document.getElementById("grupoSelectTraduccion");
    //var input = document.getElementById("grupo_tra");
    var value = select.value;
    document.getElementById("grupo_traAltas").value = value;
  }
</script>

<script>
  function actualizarIdDesaAltas() {
    var select = document.getElementById("grupoSelectDesa");
    //var input = document.getElementById("grupo_tra");
    var value = select.value;
    document.getElementById("grupo_desa_altas").value = value;
  }
</script>

@stop