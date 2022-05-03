<?php
	session_start();
	if(isset($_SESSION['nombre']))
    {
	$usuarioingresado = $_SESSION['nombre'];
	}
	else
	{
		header ('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>CONTROL DE REGISTROS EXPOTECNOLOGICO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
	<link rel="stylesheet" href="css/style.css">
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>

<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="index.php"><?php echo $usuarioingresado?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="activado"><a href="cerrar.php">Cerrar sesion<span class="lnr lnr-cross-circle"></span></a></li>
	</ul>
  </nav>
</header>

        <div class="logo-title">
			<img src="image/logo.png" >
		</div>
		
<div class="container">
	<h1 class="page-header text-center">CONTROL DE REGISTROS EXPOTECNOLOGICO</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-hover">
					<thead>
					    <th scope="col" class="table-success">Id</th>
						<th scope="col" class="table-success">CORREO</th>
						<th scope="col" class="table-success">TITULO</th>
						<th scope="col" class="table-success">MODALIDAD</th>
						<th scope="col" class="table-success">ESTADO</th>
						<th scope="col" class="table-success">ARTICULO/ACTUALIZAR ESTADO</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT trabajo.cod_trabajo,aspirante.correo,trabajo.titulo,trabajo.modalidad,trabajo.estado,trabajo.articulo FROM trabajo INNER JOIN aspirante on trabajo.aspirante=aspirante.id";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td scope='row'>".$row['cod_trabajo']."</td>
									<td scope='row'>".$row['correo']."</td>
									<td scope='row'>".$row['titulo']."</td>
									<td scope='row'>".$row['modalidad']."</td>
									<td scope='row'>".$row['estado']."</td>
									<td scope='row'>
										<a href='#edit_".$row['cod_trabajo']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Actualizar</a>
										<a href='#verArticulo_".$row['cod_trabajo']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-file'></span> Ver articulo</a>
									</td>									
								</tr>";
								include('edit_delete_modal.php');
							}


						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generar datatable -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>