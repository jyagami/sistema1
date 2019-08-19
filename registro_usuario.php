
<?php
  include 'conexion.php'; 
  session_start();
?>
<!--   Header     -->
<?php include 'include/header.php' ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
      <li class="breadcrumb-item active" aria-current="page">Registro de usuario</li>
    </ol>
  </nav>

<div class=""> 
              
              <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php session_unset(); }?>

              <span class="h2">Registro de usuario</span>
                   
                </div><hr/>
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
                      <div class="form-group col-md-6">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
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
                    <input type='hidden' name='insertar' value='insertar'>
                    <button type="submit" class="btn btn-dark" value="guardar">Guardar</button>
                    
               </form>
               
                <hr/>
</div>


<!--   Footer     -->
<?php include 'include/footer.php' ?>