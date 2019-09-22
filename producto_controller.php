<?php
    require_once('crud_producto.php');
    require_once('producto.php');

    $crud = new CrudProducto();
    $producto = new Producto();

    if (isset($_POST['nombre'])){
        $producto->setCodigo($_POST['codigo']);
        $producto->setNombre($_POST['nombre']);
        $producto->setCantidad($_POST['cantidad']);
        $producto->setProveedor($_POST['proveedor']);
        $producto->setFecha($_POST['fecha']);
        $producto->setDescripcion($_POST['descripcion']);
        $producto->setMarca($_POST['marca']);
        $producto->setCosto($_POST['costoCompra']);
        $producto->setPrecio($_POST['precioVenta']);
        

        $crud->insertar($producto);
        
        echo 'producto guardado satisfactoriamente';
    }
    
    //enviar datos de los productos--------------------------------------
        $consulta = "SELECT * FROM productos";   
        $conexion = Conexion::conectar();
        $resultado = $conexion->query($consulta);
        if(!$resultado){
            die();
        }
        $json = array();//declaramos una variable de tipo "array"
        
        foreach($resultado->fetchAll() as $row){//recorremos el resultado
            $json[] = array(//convertimos "$resultado" a objeto json
                'codigo' => $row['codigo'],
                'nombre' => $row['nombre'],
                'marca' => $row['marca'],
                'cantidad' => $row['cantidad'],                
                'costo' => $row['precioventa'],
                'fecha' => $row['fecha'],
                'descripcion' => $row['descripcion']
            );
        }
            $jsonString = json_encode($json);//convertimos el json en String
            echo $jsonString;
        //------------------------------------------------------------------
        
    

?>