<?php
include('_setup.php');
$id = $_GET['id'];

$consulta = "SELECT TITULO, DESCRIPCION FROM tabla_imagen WHERE IDGALERIA='$id'";

$filas = mysqli_query($cnx, $consulta);
$columna = mysqli_fetch_assoc($filas);


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Equipo</title>
		<style>
		label{
			display: block;
		}
		textarea{
			display: block;
		}
	</style>
</head>
<body>
	<form method="post" action="modificar_equipo.php">
		<label>Nombre de Equipo</label>
		<input type="text" name="titulo" value="<?php echo $columna['TITULO'];?>">
		<label>Descripcion</label>
		<textarea name="descripcion" cols="90" rows="5"><?php echo $columna['DESCRIPCION'];?></textarea>
		<input type="hidden" name="idgaleria" value="<?php echo $id;?>">
		<input type="submit" value="Aceptar">
		
	</form>
	
</body>
</html>