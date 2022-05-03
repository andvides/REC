<?php session_start();

    if(isset($_SESSION['nombre'])) {
        header('location: principal.php');
    }else{
        header('location: login.php');
    }

?>