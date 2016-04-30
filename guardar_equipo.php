<?php
	include("conexion.php");

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$LOGO = addslashes(file_get_contents($_FILES['LOGO']['tmp_name']));

	$consulta = "INSERT INTO tabla_imagen(TITULO, DESCRIPCION, LOGO) VALUES ('$titulo','$descripcion','$LOGO')";

	mysqli_query($conexion, $consulta);

	header("Location: index2.php");
	

?>