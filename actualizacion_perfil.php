<?php
  include('conexion_sis.php');
  include('conexion_sis_nosql.php');
  if (isset($_POST['enviar'])) {

    $direccion =  $_POST['direccion'];
    $pais = $_POST['pais'];
    $estado_civil = $_POST['estado_civil'];
    $estudios = $_POST['estudios'];
    $ocupacion = $_POST['ocupacion'];


    if ($direccion == "") {
      $direccion = "Sin Especificar";
    }

    if ($pais == "") {
      $pais = "Sin Especificar";
    }

    if ($estado_civil == "") {
      $estado_civil = "Sin Especificar";
    }

    if ($estudios == "") {
      $estudios = "Sin Especificar";
    }

    if ($ocupacion == ""){
        $ocupacion = "Sin Especificar";
    }

    session_start();
    $correo = $_SESSION['correo'];
    echo $direccion." - ".$estado_civil." CC ".$_SESSION['correo'];

    $actualizar = "UPDATE perfil
                   SET direccion='$direccion', pais='$pais', estado_civil='$estado_civil', estudios='$estudios', ocupacion='$ocupacion'
                   WHERE usuario='$correo'";
    $ejecutar = sqlsrv_query($con,$actualizar);
    $ejecutar_nosql = sqlsrv_query($con_nosql,$actualizar);


    if ($ejecutar && $ejecutar_nosql) {
      echo "Se actualizo";
    } else {
      echo "No se actualizo";
    }

    ?> <a href="perfil.php">IR AL PERFIL</a> <?php


  }

?>
