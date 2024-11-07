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
              <form method="POST" action="?c=pago&a=GuardarPago">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?=$p->getId_pago()?>">
                    <label for="cliente">cliente</label>
                    <input required type="number" class="form-control" name="cliente" placeholder="cliente" value="<?=$p->getId_cliente()?>">
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
                    <label for="plan">Plan</label>
                    <input required type="number" class="form-control" name="plan" placeholder="plan" value="<?=$p->getId_plan()?>">
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