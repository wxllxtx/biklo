<?php
  function validarInformacion($informacion) {
    $errores = [];

    // $nombre = trim($informacion["nombre"]);
    //
    // if (strlen($nombre) == 0) {
    //   $errores["nombre"] = "Che, no pusiste el nombre :(";
    // }

    $usuario = trim($informacion["usuario"]);

    if (strlen($usuario) < 7) {
      $errores["usuario"] = "El usuario debe tener más de 7 caracteres";
    }

    $mail = trim($informacion["mail"]);

    if (strlen($mail) == 0) {
      $errores["mail"] = "Che, no pusiste el mail :(";
    } else if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $errores["mail"] = "El mail debe ser un mail";
    } else if (buscarPorMail($mail) != false) {
      $errores["mail"] = "El mail ya existe";
    }

    // $edad = trim($informacion["edad"]);
    // if (!is_numeric($edad)) {
    //   $errores["edad"] = "Tu edad debe ser un número";
    // }

    if ($informacion["password"] == "") {
      $errores["password"] = "Llena la contraseña";
    }
    if ($informacion["cpassword"] == "") {
      $errores["cpassword"] = "Confirmá tu contraseña";
    }
    if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
      $errores["password"] = "Las dos contraseñas deben ser iguales";
    }

    return $errores;
  }

  function guardarImagen($unaImagen, $errores) {
		if ($_FILES[$unaImagen]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES[$unaImagen]["name"];
			$archivo=$_FILES[$unaImagen]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);
      if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
  			$miArchivo = dirname(__FILE__);
  			$miArchivo = $miArchivo . "/assets/img/avatars/";
  			$miArchivo = $miArchivo . $_POST["usuario"] . "." . $ext;
  			move_uploaded_file($archivo, $miArchivo);
      }
      else {
        $errores["imgPerfil"] = "Ey, subi una foto. No cualquier cosa";
      }
		} else {
      //Acá hay error
      $errores["imgPerfil"] = "No se pudo subir la foto :(";
    }
    return $errores;
	}

  function guardarUsuario($usuario) {
    $json = json_encode($usuario);

    $json = $json . PHP_EOL; // agrega enter / separa por enter

	// escribimos en el archivo / lo que obtuvimos / en el final del archivo
    file_put_contents("usuarios.json", $json, FILE_APPEND);
  }

  function crearUsuario($datos) {
    $usuario = [
      // "nombre" => $datos["nombre"],
      "usuario" => $datos["usuario"],
      "mail" => $datos["mail"],
      // "edad" => $datos["edad"],
      // "pais" => $datos["pais"],
      "password" => password_hash($datos["password"], PASSWORD_DEFAULT)
    ];

    $usuario["id"] = traerNuevoId();

    return $usuario;
  }

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

  function traerNuevoId() {
    $usuarios = traerTodos();

    if (count($usuarios) == 0) {
      return 1;
    }

    $elUltimo = array_pop($usuarios);

    $id = $elUltimo["id"];

    return $id + 1;
  }

  function buscarPorMail($mail) {
    $todos = traerTodos();

    foreach ($todos as $usuario) {
      if ($usuario["mail"] == $mail) {
        return $usuario;
      }
    }

    return false;
  }

  function logeo($user, $clave) {
      //esto trae los usuarios
      $todos = traerTodos();
      //$clave = password_hash($clave, PASSWORD_DEFAULT);
      //revisar usuario por usuario
    foreach ($todos as $usuario) {
      if ($usuario["usuario"] == $user && password_verify($clave, $usuario["password"])) {
        session_start();
        $_SESSION['usuario']=$usuario["usuario"];
        header('location:index.php');
      }
    }

  }

?>
