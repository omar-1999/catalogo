<?php 
include_once '../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$pro_Id = $_GET['pro_Id'];

$sql = "DELETE FROM productos WHERE pro_Id=$pro_Id";

$ejecucion = mysqli_query($conexion,$sql);

$obj->close();

if (!$ejecucion) {
	echo mysqli_error($conexion);
	echo "<script type='text/javascript'>alert('Error'); window.location.href='../view/producto.php'</script>";
}else{
	echo "<script type='text/javascript'>alert('Ha sido eliminado correctamente'); window.location.href='../view/'</script>";
}
?>