<?php
if( isset( $_GET['id'] ) ){

$id = $_GET['id'];

include('conexion.php');
$consulta = "DELETE FROM foto WHERE ID='$id'";
mysqli_query($conexion, $consulta);
}

header("Location: index2.php");

?>