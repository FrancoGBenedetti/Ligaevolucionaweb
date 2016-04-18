<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Equipo</title>
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
	<form method="post" action="guardar_equipo.php">
		<label>Nombre de Equipo</label>
		<input type="text" name="titulo">
		<label>Descripcion</label>
		<textarea name="descripcion" cols="90" rows="5"></textarea>
		<input type="submit">
		
	</form>
	
</body>
</html>