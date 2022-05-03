<?php 

    if(isset($_SESSION['nombre']))
    {
    $usuarioingresado = $_SESSION['nombre'];
    $id=$_GET["posicion"];
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro trabajo</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   
    <link rel="stylesheet" href="icon/style.css">
   
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
   <link rel="stylesheet" href="css/sticky-footer-navbar.css">
   <link rel="stylesheet" href="css/mainStyle.css">

</head>

<body>
    
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #465763;"><a class="navbar-brand" href="principal.php"><img class="imagen" src="image/logo.png" width="210px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="principal.php"><?php echo $usuarioingresado?> <span class="sr-only"></span></a> </li>
	</ul>
  </nav>
</header>

  <div class="contenedor-menu">
      <!-- <a href="#" class="btn-menu">MENU<span class="lnr lnr-menu"></span></a>-->
      <ul class="menu">
        <li class="activado"><a href="verArticulos.php?posicion=<?php echo $id; ?>">Ver mis articulos<span class="lnr lnr-book"></span></a></li>
        <li class="activado"><a href="registroTrabajo.php?posicion=<?php echo $id; ?>">Registrar trabajo<span class="lnr lnr-highlight"></span></a></li>
        <li class="activado"><a href="cerrar.php">Cerrar sesion<span class="lnr lnr-cross-circle"></span></a></li>
      </ul>
  </div>


  <div class="formulario">
      <form  method="post" class="form" enctype="multipart/form-data" action="registroTrabajo.php?posicion=<?php echo $id; ?>" >
            <div class="welcome-form"><h1>Registrar trabajo</h1></div>
            <div><h1>     </h1></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Titulo" name="titulo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Autor uno" name="autor_uno">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Correo uno" name="correo_uno">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Autor dos" name="autor_dos">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label> 
                <input type="text" placeholder="Correo dos" name="correo_dos">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Modalidad" name="modalidad">
            </div> 
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <div class="user line-input">  
            <span class="lnr lnr-user">Cargar un archivo:</span>
                <input type="file" name="articulo" accept="application/pdf"> 
            </div>
            <button type="submit" name="registro">REGISTRAR<label class="lnr lnr-chevron-right"></label></button>
            </form>
            

  </div>
      

            
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>