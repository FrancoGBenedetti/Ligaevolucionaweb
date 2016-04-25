<?php
	include("conexion.php");

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];

	$consulta = "INSERT INTO tabla_imagen(TITULO,DESCRIPCION) VALUES ('$titulo','$descripcion')";

	mysqli_query($conexion, $consulta);

	header("Location: index2.php");
	

?>