<?php

include("conexion.php");

$nombre = $_POST['NOMBRE'];
$apodo = $_POST['APODO'];
$IMAGEN = addslashes(file_get_contents($_FILES['IMAGEN']['tmp_name']));
$fkgaleria = $_POST['idgaleria'];


$query = "INSERT INTO foto(NOMBRE, APODO, IMAGEN, FKGALERIA) VALUES ('$nombre','$apodo','$IMAGEN','$fkgaleria')";

$resultado = $conexion->query($query);

header ("Location: administrar_equipo.php?id=$fkgaleria");



?>