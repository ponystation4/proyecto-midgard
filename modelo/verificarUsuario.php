<?php
    session_start();
    $config = require_once __DIR__ . '/../config.php';
    $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

    $vcorreo = isset($_POST['correo'])? $_POST['correo'] : "";
    $vcontrasena = isset($_POST['contrasena'])? $_POST['contrasena'] : "";

    if($conexion->connect_error){
        die(json_encode(['success' => false, 'message' => 'La conexion falló: '. $conexion->connect_error]));
    }

    $sql = "SELECT * FROM usuario WHERE correo = '$vcorreo'";
    $result = $conexion->query($sql);

    $inputStyle = isset($_SESSION['message'])?'border: solid 1px red;' : '';
    $messageStyle = isset($_SESSION['message'])? 'color:red;': '';

    if($result){
        //verificar si encontro un registro
        if ($result->num_rows > 0){
            $row  =$result->fetch_assoc();

            //comparar contraseñas
            if($row['Contrasena']== $vcontrasena){
                //las contraseñas coinciden
                echo "<script>alert('BIENVENIDO');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
                exit();
            }else{
                //caso contrario
                echo "<script>alert('CONTRASEÑA INCORRECTA');</script>";
                echo "<script>window.location.href = 'loginyregis.php';</script>";
                exit();
            }
        }else{
            //No se encontro nada de nada
         
          
        }
    }else{
        $_SESSION['message'] = 'Error en la consulta:'.$conexion->error;
    }



// Cerrar la conexión
$conexion->close();
?>


