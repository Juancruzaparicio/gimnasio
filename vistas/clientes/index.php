<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
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
                    <th>Fecha de nacimiento</th>
                    <th>Direccion</th>
                    <th>Fecha de inscripcion</th>
                    <th>Plan</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($cliente as $r):?>
                  <tr>
                    <td><?=$r->id_cliente?></td>
                    <td><?=$r->dni?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->apellido?></td>
                    <td><?=$r->telefono?></td>
                    <td><?=$r->mail?></td>
                    <td><?=$r->fecha_nacimiento?></td>
                    <td><?=$r->direccion?></td>
                    <td><?=$r->fecha_inscripcion?></td>
                    <td><?=$r->nombre_plan?></td>
                    <td><?=$r->estado?></td>
                    <td><a class="btn btn-block bg-gradient-primary btn-sm" href="?c=cliente&a=ctrFormCrearClientes&id=<?=$r->id_cliente?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-block bg-gradient-primary btn-sm btnEliminarCliente" data-id="<?=$r->id_cliente?>" data-toggle="modal" data-target="#modal-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                  </tr>
                  <?php endforeach;?>
                  <a class="btn btn-app" href="?c=cliente&a=ctrFormCrearClientes">
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
                    ¿Estás seguro de que deseas eliminar este cliente? Esta acción no se puede deshacer.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Eliminar</button>
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