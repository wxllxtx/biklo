<?php

function traerTodos() {
  // Leo el archivo
  $archivo = file_get_contents("usuarios.json");

  // Lo divido por enters
  $usuariosJSON = explode(PHP_EOL, $archivo);
  // Quito el enter del final
  array_pop($usuariosJSON);

  $usuariosFinal = [];

  // Y CADA LINEA LA CONVIERTO DE JSON A ARRAY
  foreach($usuariosJSON as $json) {
    $usuariosFinal[] = json_decode($json, true);
  }

  return $usuariosFinal;
}

$jsonarray = traerTodos();

// print_r($jsonarray);

$db = new PDO('mysql:host=localhost;dbname=registro',
        'root',
        'root');


for ($i = 0; $i < count($jsonarray); $i++) {
  $sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('".$jsonarray[$i]['usuario']."','".$jsonarray[$i]['email']."','".$jsonarray[$i]['password']."')";
  $db->query($sql);
        }

 ?>
