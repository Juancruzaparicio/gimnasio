<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Planes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Planes</li>
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
                    <td><a class="btn btn-block bg-gradient-primary btn-sm" href="?c=plan&a=FormCrearPlan&id=<?=$r->id_plan?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-block bg-gradient-primary btn-sm" href="?c=plan&a=BorrarPlan&id=<?=$r->id_plan?>">
                          <i class="fas fa-trash"></i>
                        </a></td>
                  </tr>
                  <?php endforeach;?>
                  <a class="btn btn-app" href="?c=plan&a=FormCrearPlan">
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