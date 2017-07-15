<?php
$dsn = 'mysql:host=localhost;dbname=registro';
$nombre_usuario = 'root';
$contraseña = 'root';
$db = new PDO($dsn, $nombre_usuario, $contraseña);

$result = $db->query("SELECT * FROM usuarios");
$provincias = $result->fetchAll();

$result = count($provincias);

echo $result;

?>
