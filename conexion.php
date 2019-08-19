<?php
    
    class Conexion{
        
        private static $conexion = NULL;
        private function __construct(){
            session_start();
        }
        
        //conectando a la base de datos usando PDO
        public static function conectar(){
            $dns = 'mysql:host=localhost;dbname=sistema1';
            $db_usuario = 'root';
            $db_contraseña = '';
            
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$conexion = new PDO($dns, $db_usuario, $db_contraseña, $pdo_options);
            
            return self::$conexion;
        }
        
        public function sessionIniciada(){
            session_start();
        }

    }


    /*


    //parametros para la conexion
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'sistema1';

    //conecta a la base de datos
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_errno()){
        echo 'No se pudo conectar a la base de datos: ' . mysqli_connect_error();
    }
    

    //insertar un registro en la bd
        //capturamos los valores
    /*        
        $names = $_POST['nombres'];
        $surnames = $_POST['apellidos'];
        $phone = $_POST['telefono'];
        $job = $_POST['puesto'];
        $mail = $_POST['correo'];
        $pass = $_POST['contrasena'];

    function agregar($names, $surnames, $phone, $job, $mail, $pass){

        $sql = mysqli_query($con, "INSERT INTO usuarios(nombres, apellidos, telefono, puesto, correro, contrasena) 
        VALUES('$names','$surnames', '$phone', '$job', '$mail', '$pass'  )");
    
    }
    */
?>