<?php

include("conexion.php");

$nombre = $_POST['NOMBRE'];
$apodo = $_POST['APODO'];
$rut = $_POST['RUT'];
$pjugador = $_POST['POSICIONJUGADOR'];
$IMAGEN = addslashes(file_get_contents($_FILES['IMAGEN']['tmp_name']));
$fkgaleria = $_POST['idgaleria'];


$query = "INSERT INTO foto(NOMBRE, APODO, RUT, POSICIONJUGADOR, IMAGEN, FKGALERIA) VALUES ('$nombre','$apodo','$rut','$pjugador','$IMAGEN','$fkgaleria')";

$resultado = $conexion->query($query);

header ("Location: administrar_equipo.php?id=$fkgaleria");



?>