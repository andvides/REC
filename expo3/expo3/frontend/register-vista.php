<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registro</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
<div id="logo">
            <img src="image/logo.png" width="400px">
        </div>
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/logo.png" alt="">
                <h2>Formulario de registro Expotecnológica</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <a href="register.php"><li class="module-register active">Registrarse</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Añadir nuevo usuario</h1></div>
            
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="nombre">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Insertar Usuario<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>