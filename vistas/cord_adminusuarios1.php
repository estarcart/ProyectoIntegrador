<?php
$conex = mysqli_connect("localhost", "root", "", "pontilaunch");
$usuarios = "SELECT * FROM miembro";
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
    <div class="usernormal">
        <a href="../vistas/cord_adminusuarios.php">usuario</a>
    </div>
    <div class="userestud">
        <a href="../vistas/cord_adminusuarios1.php">estudiante</a>
    </div>
    <div class="seltion1"></div>

    <!-- AGREGAR USUARIOS -->

    <div class="aggus">
        <h2 class="titls">registrar estudiante</h2>
        <form action="" method="post" class="container__form">
            <input name="nombre" type="text" class="container__input" placeholder="Nombre">
            <input name="apellidos" type="text" class="container__input" placeholder="Apellidos">
            <input name="correo" type="email" class="container__input" placeholder="Correo">
            <input name="contrasena" type="password" class="container__input" placeholder="Contraseña">
            <input name="fecha" type="date" class="container__input">
            <input name="identificacion" type="text" class="container__input" placeholder="Identificacion">
            <input name="universidad" type="text" class="container__input" placeholder="Universidad">
            <input name="semestre" type="text" class="container__input" placeholder="Semestre">
            <input name="promedio" type="text" class="container__input" placeholder="Promedio">
            <input name="registrar" type="submit" class="container__submit" value="registrar">
        </form>
    </div>


    <!-- TABLA USUARIOS -->
    <table class="tablauser1" style="border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">Nombre</th>
            <th style="border: 1px solid black">Apellidos</th>
            <th style="border: 1px solid black">Correo</th>
            <th style="border: 1px solid black">Contraseña</th>
            <th style="border: 1px solid black">Fecha</th>
            <th style="border: 1px solid black">Identificacion</th>
            <th style="border: 1px solid black">Universidad</th>
            <th style="border: 1px solid black">Semestre</th>
            <th style="border: 1px solid black">Promedio</th>
            <th style="border: 1px solid black">Operacion</th>
        </tr>

        <?php $resultado = mysqli_query($conex, $usuarios);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?><tr>
                <th style="border: 1px solid black"><?php echo $row["nombre_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["apellido_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["correo_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["contrasena_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["fecha_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["identificacion_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["universidad_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["semestre_estudiante"]; ?></th>
                <th style="border: 1px solid black"><?php echo $row["promedio_estudiante"]; ?></th>
                <th style="border: 1px solid black"><a href="actualizar1.php?id=<?php echo $row["id_estudiante"]; ?>">Editar</a>
            </tr>
        <?php } ?>

    </table>
    <?php
    include('../conexiones/insertar.php');
    ?>
</body>

</html>