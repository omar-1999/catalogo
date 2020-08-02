<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>A&ntilde;adir Al Carrito</title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> -->
	<link rel="stylesheet" href="../css/estilo_producto.css">
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="jumbotron col-md-11">
			<?php 
			if (isset($_GET['imagen'])) {

				$nombre = $_GET['nombre'];
				$tipo = $_GET['tipo'];
				$imagen = $_GET['imagen'];
				$descripcion = $_GET['descripcion'];
				$precio = $_GET['precio'];
				$pro_Id = $_GET['pro_Id'];

				echo "<h1 class='display-4'>".$tipo."</h1>";
				echo "<hr class='my-4'>";
				echo "<img class='img' src='".$imagen."' alt='".$descripcion."' width='350px' height='350px'>";
				echo "<div class='text'>";
				echo "<div class='descripcion'><label>Nombre: </label> ".$nombre."</div>";
				echo "<div class='descripcion'><label>Descripcion: </label> ".$descripcion."</div>";
				echo "<div class='descripcion'><label>Precio: </label> $".$precio."</div>";
				echo "</div>";
			}else{
				echo "<script>alert('hubo un error :(');window.location.href='index.php'</script>";
			}

			echo "<hr class='my-4'>";
			if (isset($_SESSION['tipo_usuario'])) {
				$tipo_usuario = $_SESSION['tipo_usuario'];
				if ($tipo_usuario==='administrador') {
					echo "<form action='../controller/eliminar_producto.php' mmethod='get'>";
					echo "<input type='hidden' name='pro_Id' id='pro_Id' value='".$pro_Id."'>";
					echo "<a><button class='btn btn-danger btn-lg'>Eliminar Producto</button></a>&nbsp;";
					echo "<a href='index.php'><button class='btn btn-secondary btn-lg' type='button'>Volver</button></a>";
					echo "</form>";
				}else{
					?>
					<a class="btn btn-primary btn-lg" href="#" role="button">A&ntilde;adir al Carrito</a>
					<a href="index.php"><button class="btn btn-secondary btn-lg" type="button">Volver</button></a>
				<?php }
			}?>
		</div>
	</div>
</body>
</html>