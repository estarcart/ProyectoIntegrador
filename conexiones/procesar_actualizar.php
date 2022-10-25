<?php
include("conexion.php");
if (isset($_REQUEST['actualizar'])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $fecha = $_POST["fecha"];

    $actualizar = "UPDATE usuario SET nombre_usuario='$nombre',apellido_usuario='$apellidos',correo_usuario='$correo',fecha_usuario='$fecha',contraseña_usuario='$contrasena' WHERE id_usuario='$id'";

    $resultado = mysqli_query($conex, $actualizar);

    if ($resultado) {
        header("location:cord_adminusuarios.php");
    }
}
