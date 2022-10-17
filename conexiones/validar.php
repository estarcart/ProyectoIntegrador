<?php

include('conexion.php');

$usuario=$_POST['user'];
$passwd=$_POST['passwd'];

$consulta = "SELECT * FROM usuario where correo_usuario = '$usuario' and contraseña_usuario = '$passwd'";
$resultado= mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:register.php");

}else{
    include("home.html");
}
mysqli_fre_result($resultado);
mysqli_close($conex);
?>