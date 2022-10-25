<?php
$conex = mysqli_connect("localhost", "root", "", "pontilaunch");
$id = $_GET["id"];
$usuarios = "SELECT * FROM usuario WHERE id_usuario = '$id'";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontilaunch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilos.css">
    <style type="text/css">
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="head"></div>
    <div class="pontilaunchHome">
        <h1>pontilaunch</h1>
    </div>
    <div class="pontilaunch1Home">
        <h1>pontilaunch</h1>
    </div>
    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_cord.php">
            <img src="../imagenes/casa.png" href="../vistas/home_cord.php">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>


    <!-- TABLA USUARIOS -->
    <form method="post">
        <table class="tablauser" style="border: 1px solid black">
            <tr>
                <th style="border: 1px solid black">Nombre</th>
                <th style="border: 1px solid black">Apellidos</th>
                <th style="border: 1px solid black">Correo</th>
                <th style="border: 1px solid black">Contraseña</th>
                <th style="border: 1px solid black">Fecha</th>
                <th style="border: 1px solid black">Operacion</th>
            </tr>

            <?php $resultado = mysqli_query($conex, $usuarios);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?><tr><input name="id" type="hidden" value="<?php echo $row["id_usuario"]; ?>">
                    <th style="border: 1px solid black"><input name="nombre" type="text" value="<?php echo $row["nombre_usuario"]; ?>"></th>
                    <th style="border: 1px solid black"><input name="apellidos" type="text" value="<?php echo $row["apellido_usuario"]; ?>"></th>
                    <th style="border: 1px solid black"><input name="correo" type="email" value="<?php echo $row["correo_usuario"]; ?>"></th>
                    <th style="border: 1px solid black"><input name="contrasena" type="text" value="<?php echo $row["contraseña_usuario"]; ?>"></th>
                    <th style="border: 1px solid black"><input name="fecha" type="date" value="<?php echo $row["fecha_usuario"]; ?>"></th>
                    <th style="border: 1px solid black"><input type="submit" value="Actualizar" name="actualizar"></th>
                </tr>
            <?php } ?>

        </table>
    </form>
    <?php
    include('../conexiones/procesar_actualizar.php');
    ?>
</body>

</html>