<?php

    class Usuario{
        //creamos los atributos de la clase
        private $codigo;
        private $nombres;
        private $apellidos;
        private $telefono;
        private $puesto;
        private $correo;
        private $contraseña;

        //creamos el contructor de la clase
        function __construct(){}

        //metodos getters
        public function getNombre(){
            return $this->nombres;
        }        
        public function getApellido(){
            return $this->apellidos;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getPuesto(){
            return $this->puesto;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getContrasena(){
            return $this->contraseña;
        }
        public function getCodigo(){
            return $this->codigo;
        }

        //metodos setters
        public function setNombre($nombres){
            $this->nombres = $nombres;
        }
        public function setApellido($apellidos){
            $this->apellidos = $apellidos;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function setPuesto($puesto){
            $this->puesto = $puesto;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function setContrasena($contraseña){
            $this->contraseña = $contraseña;
        }
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    }

?>