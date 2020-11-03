<?php
    include 'dao.php';

    $pdo = connect();

    $accion = $_POST['accion'];
    if ($accion == "Guardar") {
    $stmt = $pdo -> prepare("CALL editarJanij(:idJanij,:nombre,:apellido,:kvutza,:escuela,:fechaNac,:telefono,:mail,:obs)");
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

    
    $stmt -> bindParam(':idJanij', $idJanij);
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> bindParam(':apellido', $apellido);
    $stmt -> bindParam(':kvutza', $kvutza);
    $stmt -> bindParam(':escuela', $escuela);
    $stmt -> bindParam(':mail', $mail);
    $stmt -> bindParam(':telefono', $telefono);
    $stmt -> bindParam(':fechaNac', $fechaNac);
    $stmt -> bindParam(':obs', $obs);

    $stmt -> execute();

    header('location: Janij-Listar.php');

    


?>