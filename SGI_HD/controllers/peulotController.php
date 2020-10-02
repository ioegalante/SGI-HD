<?php
include '../dao/dao.php';

$accion = isset($_POST['accion']) ? $_POST['accion'] : $_GET['accion']; //RECIBO EL PARAMETRO ACCION

switch ($accion) {
    case 'insertarPeula':
        
        $modulo = isset($_POST['modulo']) ? $_POST['modulo'] : $_GET['modulo'];
        $tema = isset($_POST['tema']) ? $_POST['tema'] : $_GET['tema'];
        $subtema = isset($_POST['subtema']) ? $_POST['subtema'] : $_GET['subtema'];
        $racional = isset($_POST['racional']) ? $_POST['racional'] : $_GET['racional'];
        $objetivos = isset($_POST['objetivos']) ? $_POST['objetivos'] : $_GET['objetivos'];
        $metodologia = isset($_POST['metodologia']) ? $_POST['metodologia'] : $_GET['metodologia'];
        $jomer = isset($_POST['jomer']) ? $_POST['jomer'] : $_GET['jomer'];
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : $_GET['fecha'];
        $kvutza = isset($_POST['kvutza']) ? $_POST['kvutza'] : $_GET['kvutza'];
        
        

        $p->modulo = $modulo;
        $p->tema = $tema;
        $p->subtema = $subtema;
        $p->racional = $racional;
        $p->objetivos = $objetivos;
        $p->metodologia = $metodologia;
        $p->jomer = $jomer;
        $p->fecha = $fecha;
        $p->kvutza = $kvutza;

        

        // echo dao::insertarPeula($p);
        // echo json_encode($p);

        break;
    case 'editarPeula':
        //logica
        break;
    case 'eliminarPeula':
        //logica
        break;
    case 'obtenerPorKvutza':
        $kvutza = 10;

        echo 'bbbbbb';
        traerPeulaPorKvutza($kvutza);
        echo 'aaaaaa';

        break;
    case 'obtenerPorID':
        //logica
        break;
}

?>