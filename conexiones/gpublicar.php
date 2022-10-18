<?php

include("conexion.php");

if (isset($_POST['publi'])){
    if(is_uploaded_file($_FILES['pdf']['tmp_name'])){
        $ruta= "../archivos/";
        $nombrefinal = trim($_FILES['pdf']['name']);
        $upload = $ruta . $nombrefinal;

        if(move_uploaded_file($_FILES['pdf']['tmp_name'], $upload)) {
        $query = "INSERT INTO publicaciones(titulo_publicacion, sede_publicacion, yt_publicacion, pdf_publicacion, foto_publicacion, descripcion_publicacion, fecha_publicacion) 
        VALUES('','','','$nombrefinal','','','')";      
        }
        
    }
    if(strlen($_POST['titulo']) >= 1 && strlen($_POST['sede']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['yt']) >= 1){
        $titulo=trim($_POST['titulo']);
        $sede=trim($_POST['sede']);
        $descripcion=trim($_POST['descripcion']);
        $yt=trim($_POST['yt']);
        $fecha=date('d-m-Y');
        $consulta= "INSERT INTO publicaciones(titulo_publicacion, sede_publicacion, yt_publicacion, pdf_publicacion, foto_publicacion, descripcion_publicacion, fecha_publicacion) VALUES('$titulo','$sede','$yt','', '', '$descripcion', '$fecha')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");    
        }
    }
}


?>