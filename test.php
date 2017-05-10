<?php
  require_once("funciones.php");
  traerTodos();
  $paises = [
    "Ar" => "Argentina",
    "Br" => "Brasil",
    "Co" => "Colombia",
    "Fr" => "Francia"
  ];

  $nombre = "";
  $usuario = "";
  $edad ="";
  $mail = "";


  $errores = [];

  if ($_POST) {
    // Estoy en post y valido
    $errores = validarInformacion($_POST);

    if (count($errores) == 0) {
      // No hay errores
      $errores = guardarImagen("imgPerfil", $errores);
      if (count($errores) == 0) {
        $usuario = crearUsuario($_POST);
        guardarUsuario($usuario);
        header("Location:felicidad.php");exit;
      }
    }

    if (!isset($errores["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    if (!isset($errores["edad"])) {
        $edad = $_POST["edad"];
    }
    if (!isset($errores["mail"])) {
        $mail = $_POST["mail"];
    }
    if (!isset($errores["usuario"])) {
        $usuario = $_POST["usuario"];
    }



  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

    <?php if(count($errores) > 0) { ?>
      <ul>
          <?php foreach($errores as $error) { ?>
            <li>
              <?=$error?>
            </li>
          <?php } ?>
      </ul>
    <?php } ?>
    <form class="" action="test.php" method="post" enctype="multipart/form-data">
      <div class="">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?=$nombre?>">
        <?php if (isset($errores["nombre"])) { ?>
          <span style="color:red">ERROR</span>
        <?php } ?>
      </div>
      <div class="">
        <label>Usuario:</label>
        <?php if(isset($errores["usuario"])) {
          $errorEnUsuario = "error";
        }
        else {
          $errorEnUsuario = "";
        } ?>
        <input class="<?=$errorEnUsuario?>" type="text" name="usuario" value="<?=$usuario?>">
      </div>
      <div class="">
        <label>Mail:</label>
        <input type="text" name="mail" value="<?=$mail?>">
      </div>
      <div class="">
        <label>Edad:</label>
        <input type="text" name="edad" value="<?=$edad?>">
      </div>
      <div class="">
        <label>Contraseña:</label>
        <input type="password" name="password" value="">
      </div>
      <?php if(!isset($_GET["versioncorta"])) { ?>
        <div class="">
          <label>Confirmar contraseña:</label>
          <input type="password" name="cpassword" value="">
        </div>
      <?php } ?>
      <div class="">
        <label for="">Paises</label>
        <select class="" name="pais">
          <?php
          $paises = [
            "Ar" => "Argentina",
            "Br" => "Brasil",
            "Co" => "Colombia",
            "Fr" => "Francia"
          ];
          foreach($paises as $codigo => $pais) { ?>
            <?php if($codigo == $_POST["pais"]) { ?>
              <option value="<?=$codigo?>" selected>
                <?=$pais?>
              </option>
            <?php } else { ?>
              <option value="<?=$codigo?>">
                <?=$pais?>
              </option>
            <?php } ?>
          <?php } ?>
        </select>
      </div>
      <div class="">
        <label for="">Imagen de perfil:</label>
        <input type="file" name="imgPerfil" value="">
      </div>
      <div class="">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>

    <!-- <?php print_r(traerTodos()); ?> -->
  </body>
</html>
