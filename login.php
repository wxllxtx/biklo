<?php if (isset($_SESSION['usuario'])) {
  session_start();
}?>
<?php

  require_once("funciones.php");

  if ($_POST) {
    if (isset($_POST["recordar"])) {
      recordarUsuario($_POST["recordar"]);
    };
    logeo($_POST["usuario"], $_POST["password"]);
  }

  // if ($_POST) {
  //   print_r($_POST);
  // }

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
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/login-forms.css">
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

    </head>

    <body>

		<!-- Top menu -->
    <?php
    include 'topnav.php';
    ?>

    <!-- Login Form -->
    <div class="l-form-1-container section-container section-container-image-bg">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 l-form-1 section-description wow fadeIn">
                      <h2><strong>Pedaleá con nosotros</strong> y mirá el mundo estando en dos ruedas</h2>
                      <div class="divider-1 wow fadeInUp"><span></span></div>
                      <p>Sumate a nuestra comunidad y enterate de todas las noticias relacionadas el mundo del ciclismo; actividades y consejos de seguridad sobre esta hermosa actividad.</p>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3 l-form-1-box wow fadeInUp">

                      <div class="l-form-1-top">
                        <div class="l-form-1-top-left">
                          <h3>Logueate</h3>
                <p>Ingresá con tu usuario</p>
                <?php
                if (!empty($_SESSION['usuario']) ){
                echo  'Usuario o contraseña invalidos';
                }
                 ?>
                        </div>
                        <div class="l-form-1-top-right">
                          <i class="fa fa-lock"></i>
                        </div>
                        </div>
                        <div class="l-form-1-bottom">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                            <label class="sr-only" for="usuario">Usuario</label>
                              <input type="text" name="usuario" placeholder="Usuario" class="l-form-1-username form-control" id="usuario" value="<?= (isset($_COOKIE["recordar"]) ? $_COOKIE["recordar"]:''); ?>">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="password">Contraseña</label>
                              <input type="password" name="password" placeholder="Contraseña" class="l-form-1-password form-control" id="password">
                            </div>
                            <div class="form-group">
                              <label class="checkbox-inline">
  						                	<span style="line-height: 24px;"><input type="checkbox" name="recordar"> Recordar usuario </span>
  						                </label>
                            </div>

                            <button type="submit" class="btn">¡Entrar!</button>
                        </form>
                      </div>

                  </div>
              </div>
              <!-- <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 l-form-1-social-login">
                      <h3>...or login with:</h3>
                      <div class="l-form-1-social-login-buttons">
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-facebook"></i> Facebook
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-twitter"></i> Twitter
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-google-plus"></i> Google Plus
                          </a>
                      </div>
                    </div>
                </div> -->
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
        <script src="assets/js/login-forms.js"></script>
        <!-- Javascript -->

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
