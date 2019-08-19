<?php include 'include/header.php' ?>

<?php 
include "conexion.php";
require_once('crud_usuario.php');
$crud = new CrudUsuario();
//obtenemos todos los registros con el método mostrar de la clase crud
$cantidadUsuarios = $crud->cantidadRegistros();
?>
    

    <div class="container container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
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
        <div>
            <br><input type="button" id="show_users" value="Cantidad de usuarios" class="btn btn-danger" onclick="verUsuarios()">
        </div>
        
    </div>
    
    <script>
        function verUsuarios(){
            alert('No me estes gritando la pinshi madre!');
        }
    </script>

<?php include 'include/footer.php' ?>