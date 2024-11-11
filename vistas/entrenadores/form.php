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
                <h3 class="card-title"><?=$titulo?> Entrenadores:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="?c=entrenador&a=ctrGuardarEntrenador">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?=$p->getId_entrenador()?>">
                    <label for="dni_entrenador">DNI</label>
                    <input required type="number" class="form-control" name="dni_entrenador" placeholder="DNI" value="<?=$p->getDni()?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre_entrenador">Nombre</label>
                    <input required type="text" class="form-control" name="nombre_entrenador" placeholder="Nombre" value="<?=$p->getNombre()?>">
                  </div>
                  <div class="form-group">
                    <label for="apellido_entrenador">Apellido</label>
                    <input required type="text" class="form-control" name="apellido_entrenador" placeholder="Apellido" value="<?=$p->getApellido()?>">
                  </div>
                  <div class="form-group">
                    <label for="telefono_entrenador">Telefono</label>
                    <input required type="number" class="form-control" name="telefono_entrenador" placeholder="Telefono" value="<?=$p->getTelefono()?>">
                  </div>
                  <div class="form-group">
                    <label for="mail_entrenador">Mail</label>
                    <input required type="text" class="form-control" name="mail_entrenador" placeholder="Mail" value="<?=$p->getMail()?>">
                  </div>
                  <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" class="form-control" name="especialidad" placeholder="Especialidad" value="<?=$p->getEspecialidad()?>">
                  </div>
                  <div class="form-group">
                    <label for="fecha_contranacion_entrenador">fecha de contratacion</label>
                    <input required type="text" class="form-control" name="fecha_contranacion_entrenador" placeholder="yyyy-mm-dd" value="<?=$p->getFechacontratacion()?>">
                  </div>
                  <div class="form-group">
                    <label for="estado_entrenador">Estado</label>
                    <input type="text" class="form-control" name="estado_entrenador" placeholder="estado" value="<?=$p->getEstado()?>">
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