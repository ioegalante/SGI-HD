<?php

function connect() {
   $host='localhost';
   $user='root';
   $pass='';
   $db='sgihd';
 
   return new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

 }
/////////////////// PEULOT ////////////////////////

function insertarPeula(){

  
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
   $kvutza = $_POST['kvutza'];
 
   $stmt -> bindParam(':tema', $tema);
   $stmt -> bindParam(':subtema', $subtema);
   $stmt -> bindParam(':modulo', $modulo);
   $stmt -> bindParam(':racional', $racional);
   $stmt -> bindParam(':objetivos', $objetivos);
   $stmt -> bindParam(':metodologia', $metodologia);
   $stmt -> bindParam(':jomer', $jomer);
   $stmt -> bindParam(':fecha', $fecha);
   $stmt -> bindParam(':kvutza', 10);
 
   $stmt -> execute();
 
   header('location: listadoPeulot.php');
 

}

function traerPeulaPorKvutza($kvutza){
     $server = "PC-IOE";
     $base = array( "Database"=>"sgihd");
     
     $conn = sqlsrv_connect($server,$base);
     //$gbd = new PDO($server, $base);
     //$conn = new PDO('sql:host=localhost;dbname=sgihd;');
     // $query = "SELECT * FROM Peulot WHERE kvutza = {$kvutza}";

     // $gsent = $conn->prepare("SELECT * FROM Peulot WHERE kvutza = {$kvutza}");
     
     // $gsent->execute();

     $sql = "SELECT * FROM Peulot WHERE kvutza = {$kvutza}";
     $params = array();
     $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
     $stmt = sqlsrv_query( $conn, $sql , $params, $options );
          
     $row_count = sqlsrv_num_rows( $stmt );
  
          
        if ($row_count === 0){
           echo "Error al obtener datos.";
        }
        else{
           echo "bien";
        }
        
        echo $row_count;

        while( $row = sqlsrv_fetch_array( $stmt) ) {
              print json_encode($row);
               
        }
        var_dump($conn);
        echo "-----";
        var_dump($stmt);
        var_dump(sqlsrv_fetch_array( $stmt));
        var_dump($row);
    sqlsrv_close($conn);}

function obtenerPeulaPorID($id) {

   $pdo = connect();
 
   $stmt = $pdo -> prepare("SELECT * FROM peulot WHERE idPeula = :id");
 
   $stmt -> bindParam(':id',$id);
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();
 
   return $stmt -> fetch();
 }

function obtenerModulosPorTzevet($idTzevet){
   $pdo = connect();
 
   $stmt = $pdo -> prepare("CALL ObtenerModulosPorTzevet($idTzevet)");
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();
 
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);

}

function eliminarPeula($id){

   $pdo = connect();
 
   $stmt = $pdo -> prepare("DELETE FROM peulot WHERE idPeula = :id");
 
   $stmt -> bindParam(':id',$id);
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();

   header('location: listadoPeulot.php');

}

function traerNombreModulo($idModulo){

   $pdo = connect();
 
   $stmt = $pdo -> prepare("SELECT nombre FROM modulos WHERE idModulo= :id");
 
   $stmt -> bindParam(':id',$idModulo);
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();

   return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

?>