<?php
    
    include 'dao.php';
    include 'models/Usuario.php';

    
    $idUsuario = $_POST['idUsuario'];
    $contraseña = $_POST['contraseña'];

    
    $pdo = connect();
    

    $stmt = $pdo -> prepare("CALL validarUsuario(:idUsuario, :contra)");
    $stmt -> bindParam(':idUsuario', $idUsuario);
    $stmt -> bindParam(':contra', $contraseña);
   
    $stmt -> execute();
    
    
    $usuario = $stmt -> fetchALL(PDO::FETCH_ASSOC);

   

    
    if($usuario[0]['idUsuario'] == NULL){
        header('location: Login-Ingresar.php');
    }
    else{

        // guardarID($usuario[0]['idUsuario']);
        session_start();
        $_SESSION['idUsuario']  = $usuario[0]['idUsuario'];
        $_SESSION['nombre']  = $usuario[0]['nombre'];
        $_SESSION['apellido']  = $usuario[0]['apellido'];
        $_SESSION['tafkid']  = $usuario[0]['tafkid'];
        if ($usuario[0]['kvutza'] == null){
            $_SESSION['kvutza']  = -1;
        }else{
            $_SESSION['kvutza']  = $usuario[0]['kvutza'];
        }
        $_SESSION['contra']  = $usuario[0]['contra'];
        $_SESSION['telefono']  = $usuario[0]['telefono'];
        $_SESSION['admin']  = $usuario[0]['admin'];

        header('location: index.php');

        
    }

    

?>
