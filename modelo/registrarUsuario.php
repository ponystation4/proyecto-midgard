<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $config = require __DIR__ . '/../config.php';
        $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

        if($conexion->connect_error){
            die("Error en la conexion".$conexion->connect_error);
        }

        $nombre = $_POST['nombre'];
        $aPaterno = $_POST['aPaterno'];
        $aMaterno = $_POST['aMaterno'];
        $correo = $_POST['correo'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $telefono = $_POST['telefono'];
        $fechaNacimiento = $_POST['fechaNacimiento'];

        //Verificamos si ya existe un usuario con las caracteristicas anteriores

        $consulta = "SELECT Correo FROM Usuario WHERE correo = '$correo'";
        $resultado = $conexion ->query($consulta);

        if($resultado->num_rows > 0) {
            echo "<script>alert('Ya existe un usuario con ese correo');</script>";
            echo "<script>window.location.href = 'loginyregis.php';</script>";
        }else {
            //Si no existe un usuario con las caracteristicas anteriores
            $consulta = "INSERT INTO Usuario (Nombre, aPaterno, aMaterno, Correo, Contrasena, Telefono, FchNacimiento) VALUES ('$nombre', '$aPaterno', '$aMaterno', '$correo', '$contrasena', '$telefono', '$fechaNacimiento')";
            $resultado = $conexion ->query($consulta);

            if($conexion->query($consulta)===TRUE){
                echo "<script>alert('Usuario registrado correctamente');</script>";
                echo "<script>window.location.href = 'loginyregis.php';</script>";
            }else{
                echo "<script>alert('Error al registrar usuario');</script>";
                echo "<script>window.location.href = 'loginyregis.php';</script>";
            }
        }
        $conexion->close();
    }

?>

