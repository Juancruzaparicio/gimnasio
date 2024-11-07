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
                <h3 class="card-title"><?=$titulo?> Planes:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="?c=plan&a=GuardarPlan">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?=$p->getId_plan()?>">
                    <label for="nombre_plan">Nombre</label>
                    <input type="text" class="form-control" name="nombre_plan" placeholder="Nombre" value="<?=$p->getNombre()?>">
                  </div>
                  <div class="form-group">
                    <label for="codigo_plan">Codigo</label>
                    <input required type="number" class="form-control" name="codigo_plan" placeholder="Codigo" value="<?=$p->getCodigo()?>">
                  </div>
                  <div class="form-group">
                    <label for="descripcion_plan">Descripcion</label>
                    <input required type="text" class="form-control" name="descripcion_plan" placeholder="descripcion" value="<?=$p->getDescripcion()?>">
                  </div>
                  <div class="form-group">
                    <label for="duracion">Duracion(semanas)</label>
                    <input required type="number" class="form-control" name="duracion" placeholder="Duracion" value="<?=$p->getDuracion_semanas()?>">
                  </div>
                  <div class="form-group">
                    <label for="sesiones">Cantidad de sesiones X semana</label>
                    <input required type="number" class="form-control" name="sesiones" placeholder="sesiones" value="<?=$p->getCantidadsesiones_semana()?>">
                  </div>
                  <div class="form-group">
                    <label for="entrenador">Entrenador</label>
                    <input required type="text" class="form-control" name="entrenador" placeholder="entrenador" value="<?=$p->getId_entrenador()?>">
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