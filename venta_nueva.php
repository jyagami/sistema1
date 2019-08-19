<?php include 'include/header.php' ?>

<div class="container-fluid">

    <span class="h1">Nueva venta</span><hr>

    <div class="row">
        <!--  Formulario de venta de productos  -->
        
        <div class="col-md-6 border rounded pt-2">
        <span class="h4">Venta</span><hr>
        
            <form action="">
            <button type="submit" value="Venta" class="btn btn-success mb-3">Realizar venta <i class="fas fa-hand-holding-usd"></i></button>
                    
                <div class="float-right flex-row">
                    <span class="h5"> TOTAL <p class="text-danger">50 USD$</p></span>
                </div>
                <div class="table-responsive" style="max-height: 475px;" id="tabla-venta">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Costo/u</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-cuerpo">
                            <tr>
                                <th>Teclado</th>
                                <td>e touch</td>
                                <th>23 USD$</td>
                                <td><input type="number" placeholder="Cantidad" class="form-control"></td>
                                <th>23 USD$</th>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                
            </form>
        </div>
        
        <!--  Tabla de productos disponibles  -->
        <div class="col-md-6 border rounded pt-2">
            <span class="h4"> Lista de productos</span><hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nombre, marca..." >
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">Buscar <i class="fas fa-search"></i></button>
                        </div>
                </div>
            <div class="table-responsive" style="max-height: 475px;">
                
                <table class="table">
                    <thead class="bg-dark text-white ">
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Costo/u</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Acciones</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monitor</td>
                            <td>Samsung</td>
                            <td>135 USD$</td>
                            <td>23</td>
                            <td><button class="btn btn-primary" id="add-product">+<i class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
                
            </div>
        </div>
    </div>
    
</div>
<!-- script basura para llenar la tabla de venta-->
<script src="scripts/myScript.js" ></script>



<?php include 'include/footer.php' ?>