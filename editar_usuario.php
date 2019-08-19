<?php include 'include/header.php' ?>

<?php
  include 'conexion.php';
  //incluimos las clases usuario y crud_usuario
  require_once('usuario.php');
  require_once('crud_usuario.php');
  $crud = new CrudUsuario();
  $usuario = new Usuario();
  //obtenemos el codigo enviado mediante GET desde lista_usuarios 
  $usuario = $crud->buscar($_GET['codigo']);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
    <li class="breadcrumb-item"><a href="listado_usuario.php">Lista de usuarios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Modificar usuarios</li>
  </ol>
</nav>

<div class="">
                  <span class="h2">Modificar usuario</span>
                </div><hr/>
                <form method="POST" name="formUsuario" action="usuario_controller.php">
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Código del usuario</label>
                        <input type="text" class="form-control " name="codUsuario" placeholder="Código del usuario" value='<?php echo $usuario->getCodigo()?>' required readonly>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="">Foto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="customFileLang" lang="es">
                          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombre" value='<?php echo $usuario->getNombre()?>' required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellido" value='<?php echo $usuario->getApellido()?>' required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Teléfono</label>
                        <input type="number"  class="form-control" name="telefono" placeholder="Numero de telefono" value='<?php echo $usuario->getTelefono()?>' required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Puesto</label>
                        <input type="text" class="form-control" name="puesto" placeholder="Puesto" value='<?php echo $usuario->getPuesto()?>' required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Correo electronico</label>
                        <input type="email"  class="form-control" name="correo" placeholder="Correo electronico" value='<?php echo $usuario->getCorreo()?>' required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" value='<?php echo $usuario->getContrasena()?>' required>
                      </div>
                      
                    </div>
                    <input type='hidden' name='actualizar' value='actualizar'>
                    <button type="submit" class="btn btn-dark" value="guardar">Guardar cambios</button>
                    <a href="listado_usuario.php" class="btn btn-secondary">Volver</a>
                </form>
                
                <hr/>
              </div>

<?php include 'include/footer.php' ?>