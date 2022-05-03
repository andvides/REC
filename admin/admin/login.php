<?php session_start();

    if(isset($_SESSION['nombre'])) {
        header('location: index.php');
    }

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $clave_encriptada= hash('sha1', $clave); /*encriptacion*/
        
        $error = '';

        if (empty($nombre) or empty($correo) or empty($clave)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=expotecnologico', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }

            $statement = $conexion->prepare('SELECT * FROM administrador WHERE nombre = :nombre AND correo = :correo AND clave = :clave');
            $statement->execute(array(
                ':nombre' => $nombre,
                ':correo' => $correo,
                ':clave'  => $clave_encriptada
            ));

            $resultado = $statement->fetch();

            if ($resultado !== false){
                $_SESSION['nombre'] = $nombre;
                header('location: indexx.php');
            }else{
                $error .= '<i>Este usuario no existe</i>';
            }
            
        }
            
    }
    
require 'frontend/login-vista.php';


?>