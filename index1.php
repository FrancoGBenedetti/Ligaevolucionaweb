<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos1.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Proyecto academias</title>
	<link rel="stylesheet" type="text/css" href="liga.css">
</head>
<body background="img/fieldbg.jpg" style="background-attachment: fixed" >
	<center>
	<div class="tit" style="padding: 50px 20px 50px 20px;">
		<h2 style="font-size: 14px; color: orange; font-family: 'Montserrat', sans-serif;">INICIO DE SESIÓN</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 12pt; margin-right: 5px; color: orange; font-family: 'Montserrat', sans-serif;"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 12pt; margin-right: 5px; color: orange; font-family: 'Montserrat', sans-serif;"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input style="margin-top: 10px; border-radius: 0px !important;" class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 14pt; color: orange; font-family: 'Montserrat', sans-serif;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu nombre</b></label>
      <input style="border-radius: 0px !important;" type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu email</b></label>
      <input style="border-radius: 0px !important;" type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu Password</b></label>
      <input style="border-radius: 0px !important;" type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;t"><b>Repite tu contraseña</b></label>
      <input style="border-radius: 0px !important;" type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center>

</div></center>

	
</body>
</html>