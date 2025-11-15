<?php
  include '../../app/config.php';
  include '../../admin/layout/parte1.php';

  include '../../app/controllers/roles/listadoRoles.php';


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
     <br>
    <div class="content">
      <div class="container">
        <div class="row">
          <h1>Listado de roles</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Roles Registrados</h3>
                <div class="card-tools">
                  <a href="create.php" class="btn btn-secondary">
                    <i class="bi bi-plus-square"></i>
                    Crear Nuevo Rol</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Nro</th>
                <th>Nombre del Rol</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contadorRol = 0;
                foreach ($roles as $role) {
                  $idRol = $role['id_rol'];
                  $contadorRol++;
                  ?>
                  <tr>
                    <td><?= $contadorRol; ?></td>
                    <td><?= $role['nombre_rol'] ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye-fill"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm btn-success"><i class="bi bi-pencil-fill"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm btn-danger"><i class="bi bi-trash3-fill"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <?php
                }
              ?>
            </tbody>
          </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include '../../admin/layout/parte2.php';
    include '../../layout/mensajes.php';
  ?>