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
    $nombreR = $_POST['nombreR'];
    $apellidoR = $_POST['apellidoR'];
    $relacion = $_POST['relacion'];
    $mailR = $_POST['mailR'];
    $telefonoR = $_POST['telefonoR'];
    $fechaNac = $_POST['fechaNacR'];
    $obs = $_POST['observaciones'];
    $idJanij = $_POST['idJanij'];

    
    $stmt -> bindParam(':idResponsable', $idResponsable);
    $stmt -> bindParam(':nombreR', $nombreR);
    $stmt -> bindParam(':apellidoR', $apellidoR);
    $stmt -> bindParam(':relacion', $relacion);
    $stmt -> bindParam(':mailR', $mailR);
    $stmt -> bindParam(':telefonoR', $telefonoR);
    $stmt -> bindParam(':fechaNacR', $fechaNacR);
    $stmt -> bindParam(':obs', $obs);
    $stmt -> bindParam(':idJanij', $idJanij);

    $stmt2 -> bindParam(':idJanij', $idJanij);
    $stmt2 -> bindParam(':idViejo', $idViejo);

    $stmt -> execute();
    $stmt2 -> execute();

    

   header('location: Janij-Listar.php');

    


?>