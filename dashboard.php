<?php include 'include/header.php' ?>

<?php 
include "conexion.php";
require_once('crud_usuario.php');
$crud = new CrudUsuario();
//obtenemos todos los registros con el método mostrar de la clase crud
$cantidadUsuarios = $crud->cantidadRegistros();
?>

    <div class="container container-fluid">
        <div class="card-group">
            <div class="card col-md-6">
                <div class="card-header">
                    <span class="h4">Usuarios registrados</span>
                </div>
                <div class="card-body">
                    <span class="h1"> <?php echo $cantidadUsuarios;?> </span>    
                </div>
            </div>
            <div class="card col-md-6">
                <div class="card-header">
                    <span class="h2">Productos totales</span>
                </div>
                <div class="card-body">
                    <span class="h4"> 5 </span>    
                </div>
            </div>
        </div>
    </div>
    

<?php include 'include/footer.php' ?>