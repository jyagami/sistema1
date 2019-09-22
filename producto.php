<?php

    class Producto{
        private $codigo;
        private $nombre;
        private $cantidad;
        private $proveedor;
        private $fecha;
        private $descripcion;
        private $marca;
        private $costo;
        private $precio;
    

        function __construct(){
        }

        public function getCodigo(){
            return $this->codigo;
        }
        public function getNombre(){
            return $this->nombre;
        }        
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getProveedor(){
            return $this->proveedor;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getCosto(){
            return $this->costo;
        }
        public function getPrecio(){
            return $this->precio;
        }
        //metodos setters
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setProveedor($proveedor){
            $this->proveedor = $proveedor;
        }
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setCosto($costo){
            $this->costo = $costo;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        
    }
    

?>