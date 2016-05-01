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
	<link rel="stylesheet" type="text/css" href="css/liga.css">
	<link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
</head>
<body background="img/fieldbg.jpg" style="background-attachment: fixed" >
	

	<div class="container head">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
				
					<a href="index.html"><img src="img/logo3.png"></a>
				
				
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 bases-container">
				<a href="https://www.facebook.com/LigaEvoluciona/?fref=ts" class="social-link">
					<div class="social-top">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</div>
				</a>
				<a href="index1.php">
					<div class="btn-inscripcion">
						<p><i class="fa fa-users" aria-hidden="true"></i>INSCRÍBE A TU EQUIPO</p>
					</div>
				</a>
				<a href="index1.php">
					<div class="btn-bases">
						<p>Log In/ Registrate</p>
					</div>
				</a>
				<a href="pdf/bases.pdf">
					<div class="btn-bases">
						<p>Bases <i class="fa fa-arrow-circle-o-down"></i></p>
					</div>
				</a>
			</div>
			
			
		</div>
	</div>

	<header>
	
		<nav class="navbar navbar-default">
		  <div class="container bg-nav">
		    
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><img src=""></a>
		    </div>

		    
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		     
		     
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Liga Evoluciona</a></li>
		        <li><a href="premios.html">Información</a></li>
		        

		        
		        <li><a href="formulario_contacto.html">Contáctanos</a></li>


		        <!--<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>-->
		      </ul>
		    </div>
		  </div>
		</nav>
	
	</header>




	


	<center>
	<div class="tit" style="padding: 50px 20px 50px 20px;">
		<h2 style="font-size: 14px; color: orange; font-family: 'Montserrat', sans-serif;">INICIO DE SESIÓN</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr>
			<td><label  style="font-size: 12pt; margin-right: 5px; color: orange; font-family: 'Montserrat', sans-serif;"><b>Correo: </b></label></td>
			
		</tr>
		<tr>
			<td width=80> <input class="form-group has-success" style="" type="text" name="mail"></td>
		</tr>
		<tr>
			<td><label  style="font-size: 12pt; margin-right: 5px; color: orange; font-family: 'Montserrat', sans-serif;"><b>Contraseña: </b></label></td>
			
		</tr>
		<tr>
			<td witdh=80><input style="" type="password" name="pass"></td>
		</tr>
		<tr>
			<td width=80 align=center><input style="margin-top: 10px; border-radius: 3px !important;" class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 14pt; color: orange; font-family: 'Montserrat', sans-serif; border-bottom: 2px solid orange !important; padding-bottom: 5px;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu nombre</b></label>
      <input style="border-radius: 0px !important;" type="text" name="realname" class="form-control" placeholder="..." />
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu email</b></label>
      <input style="border-radius: 0px !important;" type="text" name="nick" class="form-control"  required placeholder="..."/>
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;"><b>Ingresa tu Password</b></label>
      <input style="border-radius: 0px !important;" type="password" name="pass" class="form-control"  placeholder="..." />
    </div>
    <div class="form-group">
      <label style="font-size: 12pt; font-family: 'Montserrat', sans-serif; color: orange;t"><b>Repite tu contraseña</b></label>
      <input style="border-radius: 0px !important;" type="password" name="rpass" class="form-control" required placeholder="..." />
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


<footer class="container footer" style="width:100%;">
	    <div class="row">
	    	<div class="col-md-3 col-md-offset-2 foot-items">
	    		<span id="foot-titles">Liga Evoluciona</span>
	    			<p>La evolución de las ligas. Si quieres vivir el futbol de verdad, te invitamos a inscribir tu equipo a Liga Evoluciona.</p>
	    		
	    	</div>
	    	<div class="col-md-3 foot-items">
	    		
	    		<span id="foot-titles">Usuario</span>
	    		<ul>
	    			<li><a href="index1.php">Log In</a></li>
	    			<li><a href="index1.php">IInscríbe a tu equipo</a></li>
	    			<li><a href="">Bases Oficiales</a></li>

	    			
	    		</ul>
	    		<span id="foot-titles">Información</span>
	    		<ul>
	    			<a href="premios.html">Premios</a>
	    		</ul>
	    			
	    	</div>
	    	<div class="col-md-3 foot-items">
	    		
	    		<span id="foot-titles">Contacto</span>
	    		<ul>
	    			<li>Consultas? escribenos a <a href="contacto.html">contacto@ligaevoluciona.cl</a></li>
	    			
	    		</ul>
	    		<span id="foot-titles">Redes Sociales</span>
	    		<ul>
	    			<li><a href="https://www.facebook.com/LigaEvoluciona/?fref=ts"><i class="fa fa-facebook foot-facebook" aria-hidden="true"></i></a></li>
	    			
	    		</ul>
	    	</div>
	    	
	      
	</footer>

	
</body>
</html>