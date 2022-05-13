<?php
  require 'cabecero.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Departamentos  
        <button class="btn btn-success" id="btnagregar"><i class="fas fa-plus-circle" onclick="
         mostrarform(true)">Agregar</i></button></h3>
        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="collapse"
            title="Collapse"
          >
            <i class="fas fa-minus"></i>
          </button>
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="remove"
            title="Remove"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <!-- Contenedor de listados -->
        <div class="panel-body" id="listadoregdata">
          <table class="table table-striped table-bordered table-condensed table-over" id="tblistadoregdata">
            <thead>
              <th>Descripción</th>
              <th>Fecha de creación</th>
              <th>Fecha de actualización</th>
              <th>Status</th>
              <th>Empleado modifico</th>
              <th>Opciones</th>
            </thead>
            <tbody>
            <thead>
              <th>Descripción</th>
              <th>Fecha de creación</th>
              <th>Fecha de actualización</th>
              <th>Status</th>
              <th>Empleado modifico</th>
              <th>Opciones</th>
            </thead>
            </tbody>
          </table>
        </div> 
        <!-- Contenedor de formulario -->
        <div class="panel-body" id="formregdata">
          <form name="formulario" id="formulario" method="POST">
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <label for="descripcion">Nombre del departamento:</label>
              <input type="hidden" name="idDepartamento" id="idDepartamento">
              <input type="text" name="descripcion" id="departamento" maxlength="256" placeholder="Nombre del departamento">
            </div>
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
              <button class="btn btn-primary" id="btn-guardar" type="submit"><i class="fas fa-save"></i> Guardar</button>
              <button class="btn btn-danger" id="btn-cancelar" type="clear" onclick="cancelarform(true)"><i class="fas fa-arrow-circle-left"></i>Cancelar</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
  require 'piepagina.php';
?>
<script type="text/javascript" src="scripts/departamento.js"></script>
