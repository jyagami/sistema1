<?php include 'include/header.php' ?>

<?php
include "conexion.php";
require_once('crud_producto.php');
require_once('producto.php');
$crud = new CrudProducto();
$producto = new Producto();
//obtenemos todos los registros con el método mostrar de la clase crud
$listaProductos = $crud->mostrar();
?>


<div class="alert alert-success alert-dismissible fade show" role="alert" id="alertDelete" style="display: none">
  <strong>Producto eliminado!</strong> Producto eliminado satisfactoriamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="alertClose">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Productos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de de productos</li>
  </ol>
</nav>

<span class="h2 p-3">Listado de productos</span>
<hr />

<form class="mb-3">
  <div class="row">
    <div class="input-group col-md-6 ">
      <input type="search" class="form-control" placeholder="Codigo, nombre..." id="search-producto" autofocus>
      <div class="input-group-append">

        <a class="btn btn-dark" href="#">Buscar <i class="fas fa-search"></i></a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">Nuevo <i class="fas fa-user-plus"></i></button>
      </div>
    </div>
    <div class="input-group col-md-6 float-right">
      <!--  botones para listar y agrupar  -->
      <button class="btn btn-secondary" id="btn-list-product"><i class="fas fa-list-alt"></i></button>
      <button class="btn btn-secondary nose" id="btn-group-product"><i class="fas fa-columns"></i></button>

    </div>
  </div>
</form>


<div id="contenido-productos">


  <div class="table-responsive" style="max-height: 475px;">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Marca</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Costo USD$</th>
          <th scope="col">Fecha</th>
          <th scope="col">Acciones</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody id="tabla-productos">
        <?php foreach ($listaProductos as $producto) { ?>
          <tr>
            <th scope="row"><?php echo $producto->getCodigo() ?></th>
            <td><?php echo $producto->getNombre() ?></td>
            <td><?php echo $producto->getMarca() ?></td>
            <td><?php echo $producto->getCantidad() ?></td>
            <td><?php echo $producto->getCosto() ?></td>
            <td><?php echo $producto->getFecha() ?></td>
            <td>
              <div class="btn-group">
                <button class="btn btn-outline-dark" type="button" data-toggle="modal"><i class="far fa-address-book"></i></button>
                <a href="#" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
                <a class="btn btn-outline-danger delete-user" href="#">
                  <i class="fas fa-trash-alt"></i></a>
              </div>
  </div>
  </td>
  </tr>
<?php } ?>
</table>
</div>

</div>

<div id="contenido-agrupado" style="display: none">
  <div class="table-responsive" style="max-height: 475px;">
    <?php foreach ($listaProductos as $producto) { ?>
      <div class="card m-1 text-center">
        <div class="card-body">
          <h5 class="card-title"><?php echo $producto->getNombre() ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $producto->getMarca() ?></h6>
          <p class="card-text"><?php echo $producto->getDescripcion() ?></p>
          <h5 class="text-success"><?php echo $producto->getCosto() ?> USD$ </h5>
          <div class="btn-group">
            <button class="btn btn-outline-dark" type="button" data-toggle="modal"><i class="far fa-address-book"></i></button>

            <a href="#" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>

            <a class="btn btn-outline-danger delete-user" href="#">
              <i class="fas fa-trash-alt"></i></a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

</div>



<?php include 'include/footer.php' ?>