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
	<form method="post" action="guardar_equipo.php" enctype="multipart/form-data">
		<label>Nombre de Equipo</label>
		<input type="text" name="titulo">
		<label>Descripcion</label>
		<textarea name="descripcion" cols="90" rows="5"></textarea>
		<label>Logo</label>
		<input type="file" name="LOGO"><br>
		<input type="submit">
	</form>
	 
	 
	
</body>
</html>


