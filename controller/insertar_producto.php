<?php 

include_once '../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$desc = $_POST['desc'];
$tipo = $_POST['tipo'];
$imagen = $_FILES['pro_imagen']['name'];

$ruta = "../../catalogo/imagenes/$imagen";

move_uploaded_file($_FILES['pro_imagen']['tmp_name'],$ruta);

$sql = "INSERT INTO productos VALUES (NULL,'".$nombre."','".$precio."','".$desc."','".$ruta."','".$tipo."')";

$ejecucion = mysqli_query($conexion,$sql);

$obj->close();

if (!$ejecucion) {
	echo "<script type='text/javascript'>alert('Error $ejecucion'); window.location.href='../view/insertar_producto.php'</script>";
}else{
	echo "<script type='text/javascript'>alert('Inserccion exitosa');window.location.href='../view/insertar_producto.php'</script>";
}
?>