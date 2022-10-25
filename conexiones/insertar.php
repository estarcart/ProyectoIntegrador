<?php
include("conexion.php");
if (isset($_REQUEST['registrar'])) {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $fecha = $_POST["fecha"];
    $identificacion = $_POST["identificacion"];
    $universidad = $_POST["universidad"];
    $semestre = $_POST["semestre"];
    $promedio = $_POST["promedio"];

    $insertar = "INSERT INTO miembro(nombre_estudiante,apellido_estudiante,correo_estudiante,contrasena_estudiante,fecha_estudiante,identificacion_estudiante,universidad_estudiante,semestre_estudiante,promedio_estudiante)
    VALUES ('$nombre','$apellidos','$correo','$contrasena','$fecha','$identificacion','$universidad','$semestre', '$promedio')";

    $resultado = mysqli_query($conex, $insertar);
}
