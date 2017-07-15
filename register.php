<?php session_start(); ?>
<?php
// Esto es para chequear si existe la cookie de cambio de THEME
	if(!empty($_COOKIE['_theme'])) $style = $_COOKIE['_theme'];
	else $style = "style";
?>
<?php
require 'clsValidacion.php';
require 'clsUsuario.php';
require_once('funciones.php');

$usuario = '';
$email = '';

if($_POST) {

	$validar = new Validacion();

	//validamos

	$errores = array();

	if(!$validar->validarEmail($_POST['email'])) {
		$errores[] = 'El email no es valido';
	}

	if(!$validar->validarPassword($_POST['password'])) {
		$errores[] = 'El password no es valido';
	}

	if(!$validar->validarCPassword($_POST['password'],$_POST['cpassword'])) {
		$errores[] = 'El password debe ser igual en los dos campos';
	}

	if(!$validar->validarUsuario($_POST['usuario'])) {
		$errores[] = 'El usuario no es valido';
	}

	if (!isset($errores["email"])) {
			$email = $_POST["email"];
	}
	if (!isset($errores["usuario"])) {
			$usuario = $_POST["usuario"];
	}



	if(empty($errores)) {

		$db = new PDO('mysql:host=localhost;dbname=registro',
						'root',
						'root');

		$usuario = new Usuario($db);

		// $chequearmail = $usuario->existeUsuarioConEsteEmail($_POST['email']);

		$idusuario = $usuario->registrarUsuario($_POST);

    $errores = $usuario->guardarImagen("imgPerfil", $errores);

    $persistir = $usuario->recordarUsuario($_POST['usuario']);

		header('Location:login.php');

		exit;

	}

}
?>


<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biklo – Pedaleá Buenos Aires</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/<?php echo $style ?>.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/registration-forms.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

				<script src="assets/js/gen_validatorv4.js"
						type="text/javascript" xml:space="preserve">
						</script>

    </head>

    <body>

		<!-- Top menu -->
    <?php
    include 'topnav.php';
    ?>

    <!-- Registration Form -->
    <div class="r-form-1-container section-container section-container-image-bg">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 r-form-1 section-description wow fadeIn">
                      <h2><strong>Pedaleá con nosotros</strong> y mirá el mundo estando en dos ruedas</h2>
                      <div class="divider-1 wow fadeInUp"><span></span></div>
                      <p>Sumate a nuestra comunidad y enterate de todas las noticias relacionadas el mundo del ciclismo; actividades y consejos de seguridad sobre esta hermosa actividad.</p>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp">

                      <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                          <h3>Hacete miembro</h3>
                            <p>¡Llená el formulario y a pedalear!</p>
                            <?php if(!empty($_POST)) { ?>
                              <ul>
                                  <?php foreach($errores as $e) { ?>
                                    <li>
                                      <?php echo $e . "<br>"; ?>
                                    </li>
                                  <?php } ?>
                              </ul>
                            <?php } ?>

                        </div>
                        <div class="r-form-1-top-right">
                          <i class="fa fa-pencil"></i>
                        </div>
                        </div>
                        <div class="r-form-1-bottom">
                        <form role="form" action="" method="post" enctype="multipart/form-data" id='myform'>
                          <div class="form-group">
                            <label class="sr-only" for="usuario">Nombre de usuario</label>
                              <input type="text" name="usuario" placeholder="Nombre de usuario" class="r-form-1-first-name form-control" id="usuario" value="<?=$usuario?>">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="email">Email</label>
                              <input type="text" name="email" placeholder="Email" class="r-form-1-email form-control" id="email" value="<?=$email?>">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="r-form-1-password">Contraseña</label>
                                <input type="password" name="password" placeholder="Contraseña" class="r-form-1-password form-control" id="password">
                              </div>

                              <div class="form-group">
                                <label class="sr-only" for="cpassword">Repetí la contraseña</label>
                                  <input type="password" name="cpassword" placeholder="Repetí la contraseña" class="r-form-1-repeat-password form-control" id="cpassword">
                                </div>

                                <div class="form-group">
                                  <label class="" for="imgPerfil">Subí una imagen de perfil</label>

                                    <input type="file" name="imgPerfil" placeholder="Subí una imagen de perfil" style="line-height:normal; display:inline;" id="imgPerfil">
                                </div>


                            <button type="submit" class="btn" name="enviar" value="Enviar">Enviar</button>
                        </form>


												<!-- Validación Javascrip! -->

												<script language="JavaScript" type="text/javascript" xml:space="preserve">

													var frmvalidator  = new Validator("myform");

													frmvalidator.EnableMsgsTogether();
													frmvalidator.addValidation("usuario","req","El nombre de usuario es o b l i g a t o r i o");
													frmvalidator.addValidation("usuario","maxlen=20",	"El nombre de usuario debe tener máximo 20 caracteres");
													frmvalidator.addValidation("usuario","minlen=6",	"El nombre de usuario debe tener mínimo 6 caracteres");

													frmvalidator.addValidation("email","maxlen=50");
													frmvalidator.addValidation("email","req","El email es o b l i g a t o r i o");
													frmvalidator.addValidation("email","email","El email es inválido");

													frmvalidator.addValidation("password","req",	"La contraseña es o b l i g a t o r i a");
													frmvalidator.addValidation("password","minlen=8",	"La contraseña debe tener mínino 8 caracteres");

													frmvalidator.addValidation("cpassword","eqelmnt=password","Las dos contraseñas tienen que ser iguales");

												</script>





                      </div>

                  </div>
              </div>
          </div>
        </div>

        <!-- Features -->
        <?php
        include 'features.php';
        ?>

        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>

        <!-- MODAL: Frequent questions -->
        <?php
        include 'faq.php';
        ?>



        <!-- Javascript -->


        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script src="assets/js/registration-forms.js"></script>
                <!-- Javascript -->

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
