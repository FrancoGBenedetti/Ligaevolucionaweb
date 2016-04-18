<?php
	include('_setup.php');

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$id = $_POST['idgaleria'];

	$consulta = "UPDATE tabla_imagen(TITULO,DESCRIPCION) SET TITULO='$titulo' DESCRIPCION='$descripcion' WHERE IDGALERIA='$id'";
	
	mysqli_query($cnx, $consulta);

	header("Location: index2.php");
	

?>