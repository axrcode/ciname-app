<!DOCTYPE html>

<?php include('inicio_sesion.php'); ?>
<html>
<head>
  <title>Perfil</title>
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
          <a class="navbar-brand" href="perfil.php">Perfil</a>
          <a class="navbar-brand" href="amigos.php">Amigos</a>
          <a class="navbar-brand" href="solicitudes.php">Solicitudes</a>
          <a class="navbar-brand" href="publicaciones.php">Publicaciones</a>
          <a class="navbar-brand" href="intereses.php">Intereses</a>
          <a class="navbar-brand" href="index.php">Cerrar Sesión</a>
        </a>
      </nav>

    </header>

    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col">
            <br>
            <div class="card" style="width: 18rem;">
              <?php session_start(); ob_start(); ?>
              <img src="img/perfil.jpg" class="card-img-top" width="100" height="300" alt="...">
              <div class="card-body">
                <h1 class="card-title"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido'];?></h1>
                <span class="badge badge-info"><?php echo $_SESSION['genero'];?></span>
                <p class="card-text"><?php echo $_SESSION['fecha_nac']."<br>".$_SESSION['correo'];?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <form class="" action="editar_perfil.php" method="POST">
              <br><input type="submit" class="btn btn-info btn-lg btn-block" name="editar_perfil" value="EDITAR PERFIL"><br>
            </form>

              <ul class="list-unstyled">
                <li class="media">
                  <!--<img src="..." class="mr-3" alt="...">-->
                  <div class="media-body">
                    <div class="alert alert-info" role="alert">Perfil de <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'];?></div>
                  </div>
                </li>
                <li class="media">

                  <div class="alert alert-dark" role="alert">Dirección</div>
                  <div class="alert alert-light" role="alert"><?php echo $_SESSION['direccion']; ?></div>
                </li>
                <li class="media">

                  <div class="alert alert-dark" role="alert">País</div>
                  <div class="alert alert-light" role="alert"><?php echo $_SESSION['pais']; ?></div>
                </li>
                <li class="media">

                  <div class="alert alert-dark" role="alert">Estado Civil</div>
                  <div class="alert alert-light" role="alert"><?php echo $_SESSION['estado_civil']; ?></div>
                </li>
                <li class="media">

                  <div class="alert alert-dark" role="alert">Estudios</div>
                  <div class="alert alert-light" role="alert"><?php echo $_SESSION['estudios']; ?></div>
                </li>
                <li class="media">

                  <div class="alert alert-dark" role="alert">Ocupación</div>
                  <div class="alert alert-light" role="alert"><?php echo $_SESSION['ocupacion']; ?></div>
                </li>
              </ul>

          </div>
        </div>
        <div class="row">
          <footer>
            <br><p>@EquipoDinamita, Copyrigth &copy; 2019</p>
          </footer>
        </div>
      </div>



    </div>
  </div>

</body>
</html>
