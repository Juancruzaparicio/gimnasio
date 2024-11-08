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
                    <th>Nombre</th>
                    <th>Apellido</th>
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
                    <td><?=$r->duracion_semanas?> semanas</td>
                    <td><?=$r->cantidadsesiones_semana?> por semana</td>
                    <td><?=$r->nombre_entrenador?></td>
                    <td><?=$r->apellido_entrenador?></td>
                    <td><a class="btn btn-block bg-gradient-primary btn-sm" href="?c=plan&a=FormCrearPlan&id=<?=$r->id_plan?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-block bg-gradient-primary btn-sm btnEliminarPlan" data-id="<?=$r->id_plan?>" data-toggle="modal" data-target="#modal-danger">
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
            <div class="modal fade" id="modal-danger" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="modalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este Plan? Esta acción no se puede deshacer.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButtonPlan">Eliminar</button>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->