<?php 

include_once '../lib/connection.php';

$obj = new connection();

$conexion = $obj->getConnect();

$product = $_GET['producto'];

$sql = "SELECT * FROM productos WHERE ( pro_nombre LIKE '%".$product."%' OR pro_precio LIKE '%".$product."%' OR pro_tipo LIKE '%".$product."%' )";

$productos = mysqli_query($conexion,$sql);

$obj->close();

foreach ($productos as $producto) {
	echo "<article class='articles'>";
	echo "<div class='contenedor-div'>";
	echo "<img class='img-uno' src='".$producto['pro_imagen']."' alt='".$producto['pro_descripcion']."'>";
	echo "</div>";
	echo "<div class='precio'>";
	echo "<p>Precio: $".$producto['pro_precio']."</p>";
	echo "<form action='producto.php' method='get'>";
	echo "<input type='hidden' name='pro_Id' id='pro_Id' value='".$producto['pro_Id']."'>";
	echo "<input type='hidden' name='nombre' id='nombre' value='".$producto['pro_nombre']."'>";
	echo "<input type='hidden' name='tipo' id='tipo' value='".$producto['pro_tipo']."'>";
	echo "<input type='hidden' name='descripcion' id='descripcion' value='".$producto['pro_descripcion']."'>";
	echo "<input type='hidden' name='imagen' id='imagen' value='".$producto['pro_imagen']."'>";
	echo "<input type='hidden' name='precio' id='precio' value='".$producto['pro_precio']."'>";

	if (isset($_SESSION['nombre'])) {
		echo "<button class='btn btn-block btn-primary'>A&ntilde;adir al Carrito</button>";
	}else{
		echo "<button type='button' onclick='iniciaSesion()' class='btn btn-block btn-primary'>A&ntilde;adir al Carrito</button>";
		echo "<script> function iniciaSesion() {alert('Debes Iniciar Sesion')} </script>";
	}
	echo "</form>";
	echo "</div>";			
	echo "</article>";
} 

?>