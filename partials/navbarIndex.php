<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#"><i>O-tiger</i></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-4" type="search" name="Cbuscar" id="Cbuscar" placeholder="Buscar..." aria-label="Search">
			<button class="btn btn-outline-light my-2 my-sm-0" name="buscar" id="buscar" type="submit">Buscar</button>
		</form>
	</div>
	<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
		<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
	</svg>&nbsp;
	<?php 
	if (isset($_SESSION['tipo_usuario'])) {
		if ($_SESSION['tipo_usuario']==='administrador') { ?>
			<ul  class="navbar-nav mr-auto">
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $_SESSION['user'] ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="insertar_producto.php">Añadir Producto</a>
						<a class="dropdown-item" href="../login/logout.php">Cerrar Sesion</a>
					</div>
				</li>
			</ul>

		<?php }else if (isset($_SESSION['nombre'])) { ?>
			<ul  class="navbar-nav mr-auto">
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $_SESSION['user'] ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Mi Carrito </a>
						<a class="dropdown-item" href="../login/logout.php">Cerrar Sesion </a>
					</div>
				</li>
			</ul>
		<?php }
	}else{ ?>
		<ul  class="navbar-nav mr-auto">
			<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Iniciar Sesion
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="../login/login.html">Ingresar </a>
					<a class="dropdown-item" href="../login/registro.html">Registrarme</a>
				</div>
			</li>
		</ul>
	<?php } ?>
	&nbsp;&nbsp;&nbsp;
	<svg width="2em" height="2em" viewBox="0 0 16 17" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
	</svg>
</nav>