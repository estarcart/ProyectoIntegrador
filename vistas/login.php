<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicia sesión - pontilaunch</title>
    <link rel="stylesheet" href="../styles/estilos.css">  <!--se conecta el html con el css-->
    <style type="text/css"> 
        a{
            color: black;
            text-decoration: none;
        }
    </style> <!--codigo para quitar delineado y color azul a las palabras que llevan link-->
</head>
<body>
    <div class="volver">
        <a href="../vistas/inicio.php">regresar</a>
    </div>
    <div class="inicio">
        <p>inicia sesion en pontilaunch</p>
        <form action="validar.php" method="post">
            <input type="email" required placeholder="correo electronico" class = "lg" autocomplete = " off " name="user">
            <input type="password" required placeholder="contraseña" class = "lg1" autocomplete = " off " name="passwd"> 
            <input type="submit" value="ingresar" class="sub" name="valid">
        </form>


    </div>
    
</body>
</html>