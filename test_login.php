<?php

  require_once("funciones.php");


  if ($_POST) {
    logeo($_POST["usuario"], $_POST["password"]);
  }
  // if (isset($_POST["usuario"])) {
  //     $usuario = $_POST["usuario"];
  // }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>


    <form class="" action="" method="post" enctype="multipart/form-data">

      <div class="">
        <label>Usuario:</label>

        <input type="text" name="usuario" value="<?=(isset($_POST["usuario"]))?$_POST["usuario"]:'';?>">
      </div>

      <div class="">
        <label>Contraseña:</label>
        <input type="password" name="password" value="">
      </div>
      <div class="">
        <label>Recordar contraseña</label>
        <input type="checkbox" name="recordar" value="">
      </div>
      <div class="">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>
    <div class="">
      <p><a href="#">¿Te olvidaste la contraseña?</a></p>
    </div>

    <!-- <?php print_r(traerTodos()); ?> -->
  </body>
</html>
