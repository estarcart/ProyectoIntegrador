<?php
include("conexion.php");
if (isset($_REQUEST['actualizar'])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $identificacion = $_POST["identificacion"];
    $universidad = $_POST["universidad"];
    $semestre = $_POST["semestre"];
    $promedio = $_POST["promedio"];


    $actualizar = "UPDATE miembro SET nombre_estudiante='$nombre',apellido_estudiante='$apellidos',correo_estudiante='$correo',
    fecha_estudiante='$fecha',contrasena_estudiante='$contrasena',identificacion_estudiante='$identificacion',universidad_estudiante='$universidad',semestre_estudiante='$semestre',promedio_estudiante='$promedio' WHERE id_estudiante='$id'";

    $resultado = mysqli_query($conex, $actualizar);

    if ($resultado) {
        header("location:cord_adminusuarios1.php");
    }
}
