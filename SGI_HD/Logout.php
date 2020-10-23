<?php
    
    include 'dao.php';
    
    session_start();
    session_unset();
    
   
    header('location: Login-Ingresar.php');
    

?>
