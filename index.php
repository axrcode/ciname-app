<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="contenedor">
		<header>

			<nav class="navbar navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">
			    <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			    Equipo Dinamita
					<!--<a class="navbar-brand" href="#">Inicio</a>
					<a class="navbar-brand" href="#">Perfil</a>-->
					<a class="navbar-brand" href="registrarse.php">Registrarse</a>
			  </a>
			</nav>

		</header>

		<div class="container">
		<section id="cabecera">
		<div class="contenedor2">
			<br><h1>Iniciar Sesión</h1><br>
			<form action="inicio_sesion.php" method="POST">

				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Correo Electrónico</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="correo" required aria-describedby="emailHelp" placeholder="Correo Electrónico">
				    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Contraseña">
				  </div>

					<input type="submit" class="btn btn-primary" value="Ingresar" name="enviar">
				</form>

			</form>
		</div>
	</section>

		<footer>
			<br><p>@EquipoDinamita, Copyrigth &copy; 2019</p>
		</footer>
	</div>
</div>
</body>
</html>
