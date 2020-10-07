<?php
    include 'dao.php';

    $pdo = connect();

    $idPeula = $_GET['id'];

    $stmt = $pdo -> prepare("CALL EliminarPeula($idPeula)");

    $stmt -> execute();

    header('location: listadoPeulot.php');

?>