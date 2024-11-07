<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entrenadores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Entrenadores</li>
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
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Mail</th>
                    <th>Especialidad</th>
                    <th>Fecha de contratacion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($this->modelo->ListarEntrenador() as $r):?>
                  <tr>
                    <td><?=$r->id_entrenador?></td>
                    <td><?=$r->dni?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->apellido?></td>
                    <td><?=$r->telefono?></td>
                    <td><?=$r->mail?></td>
                    <td><?=$r->especialidad?></td>
                    <td><?=$r->fecha_contratacion?></td>
                    <td><?=$r->estado?></td>
                    <td><a class="btn btn-block bg-gradient-primary btn-sm" href="?c=entrenador&a=FormCrearEntrenador&id=<?=$r->id_entrenador?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-block bg-gradient-primary btn-sm" href="?c=entrenador&a=BorrarEntrenador&id=<?=$r->id_entrenador?>">
                          <i class="fas fa-trash"></i>
                        </a></td>
                  </tr>
                  <?php endforeach;?>
                  <a class="btn btn-app" href="?c=entrenador&a=FormCrearEntrenador">
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