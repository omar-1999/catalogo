<?php 
session_start();

include_once '../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$user = $_POST['user'];
$clave = $_POST['clave'];

$sql = "SELECT usu_user,usu_nombre,usu_tipoUsuario FROM usuario WHERE usu_password='".$clave."' and (usu_user='".$user."' OR usu_email='".$user."')";

$datos = mysqli_query($conexion,$sql);

$obj->close();

if (mysqli_num_rows($datos)>0) {
	foreach ($datos as $value) {

		$_SESSION['user'] = $value['usu_user'];
		$_SESSION['nombre'] = $value['usu_nombre'];
		$_SESSION['tipo_usuario'] = $value['usu_tipoUsuario'];
	}
	$message = 'Hola! '.$_SESSION['nombre'];
	echo "<script type='text/javascript'>alert('$message');window.location.href='../view/'</script>";

}else{
	echo "<script type='text/javascript'>alert('Info incorrecta.. Por favor veririque!')</script>";
	echo "<script type='text/javascript'>window.location.href='login.html'</script>";

}
?>