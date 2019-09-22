<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sistema administrativo</title>

    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!--    google fonts link   -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- Font Awesome Personal-->
    <script src="https://kit.fontawesome.com/79ccb07dd0.js"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="p-3">
            <div class="sidebar-header">
                <a href="index.php"><img src="include/img/ccode-logo.png" style="width: 100px;"></a>
            </div>

            <ul class="list-unstyled components">
                <p>Ccode software ®</p>

                <li>
                    <a href="dashboard.php"><img src="include/icons/dashboard.png"> Dashboard</a>
                </li>

                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <img src="include/icons/users.png"> Usuarios
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="registro_usuario.php"> 
                                <i class="fas fa-user-plus"></i> Nuevo registro
                            </a>
                        </li>
                        <li>
                            <a href="listado_usuario.php">
                                <i class="fas fa-list"></i> Listado de registros
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="include/icons/productos.png" style="height:30px"> Productos
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="registro_producto.php">Nuevo producto</a>
                        </li>
                        <li>
                            <a href="listado_productos.php">Lista de productos</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#proveedorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="include/icons/proveedor.png" style="height:30px"> Proveedores
                    </a>
                    <ul class="collapse list-unstyled" id="proveedorSubmenu">
                        <li>
                            <a href="registro_proveedor.php">Nuevo proveedor</a>
                        </li>
                        <li>
                            <a href="#">Lista de proveedores</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#ventaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-shopping-cart"></i> Ventas
                    </a>
                    <ul class="collapse list-unstyled" id="ventaSubmenu">
                        <li>
                            <a href="venta_nueva.php"><i class="fas fa-money-bill-wave"></i> Nueva venta</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-money-check-alt"></i> Registro de ventas</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#">Configuracion</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
   
        

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://github.com/jyagami/sistema1" class="download">Proyecto</a>
                </li>
                <li>
                    <a href="#" class="article">Sobre la empresa</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" >

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                    <i class="fas fa-bars"></i>
                        <span></span>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user" ></i> Usuario 
                                    </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item " href="#">Cuenta</a>
                                    <a class="dropdown-item " href="#">Coniguración</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item " href="#">Cerrar sesion</a>
                                </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

            <!--    CONTENIDO DE LA PAGINA  -->
				<div class="p-3">