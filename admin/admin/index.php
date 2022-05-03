<?php
	session_start();

	if(isset($_SESSION['nombre'])) {
        header('location: indexx.php');
    }else{
        header('location: login.php');
    }
?>