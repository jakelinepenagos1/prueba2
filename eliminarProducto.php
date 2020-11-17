<?php


$id=$_GET["id"];

include("baseDatos.php");

$operacionBD =new BaseDatos();

$consultaSQL="DELETE FROM producto WHERE idProducto='$id'";

$operacionBD->eliminarDatos($consultaSQL);










?>