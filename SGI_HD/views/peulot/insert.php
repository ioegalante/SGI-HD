<?php
    include 'dao.php';

    $pdo = connect();
    
    if (isset($_POST['idPeula']) && $_POST['idPeula'] != "") {
    $stmt = $pdo -> prepare("UPDATE peulot SET tema = :tema, subtema = :subtema, modulo = :modulo, racional = :racional, objetivos = :objetivos, metodologia = :metodologia, jomer = :jomer, fecha = :fecha, kvutza = :kvutza WHERE idPeula = :idPeula");
    $stmt -> bindParam(':idPeula', $_POST['idPeula']);
    } else {
    $stmt = $pdo -> prepare("INSERT INTO peulot(tema, subtema, modulo, racional, objetivos, metodologia, jomer, fecha, kvutza) VALUES (:tema, :subtema, :modulo, :racional, :objetivos, :metodologia, :jomer, :fecha, :kvutza)");
    }

    $tema = $_POST['tema'];
    $subtema = $_POST['subtema'];
    $modulo = $_POST['modulo'];
    $racional = $_POST['racional'];
    $objetivos = $_POST['objetivos'];
    $metodologia = $_POST['metodologia'];
    $jomer = $_POST['jomer'];
    $fecha = $_POST['fecha'];
    // $kvutza = $_POST['kvutza'];

    $kvutza = 10;

    $stmt -> bindParam(':tema', $tema);
    $stmt -> bindParam(':subtema', $subtema);
    $stmt -> bindParam(':modulo', $modulo);
    $stmt -> bindParam(':racional', $racional);
    $stmt -> bindParam(':objetivos', $objetivos);
    $stmt -> bindParam(':metodologia', $metodologia);
    $stmt -> bindParam(':jomer', $jomer);
    $stmt -> bindParam(':fecha', $fecha);
    $stmt -> bindParam(':kvutza', $kvutza);

    $stmt -> execute();

    header('location: listadoPeulot.php');



?>