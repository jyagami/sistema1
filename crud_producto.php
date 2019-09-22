<?php

    //incluimos la clase conexion
    require_once('conexion.php');

    class CrudProducto{

        public function __construct(){
        }
        //metodo para insertar
        public function insertar($producto){

            $con_db = Conexion::conectar();
            $insert = $con_db->prepare('INSERT INTO productos values(:codigo, :nombre, :cantidad, :proveedor, :fecha, :descripcion, :marca, :costo, :precio)');
            $insert->bindValue('codigo', $producto->getCodigo());
            $insert->bindValue('nombre', $producto->getNombre());
            $insert->bindValue('cantidad', $producto->getCantidad());
            $insert->bindValue('proveedor', $producto->getProveedor());
            $insert->bindValue('fecha', $producto->getFecha());
            $insert->bindValue('descripcion', $producto->getDescripcion());
            $insert->bindValue('marca', $producto->getMarca());
            $insert->bindValue('costo', $producto->getCosto());
            $insert->bindValue('precio', $producto->getPrecio());
            
            
            $insert->execute();
        }
        //funcion para mostrar productos
        public function mostrar(){
            $conDb = Conexion::conectar();
            $listaProductos = [];
            $select = $conDb->query('SELECT * FROM productos');

            foreach($select->fetchAll() as $producto){
                $newProducto = new Producto();
                $newProducto->setCodigo($producto['codigo']);
                $newProducto->setNombre($producto['nombre']);
                $newProducto->setCantidad($producto['cantidad']);
                $newProducto->setProveedor($producto['proveedor']);
                $newProducto->setFecha($producto['fecha']);
                $newProducto->setDescripcion($producto['descripcion']);
                $newProducto->setMarca($producto['marca']);
                $newProducto->setCosto($producto['preciocompra']);
                $newProducto->setPrecio($producto['precioventa']);
                
                $listaProductos[] = $newProducto;
            }
            return $listaProductos;
        }

    }
