<?php
$conex = mysqli_connect("localhost","root","","pontilaunch");
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
    
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="selecc"></div>
    <!-- Rectangulo amarillo proyectos -->
    <div class="rectanguloUser"></div>
    <a href="../vistas/publicar.php">
    <div class="rectanguloProyect"></div>
    </a>
    <!-- Icono usuario -->
    <div class="usuarioIcon">
        <img src="../imagenes/usuario.png">
        </a>
    </div>
    <!-- Texto usuario  -->
    <div class="usuarioText">
        <h1>Estudiante</h1>

    </div>
    <!-- Icono proyecto -->
    <div class="proyectIcon">
        <a href="../vistas/publicar.php">
        <img src="../imagenes/editar.png">
        </a>
    </div>
    <!-- Texto Proyecto -->
    <div class="proyecText">
        <a href="../vistas/publicar.php">
        <h1>publicar nuevo proyecto</h1>
        </a>
    </div>
    <div class="head"></div>
    <div class="pontilaunchHome">
        <h1>pontilaunch</h1>
    </div>
    <div class="pontilaunch1Home">
        <h1>pontilaunch</h1>
    </div>
    
    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_estudiante.php">
        <img src="../imagenes/casa.png" href="../vistas/home_estudiante.php">
        </a>
    </div>
    <!-- Icono comentario -->
    <div class="comentario">
        <a href="../vistas/mensajes.php">
        <img src="../imagenes/comentario.png">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
        <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>

    <div>
        <?php
        $sql="SELECT * FROM publicaciones";
        $result=mysqli_query($conex,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <form class="pub" method="post">
            <h1><?php echo $mostrar['titulo_publicacion'] ?></h1>
            <p class="sed"><?php echo $mostrar['sede_publicacion'] ?></p>
            <a class="yt" href="<?php echo $mostrar['yt_publicacion'] ?>"><img src="../imagenes/youtube.png"></a>
            <img src="" >
            <img src="" >
            <p class="des"><?php echo $mostrar['descripcion_publicacion'] ?></p>
            <p class="fec"><?php echo $mostrar['fecha_publicacion'] ?></p>
            <div>
                <button name="1star">
                    <p>1</p>
                </button>

                <button name="2star">
                    <p>2</p>
                </button>

                <button name="3star">
                    <p>3</p>
                </button>

                <button name="4star">
                    <p>4</p>
                </button>

                <button name="5star">
                    <p>5</p>
                </button>
            </div>
            <div>
                <form method="post">
                    <div>
                        <input type="varchar" placeholder="Agrega tu comentario" name="comentariotxt">
                        <input type="submit" value="enviar" name="coment">
                    </div>
                    <?php
                    $sqli="SELECT * FROM comentario";
                    $result=mysqli_query($conex,$sqli);
                    while($most=mysqli_fetch_array($result)){
                    ?>
                    <div>
                        <h1><?php echo $most['texto_comentario']?></h1>
                    </div>
                </form>
            </div>
            <?php
            }
            ?>
        </form>
    </div>

    <a href="contacto.php">contactos</a>

    <?php
    include('../conexiones/comentarios.php');
    include('../conexiones/calificaciones.php');
    ?>

    <?php
    }
    ?>
</body>
</html>
    