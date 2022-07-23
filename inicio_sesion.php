<?php

  include('conexion_sis_DW.php');

  if (isset($_POST['enviar'])) {

    $usuario = $_POST['correo'];
    $password = $_POST['password'];

    session_start();


    $query = "SELECT * FROM usuarios WHERE correo = '$usuario' AND contrasenia = '$password'";
    $query2 = "SELECT * FROM perfil WHERE usuario = '$usuario'";
    $ejecutar = sqlsrv_query($con,$query);//, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    $ejecutar2 = sqlsrv_query($con,$query2);

    if($ejecutar == false){
     die( print_r( sqlsrv_errors(), true));
    }

    if(sqlsrv_has_rows($ejecutar) != 1){
      echo "<h3>Usuario y/o Contraseña Incorrecta</h3>";
    } else {
      while($row = sqlsrv_fetch_array($ejecutar)){

        session_start();
        $correo = $row['correo'];
        $_SESSION['correo'] = $correo;
        $nombre = $row['nombre'];
        $_SESSION['nombre'] = $nombre;
        $apellido = $row['apellido'];
        $_SESSION['apellido'] = $apellido;
        $genero = $row['genero'];
        $_SESSION['genero'] = $genero;
        $password = $row['contrasenia'];
        $_SESSION['password'] = $password;
        $fecha_nac = $row['fecha_nac'];
        $_SESSION['fecha_nac'] = $fecha_nac;
        $foto_perfil = $row['foto_perfil'];
        $_SESSION['foto_perfil'] = $foto_perfil;
      }
      while($row2 = sqlsrv_fetch_array($ejecutar2)) {
        session_start();
        $correo2 = $row2['usuario'];
        $_SESSION['correo2'] = $correo2;
        $direccion = $row2['direccion'];
        $_SESSION['direccion'] = $direccion;
        $estado_civil = $row2['estado_civil'];
        $_SESSION['estado_civil'] = $estado_civil;
        $ocupacion = $row2['ocupacion'];
        $_SESSION['ocupacion'] = $ocupacion;
        $estudios = $row2['estudios'];
        $_SESSION['estudios'] = $estudios;
        $pais = $row2['pais'];
        $_SESSION['pais'] = $pais;
      }
      $_SESSION['usuario_actual'] = $usuario;
      echo "<script>window.open('perfil.php','_self');</script>";
    }
  }
?>
