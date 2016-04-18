<?php
include('_setup.php');
$id = $_GET['id'];

/*$consulta= "SELECT (ARCHIVO, NOMBRE, APODO) FROM foto WHERE FKGALERIA='$id' ORDER BY POSICION ASC";
$filas = mysqli_query($cnx, $consulta);
*/

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	<h1>Panel de control</h1>
	<h2>Administracion de equipo</h2>
<h3>EQUIPO</h3>
<!--
<?php
/*
while ( $columna = mysqli_fetch_assoc($filas) ){
echo '<div>';
echo "<p>$columna[NOMBRE]</p>";
echo "<img src='../fotos_equipo/$columna[ARCHIVO]'>";
echo '</div>';
}
*/
?>

<hr>
<h3>SUBIR FOTO NUEVAS</h3>
-->

<form action="administrar_equipo_upload.php" method="post" enctype="multipart/form-data">
<input type="text" name="idgaleria" value="<?php echo $id;?>">
<div>
	<label>Nombre</label>
	<input type="text" name="titulo">
	<label>Apodo</label>
	<input type="text" name="apodo">
	<label>Archivo</label>
	<input type="file" name"archivo">
</div>

<input type="submit" value="agregar foto de jugador">
</form>

	
</body>
</html>