<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}
?>
<?php
include('conexion.php');
$id = $_GET['id'];
?>

<!--
<?php
/*

	include('conexion.php');
	$id = $_GET['id'];

	$consulta = "SELECT * FROM fotos WHERE FKGALERIA='$id' ORDER BY POSICION ASC";
	$filas = mysqli_query($conexion, $consulta);
*/
	
?>
-->

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ADMINISTRAR EQUIPO</title>

</head>
<body>
	<h2>JUGADORES</h2>
	
		<center>
		<table border="2">
			<thead>
				
				<tr>
					
					<th>Nombre</th>
					<th>Apodo</th>
					<th>Imagen</th>
					<th>Operaciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
				include("conexion.php");
				$id = $_GET['id'];

				$query = "SELECT * FROM foto WHERE FKGALERIA='$id' ";
				$resultado = $conexion->query($query);
				

				while($row = $resultado->fetch_assoc()){


				?>
					<tr>
						
						<td><?php echo $row['NOMBRE'];?></td>
						<td><?php echo $row['APODO'];?></td>
						<td><img height="100" width="100" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN']); ?>" ></td>
						<th><a href="#">Eliminar</a></th>

					</tr>
				<?php
					}
					
				?>
			</tbody>
		</table>
	</center>

<!--
	<?php
	/*
	
	while ( $columna = mysqli_fetch_assoc($filas)){
	echo '<div>';
	echo "<p>$columna[NOMBRE]</p>";
	echo "<img src='$columna[IMAGEN]>";
	echo '</div>';
	}

	*/
	?>
-->
	<hr>
	
	<center><br><br>
		<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="idgaleria" value="<?php echo $id;?>">
			<input type="text" name="NOMBRE" value="" REQUIRED placeholder="Nombre y Apellido"><br><br>
			<input type="text" name="APODO" value="" placeholder="Apodo"><br><br>
			<input type="file" name="IMAGEN"><br>
			<input type="submit" value="aceptar"><br>
		
		</form>
	</center>


</body>
</html>