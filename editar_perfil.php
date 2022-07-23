<!DOCTYPE html>

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

  <div class="container">
    <div class="row">

      <div class="col">
        <form class="" action="actualizacion_perfil.php" method="POST">
          <br><input type="submit" class="btn btn-info btn-lg btn-block" name="enviar" value="GUARDAR CAMBIOS"><br>

          <ul class="list-unstyled">
            <li class="media">
              <!--<img src="..." class="mr-3" alt="...">-->
              <div class="media-body">
                <div class="alert alert-info" role="alert">Perfil de <?php session_start(); echo $_SESSION['nombre']." ".$_SESSION['apellido'];?></div>
              </div>
            </li>

            <li class="media">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Dirección</span>
                </div>
                <input type="text" class="form-control" placeholder="Dirección" name="direccion" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </li>

            <li class="media">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Pais</span>
                </div>
                <input type="text" class="form-control" placeholder="Pais" name="pais" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </li>

            <li class="media">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Estado Civil</span>
                </div>
                <input type="text" class="form-control" placeholder="Estado Civil" name="estado_civil" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </li>

            <li class="media">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Estudios</span>
                </div>
                <input type="text" class="form-control" placeholder="Estudios" name="estudios" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </li>

            <li class="media">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Ocupación</span>
                </div>
                <input type="text" class="form-control" placeholder="Ocupación" name="ocupacion" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </li>
            <?php $_SESSION['correo'] ?>
          </ul>
        </form>
      </div>
    </div>
    <div class="row">
      <footer>
        <br><p>@EquipoDinamita, Copyrigth &copy; 2019</p>
      </footer>
    </div>
  </div>

</body>
</html>
