<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabla Entrenadores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pagos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>codigo</th>
                    <th>descripcion</th>
                    <th>duracion</th>
                    <th>cantidad de sesiones</th>
                    <th>entrenador</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($this->modelo->ListarPlan() as $r):?>
                  <tr>
                    <td><?=$r->id_plan?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->codigo?></td>
                    <td><?=$r->descripcion?></td>
                    <td><?=$r->duracion_semanas?></td>
                    <td><?=$r->cantidadsesiones_semana?></td>
                    <td><?=$r->id_entrenador?></td>
                    <td><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Editar</button>
                    <button type="button" class="btn btn-block bg-gradient-danger btn-xs">Eliminar</button></td>
                  </tr>
                  <?php endforeach;?>
                  <a class="btn btn-app">
                  <i class="fas fa-plus"></i> Agregar</a>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->