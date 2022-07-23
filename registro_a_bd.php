<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <title></title>
  </head>

<?php

  //$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  //$bulk = new MongoDB\Driver\BulkWrite;

  include("conexion_sis.php");
  include("conexion_sis_nosql.php");

  session_start();
  if (isset($_POST['enviar'])) {
    if (isset($_FILES['imagen'])) {
        $ruta = "imagenes";

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero = $_POST['genero'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $fecha_nac = $_POST['fecha_nac'];
    	  $foto_perfil = $_FILES['imagen']['tmp_name'];

        // INSERTAR EN SQL
        $insertar_usuarios = "INSERT INTO usuarios(correo,nombre,apellido,genero,contrasenia,fecha_nac,foto_perfil)
                              VALUES('$correo','$nombre','$apellido','$genero','$password','$fecha_nac','$foto_perfil')";

        $creando_perfil = "INSERT INTO perfil(usuario,direccion,pais,estado_civil,estudios,ocupacion)
                           VALUES('$correo','Sin Especificar','Sin Especificar','Sin Especificar','Sin Especificar','Sin Especificar')";

        // INSERTAR EN MONGO
        //$document = ['correo'=>$correo, 'nombre'=>$nombre, 'apellido'=>$apellido, 'genero'=>$genero, 'contrasenia'=>$password, 'fecha_nac'=>$fecha_nac, 'foto_perfil'=>$foto_perfil];

        // EJECUTAR EN SQL
        $ejecutar = sqlsrv_query($con,$insertar_usuarios);
        $ejecutar2 = sqlsrv_query($con,$creando_perfil);

        $ejecutar_nosql = sqlsrv_query($con_nosql,$insertar_usuarios);
        $ejecutar2_nosql = sqlsrv_query($con_nosql,$creando_perfil);

        // EJECUTAR EN MONGO
        //$bulk -> insert($document);
        //$manager -> executeBulkWrite('EquipoDinamita.usuarios', $bulk);

        if ($ejecutar && $ejecutar2 && $ejecutar_nosql && $ejecutar2_nosql) { ?>
          <body>

            <nav class="navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Equipo Dinamita
              </a>
            </nav> <br>
            <div class="container">
              <div class="alert alert-success" role="alert">
                Datos guardados correctamente en el Sistema
              </div> <br>

              <form class="" action="inicio.php" method="POST">
                <div class="jumbotron">
                  <h1 class="display-4">¡BIENVENIDO!</h1>
                  <p class="lead"> Su usuario fue registrado en nuestra Red Social <br> Para terminar el proceso, inicie sesión con su correo y contraseña</p>
                  <hr class="my-4">
                  <p> Cargando el Perfil de <?php
                  echo $nombre." ".$apellido;
                  ?> </p>
                  <div class="spinner-grow text-secondary" role="status" aria-hidden="true"></div>
                  <div class="spinner-grow text-dark" role="status" aria-hidden="true"></div>
                  <div class="spinner-grow text-secondary" role="status" aria-hidden="true"></div>
                  <div class="spinner-grow text-dark" role="status" aria-hidden="true"></div>
                  <div class="container">

                    <br><a class="btn btn-primary btn-lg" href="index.php">Iniciar Sesión</a>
                  </div>
                </div>
              </form>
            </div>
          </body>

          <?php
          //echo '<a class="navbar-brand" href="perfil.php">Ir al Perfil</a>';
        } else {
          echo "<h3>Error al Guardar Datos</h3>";
        }
    }
  }

?>
</html>
