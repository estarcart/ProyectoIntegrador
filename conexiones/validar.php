<?php
$user=$_POST['user'];
$passw=$_POST['passw'];

$conex = mysqli_connect("localhost","root","","pontilaunch");

$consulta="SELECT * FROM usuario WHERE correo_usuario='$user' and contraseña_usuario='$passw'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:register.php");
}
else {
    echo "Error con la autentificación";
}
mysqli_free_result($resultado);
mysqli_close($conex);
?>