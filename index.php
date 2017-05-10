<!DOCTYPE html>
<html lang="en">


<!-- Hola que tal -->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biklo – Pedaleá Buenos Aires</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,300,300i,400,400i,500,500i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

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
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Biklo</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">

						<li><a class="" href="register.php">Registrate</a></li>

						<li><a class="scroll-link" href="#features">Nuestra Comunidad</a></li>
						<li><a href="#" class="launch-modal" data-modal-id="modal-faq">Preguntas Frecuentes</a></li>
            <li><a class="btn btn-link-2" href="login.php">Iniciá Sesión</a></li>
					</ul>
				</div>
			</div>

    </nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1 class="wow fadeInLeftBig"><strong>Pedaleá Buenos Aires</strong></h1>
                            <div class="description wow fadeInLeftBig">
                            	<p>
	                            	Si andás en bici por Buenos Aires, ¡bienvenido!
                            	</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
	                	<div class="col-sm-8 col-sm-offset-2 top-buttons wow fadeInUp">
	                		<a class="btn btn-link-3" href="login.html">Iniciá Sesión <i class="fa fa-sign-in" aria-hidden="true"></i></i></a>
	                		<a href="register.html" class="btn btn-link-3">Registrate <i class="fa fa-pencil" aria-hidden="true"></i></a>
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

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
