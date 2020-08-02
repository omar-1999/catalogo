<?php 

include_once '../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$sql = "SELECT * FROM productos";

$productos = mysqli_query($conexion,$sql);

$obj->close();

?>