<?php
include("conexion.php");
if (isset($_REQUEST['registrar'])) {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $fecha = $_POST["fecha"];

    $insertar = "INSERT INTO usuario(nombre_usuario,apellido_usuario,correo_usuario,fecha_usuario,contraseña_usuario)
    VALUES ('$nombre','$apellidos','$correo','$fecha','$contrasena')";

    $resultado = mysqli_query($conex, $insertar);
}
