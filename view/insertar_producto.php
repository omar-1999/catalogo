<!DOCTYPE html>
<html lang="es">
<head>
	<title>Insertar Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
</head>
<body>
	<br><br>
	<div class="container">
		<form action="../controller/insertar_producto.php" method="POST" enctype="multipart/form-data">
			<div class="jumbotron">
				<label class="display-4">A&ntilde;adir Productos</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label><h4>Nombre</h4></label>
					<input type="text" name="nombre" class="form-control" autofocus required>
				</div>
				<div class="form-group col-md-3">
					<label><h4>Precio</h4></label>
					<input type="text" name="precio" class="form-control" required>
				</div>
				<div class="form-group col-md-3">
					<label><h4>Descripcion</h4></label>
					<input type="text" name="desc" class="form-control" required>
				</div>
				<div class="form-group col-md-3">
					<label><h4>Tipo de Producto</h4></label>
					<select class="form-control" name="tipo" required>
						<option>Seleccione....</option>
						<option value="Camisa">Camisa</option>
						<option value="Chaqueta">Chaqueta</option>
						<option value="Pantaloneta">Pantaloneta</option>
						<option value="Sudadera">Sudadera</option>
						<option value="Guantes">Guantes</option>
						<option value="Guayos">Guayos</option>
						<option value="Medias">Medias</option>
						<option value="Canilleras">Canilleras</option>
						<option value="Gorra">Gorra</option>
						<option value="Balon">Balon</option>
					</select>
				</div>
				<div class="col-md-3">
					<label><h4>Imagen</h4></label>
					<input type="file" name="pro_imagen">
				</div>
			</div><br><br>
			<input type="submit" class="btn btn-secondary" name="Enviar" value="Agregar">&nbsp;
			<a href="index.php"><button type="button" class="btn btn-primary">Volver</button></a>
		</form>
	</div>
</body>
</html>