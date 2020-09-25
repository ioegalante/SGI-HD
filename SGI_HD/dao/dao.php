<?php
include '../models/Peula.php';
   





$server = "PC-IOE";
$base = array( "Database"=>"sgihd");

$conn = sqlsrv_connect($server,$base);
if($conn){
echo"conectado correctamente";
}
else
{
echo"no se pudo conectar";
}

/////////////////// PEULOT ////////////////////////

function insertarPeula($peula){

     $conn = sqlsrv_connect($server,$base);
     $query = "INSERT INTO Peulot (tema, subtema, modulo, racional , objetivos, metodologia, jomer, fecha, kvutza) 
     values ($peula->tema, $peula->subtema, $peula->modulo, $peula->racional , $peula->objetivos, $peula->metodologia, $peula->jomer, $peula->fecha, $peula->kvutza) ";



     sqlsrv_close($conn);

}




//     $sql = "SELECT name FROM [base].[dbo].[table]";
//     $params = array();
//     $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
//     $stmt = sqlsrv_query( $conn, $sql , $params, $options );

//     $row_count = sqlsrv_num_rows( $stmt );
  

//         if ($row_count === false)
//            echo "Error al obtener datos.";
//         else
//            echo "bien";
//         //echo $row_count;

//         while( $row = sqlsrv_fetch_array( $stmt) ) {
//               print json_encode($row);
//         }

//     sqlsrv_close($conn);



// $serverName = "localhost"; //serverName\instanceName
// $dataBase = "sgihd";

// // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// // La conexión se intentará utilizando la autenticación Windows.
// //$connectionInfo = array( "Database"=>"sgihd");

// $conn = sqlsrv_connect( $serverName, $dataBase);

// if( $conn ) {
//      echo "Conexión establecida.<br />";
// }else{
//      echo "Conexión no se pudo establecer.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }

// //con conn hacer un query, hacer query y traer resultado como array u objeto


?>