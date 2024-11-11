<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?=$titulo?> Pagos:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="?c=pago&a=ctrGuardarPago">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?=$p->getId_pago()?>">
                    <label for="id_cliente_pago">Cliente</label>
                    <select required class="form-control" name="id_cliente_pago" id="id_cliente_pago">
                        <option value="">Seleccione un Cliente</option>
                        <?php foreach ($clientes as $cliente): ?>
                            <option value="<?= $cliente->id_cliente ?>" <?= $p->getId_cliente() == $cliente->id_cliente ? "selected" : "" ?>>
                                <?= $cliente->nombre . ' ' . $cliente->apellido ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="monto">Monto</label>
                    <input required type="number" class="form-control" name="monto" placeholder="monto" value="<?=$p->getMonto_pagado()?>">
                  </div>
                  <div class="form-group">
                    <label for="metodo">Metodo</label>
                    <input required type="text" class="form-control" name="metodo" placeholder="metodo" value="<?=$p->getMetodo_pago()?>">
                  </div>
                  <div class="form-group">
                  <label for="id_plan_pago">Cliente</label>
                  <select required class="form-control" name="id_plan_pago" id="id_plan_pago">
                        <option value="">Seleccione un Plan</option>
                        <?php foreach ($planes as $plan): ?>
                            <option value="<?= $plan->id_plan ?>" <?= $p->getId_plan() == $plan->id_plan ? "selected" : "" ?>>
                                <?= $plan->nombre ?>
                            </option>
                        <?php endforeach; 
                        ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="estado">Estado</label>
                    <input required type="text" class="form-control" name="estado" placeholder="estado" value="<?=$p->getEstado_pago()?>">
                  </div>
                  <div class="form-group">
                    <label for="fecha">fecha de pago</label>
                    <input type="text" class="form-control" name="fecha" placeholder="yyyy-mm-dd" value="<?=$p->getFecha_pago()?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->