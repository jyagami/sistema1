<?php
    
    require_once('crud_usuario.php');
    require_once('usuario.php');

    $crud = new CrudUsuario();
    $usuario = new Usuario();

    //si el elemento insertar no es NULL llama al crud e incerta un usuario
    if (isset($_POST['insertar'])){
        
        $usuario->setCodigo($_POST['codUsuario']);
        $usuario->setNombre($_POST['nombres']);
        $usuario->setApellido($_POST['apellidos']);
        $usuario->setTelefono($_POST['telefono']);
        $usuario->setPuesto($_POST['puesto']);
        $usuario->setCorreo($_POST['correo']);
        $usuario->setContrasena($_POST['contrasena']);
        $crud->insertar($usuario);
        session_start();
        $_SESSION['message'] = 'Usuario guardado exitosamente';
        header('Location: registro_usuario.php');
        
    }
    elseif(isset($_POST['actualizar'])){
        $usuario->setCodigo($_POST['codUsuario']);
        $usuario->setNombre($_POST['nombres']);
        $usuario->setApellido($_POST['apellidos']);
        $usuario->setTelefono($_POST['telefono']);
        $usuario->setPuesto($_POST['puesto']);
        $usuario->setCorreo($_POST['correo']);
        $usuario->setContrasena($_POST['contrasena']);
        $crud->actualizar($usuario);
        header('Location: listado_usuario.php');
    }
    elseif ($_GET['accion']=='eliminar') {
        $crud->eliminar($_GET['codigo']);
        session_start();
        $_SESSION['message'] = 'Usuario eliminado exitosamente';
		header('Location: listado_usuario.php');		
	
    }
    elseif ($_GET['accion']=='actualizar'){
        header('Location: editar_usuario.php');
    }

?>