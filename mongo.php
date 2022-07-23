<?php

  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $bulk = new MongoDB\Driver\BulkWrite;

  $document = ['codigo' => '12', 'nombre' => 'Axel', 'categoria' => 'Hola'];

  $bulk -> insert($document);

  $manager -> executeBulkWrite('EquipoDinamita.usuarios', $bulk);

?>
