<?php 

include_once '../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$cel = $_POST['cel'];
$user = $_POST['user'];
$clave = $_POST['clave'];

$sql = "INSERT INTO usuario VALUES ('".$cedula."','".$nombre."','".$apellido."','".$correo."','".$direccion."','".$cel."','".$user."','".$clave."','visitante')";

$datos = mysqli_query($conexion,$sql);

$obj->close();

if (!$datos) {
	$error = mysqli_error($conexion);
	echo "<script type='text/javascript'>alert('Ha habido un Error! $error');window.location.href='registro.html'</script>";

}else{
	echo "<script type='text/javascript'>alert('$nombre ha sido registrado correctamente!');window.location.href='login.html'</script>";

}
?>