<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>JUGADORES</title>
</head>
<body>
	<center>
		<table border="2">
			<thead>
				<tr colspan="5"><a href="administrar_equipo.php">Nuevo jugador</a></tr>
				<tr>
					<th>ID</th>
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
				$query = "SELECT * FROM foto WHERE FKGALERIA='$id'";
				$resultado = $conexion->query($query);

				while($row = $resultado->fetch_assoc()){


				?>
					<tr>
						<td><?php echo $row['ID'];?></td>
						<td><?php echo $row['NOMBRE'];?></td>
						<td><?php echo $row['APODO'];?></td>
						<td><img height="100" width="100" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN']); ?>" ></td>
						<th><a href="#">Modificar</a></th>
						<th><a href="#">Eliminar</a></th>

					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</center>
	
</body>
</html>