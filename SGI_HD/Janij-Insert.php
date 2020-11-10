<?php
    include 'dao.php';

    $pdo = connect();
    $pdo2 = connect();

    $accion = $_POST['accion'];
    if ($accion == "Guardar") {
    $stmt = $pdo -> prepare("CALL editarJanij(:idJanij,:nombre,:apellido,:kvutza,:escuela,:fechaNac,:telefono,:mail,:obs,:idViejo)");
    $stmt2 = $pdo2 -> prepare("CALL editarTablaMedio(:idJanij,:idViejo)");

    } else {
    $stmt = $pdo -> prepare("CALL insertarJanij(:idJanij,:nombre,:apellido,:kvutza,:escuela,:fechaNac,:telefono,:mail,:obs)");
    }

    $idJanij = $_POST['idJanij'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $kvutza = $_POST['kvutza'];
    $escuela = $_POST['escuela'];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $fechaNac = $_POST['fechaNac'];
    $obs = $_POST['observaciones'];
    $idViejo = $_POST['dniViejo'];

    
    $stmt -> bindParam(':idJanij', $idJanij);
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> bindParam(':apellido', $apellido);
    $stmt -> bindParam(':kvutza', $kvutza);
    $stmt -> bindParam(':escuela', $escuela);
    $stmt -> bindParam(':mail', $mail);
    $stmt -> bindParam(':telefono', $telefono);
    $stmt -> bindParam(':fechaNac', $fechaNac);
    $stmt -> bindParam(':obs', $obs);
    $stmt -> bindParam(':idViejo', $idViejo);

    $stmt -> execute();

    if (isset($stmt2)){
       
        $stmt2 -> bindParam(':idJanij', $idJanij);
        $stmt2 -> bindParam(':idViejo', $idViejo);
        $stmt2 -> execute();
    }

    

   header('location: Janij-Listar.php');

    


?>