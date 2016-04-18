<?php
if( isset( $_GET['id'] ) ){

$id = $_GET['id'];

include('_setup.php');
$consulta = "DELETE FROM tabla_imagen WHERE IDGALERIA='$id'";
mysqli_query($cnx, $consulta);
}

header("Location: index2.php");

?>