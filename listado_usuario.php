<?php session_start(); ?>
<?php include 'include/header.php' ?>

<?php 
include "conexion.php";
require_once('crud_usuario.php');
require_once('usuario.php');
$crud = new CrudUsuario();
$usuario = new Usuario();
//obtenemos todos los registros con el método mostrar de la clase crud
$listaUsuarios = $crud->mostrar();
$cantidadUsuarios = $crud->cantidadRegistros();
?>

            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php session_unset(); }?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
      <li class="breadcrumb-item active" aria-current="page">Lista de empleados</li>
    </ol>
  </nav>

<span class="h2 p-3">Listado de empleados</span><hr/>
            
        <form class="input-group mb-3 col-md-6">
            <input type="search" class="form-control" placeholder="Codigo, nombre, apellido..." id="search-user" autofocus>
            <div class="input-group-append">
              <button class="btn btn-dark" type="submit">Buscar <i class="fas fa-search"></i></button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">Nuevo <i class="fas fa-user-plus"></i></button>
            </div>
        </form>

        <div class="table-responsive" style="max-height: 600px;">
        <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#Codigo</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Acciones</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody id="tabla-usuarios">
                        <?php foreach($listaUsuarios as $usuario){?>
                          <tr>
                          <th scope="row"> <?php echo $usuario->getCodigo()?></th>
                          <td> <?php echo $usuario->getNombre()?></td>
                          <td> <?php echo $usuario->getApellido()?></td>
                          <td> <?php echo $usuario->getTelefono()?></td>
                          <td> <?php echo $usuario->getPuesto()?></td>
                          <td> <?php echo $usuario->getCorreo()?></td>
                          <td> <?php echo $usuario->getContrasena()?></td>
                          <td>
                          <div class="btn-group" >
                            <button class="btn btn-outline-dark" type="button" data-toggle="modal"
                            <?php echo 'data-target="#modal-'.$usuario->getCodigo().'"' ?> > <i class="far fa-address-book"></i></button>

                            <a href="editar_usuario.php?codigo=<?php echo $usuario->getCodigo()?>&accion=actualizar" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>

                            <a class="btn btn-outline-danger" href="usuario_controller.php?codigo=<?php echo $usuario->getCodigo()?>&accion=eliminar">
                            <i class="fas fa-trash-alt"></i></a>
                          </div>
                          </td>
                        </tr>

                       <?php }?>
                        
                        
            </table>
        </div>
        
        </div>

                        
<!--  Modal ver usuario   -->
<?php foreach($listaUsuarios as $usuario){?>
<div class="modal fade" <?php echo 'id="modal-'.$usuario->getCodigo().'"' ?>  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">#<?php echo $usuario->getCodigo() ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                          
      <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="include/img/user-icon-foto.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $usuario->getNombre()?> <?php echo $usuario->getApellido()?></h5></h5>
                <p class="card-text"><?php echo $usuario->getTelefono()?></h5></p>
                <p class="card-text"><?php echo $usuario->getPuesto()?></h5></p>
                <p class="card-text"><?php echo $usuario->getCorreo()?></h5></p>
                <p class="card-text"><small class="text-muted">Activo hace 3 mins</small></p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<?php }?> 
 

<!-- Modal Nuevo registro-->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                  <form method="POST" name="formUsuario" action="usuario_controller.php">
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Código del usuario</label>
                        <input type="text" class="form-control" name="codUsuario" placeholder="Código del usuario" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="">Foto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="customFileLang" lang="es">
                          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellido" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Teléfono</label>
                        <input type="number"  class="form-control" name="telefono" placeholder="Numero de telefono" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Puesto</label>
                        <input type="text" class="form-control" name="puesto" placeholder="Puesto" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Correo electronico</label>
                        <input type="email"  class="form-control" name="correo" placeholder="Correo electronico" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                      </div>

                      
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input type='hidden' name='insertar' value='insertar'>
                     <button type="submit" class="btn btn-dark" value="guardar">Guardar cambios</button>
                    </div>
                </form>

      </div>
      
    </div>
  </div>
</div>




<?php include 'include/footer.php' ?>