<?php

class Usuario {


	public $email;
	public $password;
	public $usuario;

	public $db;

	public function __construct($db) {

		$this->db = $db;

	}

	public function existeUsuarioConEsteEmail($e) {

		$sql = "SELECT * FROM usuarios WHERE email = '".$e."'";

		$this->db->query($sql);
		return $this->db->fetchColumn();
	}

	public function registrarUsuario($arr) {


		$sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('".$arr['usuario']."','".$arr['email']."','".md5($arr['password'])."')";

		$this->db->query($sql);

		return $this->db->lastInsertId();
	}

	public function logeo($arr){
		$sql = "SELECT id, usuario, email FROM usuarios
		 WHERE usuario = '".$arr['usuario']."'
		 and password = '".md5($arr['password'])."'";
		 //echo $sql;
		$result = $this->db->query($sql);
		$usuario = $result->fetch(PDO::FETCH_ASSOC);
		// print_r($usuario);

		if($usuario){
			session_start();
			$_SESSION['usuario']=$usuario['usuario'];
			$_SESSION['email']=$usuario['email'];
			$_SESSION['id']=$usuario['id'];
			setcookie("recordar", $usuario['usuario']);
			header('location:index.php');
			exit();
		}else{
			// retorno error y muestro en el formulario.
		}

	}

	public function guardarImagen($unaImagen, $errores) {
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

				// Para agregar el nombre de la imagen a la base de datos
				$nombreImagen = "/assets/img/avatars/" . $_POST["usuario"] . "." . $ext;

				$last_id = $this->db->lastInsertId();

				$sql = "UPDATE usuarios SET avatar='$nombreImagen' WHERE id='$last_id'";

				$this->db->query($sql);

			}
			else {
				$errores["imgPerfil"] = "Ey, subi una foto. No cualquier cosa";
			}
		}

		// else {
		//   //Acá hay error
		//   $errores["imgPerfil"] = "No se pudo subir la foto :(";
		// }
		return $errores;
	}

	public function recordarUsuario ($user) {
	  setcookie("recordar", $user);
	}


}
