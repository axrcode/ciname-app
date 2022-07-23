<?php
  session_start();
  //$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  //$bulk = new MongoDB\Driver\BulkWrite;

  include('conexion_sis.php');
  include('conexion_sis_nosql.php');
  if (isset($_POST['agregar'])) {

    $usuario_solicita = $_SESSION['usuario_actual'];
    $usuario_destino = $_SESSION['user_amigo'];

    echo "S: ".$usuario_solicita."D: ".$usuario_destino;

    // INSERTAR EN MONGO
    //$document = ['usuario_solicita'=>$usuario_solicita, 'usuario_destino'=>$usuario_destino, 'estado_solicitud'=>'P'];

    // INSERTAR EN SQL
    $query12 = "INSERT INTO solicitudes(usuario_solicita,usuario_destino,estado_solicitud)
              VALUES('$usuario_solicita','$usuario_destino','P')";

    // EJECUTAR SQL
    $insertar1 = sqlsrv_query($con,$query12);
    $insertar1_nosql = sqlsrv_query($con_nosql,$query12);
    // EJECUTAR MONGO
    //$bulk -> insert($document);
    //$manager -> executeBulkWrite('EquipoDinamita.solicitudes', $bulk);

    if ($insertar1 && $insertar1_nosql) {
        echo "INSERTADO";
    } else {
      echo "ERROR";
    } ?>
    <a href="perfil.php">IR AL PERFIL</a>
    <?php
  }

?>
