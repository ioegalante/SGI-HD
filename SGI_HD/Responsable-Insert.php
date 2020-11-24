<?php
    include 'dao.php';

    $pdo = connect();
    $pdo2 = connect();

    $accion = $_POST['accion'];
    if ($accion == "Guardar") {
    $stmt = $pdo -> prepare("CALL editarResponsable(:idResponsable,:nombreR,:apellidoR,:telefonoR,:mailR,:relacion,:obs,:fechaNacR,:idViejo)");
    $stmt2 = $pdo2 -> prepare("CALL editarTablaMedio2(:idResponsable,:idViejo)");
    

    } else {
    $stmt = $pdo -> prepare("CALL insertarResponsable(:idResponsable,:nombreR,:apellidoR,:telefonoR,:mailR,:relacion,:obs,:fechaNacR)");
    $stmt2 = $pdo2 -> prepare("CALL insertarRespPorJanij(:idResponsable,:idJanij)");
    
    }

    $idResponsable = $_POST['idResponsable'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $relacion = $_POST['relacion']; 
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $fechaNac = $_POST['fechaNac'];
    $obs = $_POST['obs'];
    $idJanij = $_POST['idJanij']; 
    $idViejo = $_POST['dniViejo']; 


    
    $stmt -> bindParam(':idResponsable', $idResponsable);
    $stmt -> bindParam(':nombreR', $nombre);
    $stmt -> bindParam(':apellidoR', $apellido);
    $stmt -> bindParam(':relacion', $relacion);
    $stmt -> bindParam(':mailR', $mail);
    $stmt -> bindParam(':telefonoR', $telefono);
    $stmt -> bindParam(':fechaNacR', $fechaNac);
    $stmt -> bindParam(':obs', $obs);
    

    $stmt2 -> bindParam(':idResponsable', $idResponsable);
    if ($accion == 'Guardar'){

        $stmt -> bindParam(':idViejo', $idViejo);
        $stmt2 -> bindParam(':idViejo', $idViejo);
    }
    else {
        $stmt2 -> bindParam(':idJanij', $idJanij);
    }
    
    

    $stmt -> execute();
    $stmt2 -> execute();

    
    header('location: Janij-Listar.php');

    


?>