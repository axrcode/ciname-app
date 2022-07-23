<?php
  session_start();
  include('conexion_sis.php');
  if (isset($_POST['enviar_correo'])) {

    $correo = $_POST['correo'];

    $query = "SELECT * FROM usuarios WHERE correo='$correo'";
    $ejecutar = sqlsrv_query($con,$query);

    if($ejecutar == false){
     die( print_r( sqlsrv_errors(), true));
    }

    if(sqlsrv_has_rows($ejecutar) != 1){
      echo "<h3>El usuario NO existe</h3>";
    } else {
      echo "<h3>El usuario existe</h3>";
      while($row = sqlsrv_fetch_array($ejecutar)){


        $amigo = $row['correo'];
        $_SESSION['user_amigo'] = $amigo;
      }
      $correo3 = $_SESSION['usuario_actual'];
      echo $amigo.' '.$correo3;
      ?><form action="insertar_amigo.php" method="POST">
              <input type="submit" name="agregar" value="Agregar"><?php
            ?>
            </form>
            <?php

    }



  }

?>
