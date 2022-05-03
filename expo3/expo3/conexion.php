<?php
    
// MySQLi OOP
$conn = new mysqli('localhost', 'root', '', 'expotecnologico');
if($conn->connect_error){
   die("Conexion falló: " . $conn->connect_error);
}

?>