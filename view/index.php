<?php
session_start();
include_once '../controller/consultar_productos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="description" content="catalogo de ventas de articulos del balon pie"/>
	<title>O-Tiger</title>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="shorcut icon" href="../img/logo.jpeg">
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<!-- <script type="text/javascript" src="../js/global.js"></script> -->
</head>
<body class="body">
	<?php include_once '../partials/navbarIndex.php'; ?>
	<br>
	<div class="container">
		<?php if (!isset($_SESSION['nombre'])) {?>
			<header class="cabecera jumbotron">
				<em>Catalogo de articulos de excelente calidad del balon pie en la ciudad de Cali</em><br>
				<em>ofrecemos los mejores productos y variedad de los mismos.</em>
			</header>
		<?php } ?>
		<p class="p-ofertas"><b>Ofertas en cali hoy!..</b></p>
		<?php foreach ($productos as $producto) {
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
				echo "<button class='btn btn-block btn-primary'>Ver Producto</button>";
			}else{
				echo "<button type='button' onclick='iniciaSesion()' class='btn btn-block btn-primary'>Ver Producto</button>";
				echo "<script> function iniciaSesion() {alert('Debes Iniciar Sesion')} </script>";
			}
			echo "</form>";
			echo "</div>";			
			echo "</article>";
		} ?>
	</div>
</body>
</html>