<?php

    include('conexion.php');

    $busqueda = $_POST['busqueda'];//almacenamos el valor desde "ajax.js"
    
    if(!empty($busqueda)){//si no esta vacío
        $consulta = "SELECT * FROM usuarios WHERE nombres LIKE '$busqueda%'"; //traemos todos los datos de la tabla que coincidan con el valor "$busqueda"    
        $conexion = Conexion::conectar();//establecemos la conexion
        $resultado = $conexion->query($consulta);//almacenamos el resultado 
        if(!$resultado){
            die();
        }
        $json = array();//declaramos una variable de tipo "array"
        
        foreach($resultado->fetchAll() as $row){//recorremos el resultado
            $json[] = array(//convertimos "$resultado" a objeto json
                'codigo' => $row['codigo'],
                'nombres' => $row['nombres'],
                'apellidos' => $row['apellidos'],
                'telefono' => $row['telefono'],
                'puesto' => $row['puesto'],
                'correo' => $row['correo'],
                'contrasena' => $row['contrasena']
            );
        }
            
            $jsonString = json_encode($json);//convertimos el json en String
            echo $jsonString;

        //}
    }

?>