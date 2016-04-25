<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}
?>
<?php
  include("conexion.php");
  $consulta = "SELECT IDGALERIA, TITULO, DESCRIPCION FROM tabla_imagen";
  $filas = mysqli_query($conexion, $consulta);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NUEVO EQUIPO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->
<!--

<?php
/*
  include("conexion.php");
  $consulta = "SELECT IDGALERIA, TITULO, DESCRIPCION FROM tabla_imagen";
  $filas = mysqli_query($cnx, $consulta);
*/
?>

-->

<h1>EQUIPOS</h1>
<h2>LISTADO DE EQUIPOS</h2>

<div><a href="nuevo_equipo.php">NUEVO EQUIPO</a></div>
<table border="1">
  <tr>
    <th>Nombre de EQuipo</th>
    <th>Descripcion</th>
    <th>Botones accion</th>
  </tr>
  <?php
  while( $columna = mysqli_fetch_assoc( $filas)){
    echo "<tr>";
    echo "<td>$columna[TITULO]</td>";
    echo "<td>$columna[DESCRIPCION]</td>";
    echo "<td><a href='administrar_equipo.php?id=$columna[IDGALERIA]'>administrar equipo</a></td>";
    echo "</tr>";
    

  }

  ?>
  
</table>






<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p> <br/><br/></p>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>