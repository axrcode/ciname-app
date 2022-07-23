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
          <form class="" action="agregar_amigo.php" method="POST">

            <br>
            <ul class="list-unstyled">
              <li class="media">
                <!--<img src="..." class="mr-3" alt="...">-->
                <div class="media-body">
                  <div class="alert alert-info" role="alert" align="center">Buscar Amigo</div>
                </div>
              </li>

              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar un amigo con su Correo" name="correo" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <input class="btn btn-outline-secondary" type="submit" name="enviar_correo" value="Buscar">
                </div>
              </div>

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

  </div>


</body>
</html>
