<!DOCTYPE html>

<html>
<head>
	<title>Registrarse</title>
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
					<a class="navbar-brand" href="index.php">Iniciar Sesión</a>
			  </a>
			</nav>

		</header>

		<div class="container">
			<section id="cabecera">
				<div class="contenedor2">
					<br><h1>Registrarse</h1><br>
					<form action="registro_a_bd.php" method="POST" enctype="multipart/form-data">

						<form>
							<div class="form-group">
						    <label for="exampleInputEmail1">Nombre</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" required aria-describedby="emailHelp" placeholder="Nombre">
						    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
						  </div>

							<div class="form-group">
						    <label for="exampleInputEmail1">Apellido</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" name="apellido" required aria-describedby="emailHelp" placeholder="Apellido">
						    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
						  </div>

							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <label class="input-group-text" for="inputGroupSelect01">Genero</label>
							  </div>
							  <select class="custom-select" id="inputGroupSelect01" name="genero">
							    <option value="F">Femenino</option>
							    <option value="M">Masculino</option>
							  </select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Correo Electrónico</label>
								<input type="email" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp" required placeholder="Correo Electrónico">
								<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
							</div>

						  <div class="form-group">
						    <label for="exampleInputPassword1">Contraseña</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Contraseña">
						  </div>

							<div class="form-group">
								<label for="exampleInputEmail1">Fecha de Nacimiento</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="fecha_nac" required aria-describedby="emailHelp" placeholder="DD/MM/AAAA">
								<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
							</div>

							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroupFileAddon01">Perfil</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagen" required aria-describedby="inputGroupFileAddon01">
							    <label class="custom-file-label" for="inputGroupFile01">Subir una Foto de Perfil</label>
							  </div>
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
