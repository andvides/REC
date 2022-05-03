<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$cod_trabajo = $_POST['cod_trabajo'];
		$estado = $_POST['estado'];
		$sql = "UPDATE trabajo SET estado = '$estado' where cod_trabajo='$cod_trabajo'";
		
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Registro actualizado correctamente.';
		}

		
		else{
			$_SESSION['error'] = 'Algo salió mal al actualizar estado.';
		}
	}
	else{
		$_SESSION['error'] = 'Selecciona un articulo para actualizar su estado.';
	}

	header('location: index.php');

?>