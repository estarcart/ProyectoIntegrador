<?php

include("conexion.php");

if (isset($_REQUEST['enviar'])) {

    if (strlen($_POST['descripcion']) >= 1) {
        $descripcion = trim($_POST['descripcion']);
        $consulta = "INSERT INTO quejas(mensaje_queja) VALUES('$descripcion')";
        $result = mysqli_query($conex, $consulta);

        if ($result) {
            header("location:quejarse.php");
        }
    }
}
