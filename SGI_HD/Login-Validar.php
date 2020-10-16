<?php
    
    include 'dao.php';

    $pdo = connect();

    $idUsuario = $_POST['idUsuario'];
    $contraseña = $_POST['contraseña'];

    $stmt = $pdo -> prepare("CALL validarUsuario($idUsuario, $contraseña)");

    $stmt -> execute();
    $usuario = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    

    
    if($usuario[0]['idUsuario'] == NULL){
        header('location: Login-Ingresar.php');
    }
    else{
        header('location: index.php');
        
    }

    

?>
