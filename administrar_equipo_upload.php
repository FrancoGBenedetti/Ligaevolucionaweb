
<?php
include('_setup.php');

$titulo = $_POST['titulo'];
$apodo = $_POST['apodo'];
$fkgaleria = $_POST['idgaleria'];
$posicion = 0;
$nombre_file = mktime() .'.jpg';
$consulta = "INSERT INTO foto (NOMBRE, APODO, ARCHIVO, POSICION, FKGALERIA) VALUES ('$titulo','$apodo','$nombre_file','$posicion','$fkgaleria')";

mysqli_query($cnx, $consulta);

$original = $_FILES['archivo'] ['tmp_name'];
$destino = "../fotos/".$nombre_file;

copy($original, $destino );
header("Location:administrar_equipo.php?id=$fkgaleria");
















?>