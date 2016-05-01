<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/liga.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Nuevo Equipo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<style>
		label{
			display: block;
		}
		textarea{
			display: block;
		}
	</style>
</head>
<body background="img/fieldbg.jpg">
	
	<div class="container crear-equipos">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="post" action="guardar_equipo.php" enctype="multipart/form-data">
					<label>Nombre de Equipo</label>
					<input type="text" name="titulo">
					<label>Descripcion</label>
					<textarea name="descripcion" cols="90" rows="5"></textarea>
					<label>Logo</label>
					<input type="file" name="LOGO"><br>
					<input type="submit">
				</form>
			</div>
		</div>
	</div>


	
	 
	 
	
</body>
</html>


