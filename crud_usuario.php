<?php

//incluimos la clase conexion
require_once('conexion.php');

    //creamos la clase 
    class CrudUsuario{

        //constructor de la clase
        public function __construct(){

        }

        //metodo para insertar usuarios, recibe como parametro el objeto de tipo
        public function insertar($usuario){

            $con_db = Conexion::conectar();
            $insert = $con_db->prepare('INSERT INTO usuarios values(:codigo , :nombres, :apellidos, :telefono, :puesto, :correo, :contrasena)');
            $insert->bindValue('codigo', $usuario->getCodigo());
            $insert->bindValue('nombres', $usuario->getNombre());
            $insert->bindValue('apellidos', $usuario->getApellido());
            $insert->bindValue('telefono', $usuario->getTelefono());
            $insert->bindValue('puesto', $usuario->getPuesto());
            $insert->bindValue('correo', $usuario->getCorreo());
            $insert->bindValue('contrasena', $usuario->getContrasena());
            
            $insert->execute();
        }

        //metodo para mostrar todos los usuarios
        public function mostrar(){

            $con_db = Conexion::conectar();
            $listaUsuarios = [];
            $select = $con_db->query('SELECT * FROM usuarios');

            foreach($select->fetchAll() as $usuario){
                $newUsuario = new Usuario();
                $newUsuario->setCodigo($usuario['codigo']);
                $newUsuario->setNombre($usuario['nombres']);
                $newUsuario->setApellido($usuario['apellidos']);
                $newUsuario->setTelefono($usuario['telefono']);
                $newUsuario->setPuesto($usuario['puesto']);
                $newUsuario->setCorreo($usuario['correo']);
                $newUsuario->setContrasena($usuario['contrasena']);
                //retornamos la lista de datos
                $listaUsuarios[]=$newUsuario;
            }
            return $listaUsuarios;    
        }

        //metodo para eliminar usuario, recibe como parametro el codigo del usuario
        public function eliminar($codigo){
            $con_db = Conexion::conectar();
            $eliminar = $con_db->prepare('DELETE FROM usuarios WHERE codigo=:codigo');
            $eliminar->bindValue('codigo', $codigo);
            $eliminar->execute();
        }
        
        //metodo para actualizar informacion
        public function actualizar($usuario){
            $con_db = Conexion::conectar();
            $actualizar = $con_db->prepare('UPDATE usuarios SET codigo=:codigo , nombres=:nombres, apellidos=:apellidos, telefono=:telefono, puesto=:puesto, correo=:correo, contrasena=:contrasena WHERE codigo=:codigo');
            $actualizar->bindValue('codigo', $usuario->getCodigo());
            $actualizar->bindValue('nombres', $usuario->getNombre());
            $actualizar->bindValue('apellidos', $usuario->getApellido());
            $actualizar->bindValue('telefono', $usuario->getTelefono());
            $actualizar->bindValue('puesto', $usuario->getPuesto());
            $actualizar->bindValue('correo', $usuario->getCorreo());
            $actualizar->bindValue('contrasena', $usuario->getContrasena());
            //ejecutamos la consulta
            $actualizar->execute();
        }

        //metodo para buscar usuario mediante el id
        public function buscar($codigo){
            $con_db = Conexion::conectar();
            $buscar = $con_db->prepare('SELECT * FROM usuarios WHERE codigo=:codigo');
            $buscar->bindValue('codigo', $codigo);
            $buscar->execute();
            $usuario = $buscar->fetch();
            $myUsuario = new Usuario();
            $myUsuario->setCodigo($usuario['codigo']);
            $myUsuario->setNombre($usuario['nombres']);
            $myUsuario->setApellido($usuario['apellidos']);
            $myUsuario->setTelefono($usuario['telefono']);
            $myUsuario->setPuesto($usuario['puesto']);
            $myUsuario->setCorreo($usuario['correo']);
            $myUsuario->setContrasena($usuario['contrasena']);
            //retornamos los datos del usuario
            return $myUsuario;
        }

        //metodo para contar la cantidad de registros de la tabla
        public function cantidadRegistros(){
            $con_db = Conexion::conectar();
            $count = $con_db->query('SELECT * FROM usuarios');
            $count->execute();  
            $fila = $count->rowCount();
            //rertona la cantidad de registros
            return $fila;
        }
    }
    

?>