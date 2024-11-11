<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pagos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Pagos</li>
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
                    <th>cliente</th>
                    <th>monto pagado</th>
                    <th>metodo de pago</th>
                    <th>plan</th>
                    <th>estado de pago</th>
                    <th>fecha de pago</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($pagos as $r):?>
                  <tr>
                    <td><?=$r->id_pago?></td>
                    <td><?=$r->nombre_cliente?>  <?=$r->apellido_cliente?></td>
                    <td><?=$r->monto_pagado?></td>
                    <td><?=$r->metodo_pago?></td>
                    <td><?=$r->nombre_plan?></td>
                    <td><?=$r->estado_pago?></td>
                    <td><?=$r->fecha_pago?></td>
                    <td><a class="btn btn-block bg-gradient-primary btn-sm" href="?c=pago&a=ctrFormCrearPago&id=<?=$r->id_pago?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-block bg-gradient-primary btn-sm btnEliminarPago" data-id="<?=$r->id_pago?>" data-toggle="modal" data-target="#modal-danger">
                          <i class="fas fa-trash"></i>
                        </a></td>
                  </tr>
                  <?php endforeach;?>
                  <a class="btn btn-app" href="?c=pago&a=ctrFormCrearPago">
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
                    ¿Estás seguro de que deseas eliminar este Pago? Esta acción no se puede deshacer.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButtonPago">Eliminar</button>
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