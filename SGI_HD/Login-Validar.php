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

        guardarID($usuario[0]['idUsuario']);
        header('location: index.php');

        
    }

    

?>
