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
                <h3 class="card-title">Registrar Clientes:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="?c=cliente&a=GuardarCliente">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id">
                    <label for="dni_cliente">DNI</label>
                    <input required type="number" class="form-control" name="dni_cliente" placeholder="DNI">
                  </div>
                  <div class="form-group">
                    <label for="nombre_cliente">Nombre</label>
                    <input required type="text" class="form-control" name="nombre_cliente" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido_cliente">Apellido</label>
                    <input required type="text" class="form-control" name="apellido_cliente" placeholder="Apellido">
                  </div>
                  <div class="form-group">
                    <label for="telefono_cliente">Telefono</label>
                    <input required type="number" class="form-control" name="telefono_cliente" placeholder="Telefono">
                  </div>
                  <div class="form-group">
                    <label for="mail_cliente">Mail</label>
                    <input required type="text" class="form-control" name="mail_cliente" placeholder="Mail">
                  </div>
                  <div class="form-group">
                    <label for="fecha_nacimiento_cliente">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nacimiento_cliente" placeholder="yyyy-mm-dd">
                  </div>
                  <div class="form-group">
                    <label for="direccion_cliente">Direccion</label>
                    <input required type="text" class="form-control" name="direccion_cliente" placeholder="Direccion">
                  </div>
                  <div class="form-group">
                    <label for="fecha_inscripcion_cliente">Fecha de inscripcion</label>
                    <input type="text" class="form-control" name="fecha_inscripcion_cliente" placeholder="Fecha de inscripcion">
                  </div>
                  <div class="form-group">
                    <label for="id_plan_cliente">Plan</label>
                    <input required type="number" class="form-control" name="id_plan_cliente" placeholder="Plan">
                  </div>
                  <div class="form-group">
                    <label for="estado_cliente">Estado</label>
                    <input required type="text" class="form-control" name="estado_cliente" placeholder="Estado">
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