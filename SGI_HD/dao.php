<?php

function connect() {
   $host='localhost';
   $user='root';
   $pass='';
   $db='sgihd';
 
   return new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

}
/////////////////// PEULOT ////////////////////////

function obtenerPeulotPorKvutza($kvutza){

   $pdo = connect();

   $stmt = $pdo -> prepare("CALL obtenerPeulotPorKvutza($kvutza)");
   $stmt -> execute();

   
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
function obtenerPeulaPorID($id) {

   $pdo = connect();
 
   $stmt = $pdo -> prepare("SELECT * FROM peulot WHERE idPeula = :id");
 
   $stmt -> bindParam(':id',$id);
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();
 
   return $stmt -> fetch();
}
/////////////////// MODULOS ////////////////////////

function traerNombreModulo($idModulo){

   $pdo = connect();
 
   $stmt = $pdo -> prepare("SELECT nombre FROM modulos WHERE idModulo= :id");
 
   $stmt -> bindParam(':id',$idModulo);
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();

   return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
function obtenerModulosPorTzevet($idTzevet){
   $pdo = connect();
 
   $stmt = $pdo -> prepare("CALL ObtenerModulosPorTzevet($idTzevet)");
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();
 
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);

}
/////////////////// USUARIOS ////////////////////////

function traerUsuarioPorID($id){
   $pdo = connect();
   $stmt = $pdo -> prepare("CALL traerUsuarioPorID(:idUsuario)");
   $stmt -> bindParam(':idUsuario', $idUsuario);
  
   $stmt -> execute();
   
   
   return $stmt -> fetchALL(PDO::FETCH_ASSOC);
}
/////////////////// KVUTZOT ////////////////////////

function obtenerKvutza($kvutza){
   $pdo = connect();
 
   $stmt = $pdo -> prepare("CALL obtenerKvutza($kvutza)");
 
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
 
   $stmt -> execute();
 
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);

}
/////////////////// JANIJIM ////////////////////////

function obtenerJanijimPorKvutza($kvutza){

   $pdo = connect();

   $stmt = $pdo -> prepare("CALL obtenerJanijimPorKvutza($kvutza)");
   $stmt -> execute();

   
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
function obtenerJanijPorID($id){

   $pdo = connect();

   $stmt = $pdo -> prepare("CALL obtenerJanijPorID($id)");
   $stmt -> execute();

   
   return $stmt -> fetch();
}
function obtenerResponsablePorJanij($janij){

   $pdo = connect();

   $stmt = $pdo -> prepare("CALL obtenerResponsablesPorJanij($janij)");
   $stmt -> execute();

   
   return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

function obtenerRespPorID($id){

   $pdo = connect();

   $stmt = $pdo -> prepare("CALL obtenerRespPorID($id)"); 

   
   return $stmt -> fetch();
}







?>
