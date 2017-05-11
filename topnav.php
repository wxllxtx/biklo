


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

        <?= (!isset($_SESSION['usuario']) ? '<li><a class="" href="register.php">Registrate</a></li>':''); ?>
        <li><a class="scroll-link" href="#features">Nuestra Comunidad</a></li>
        <li><a href="#" class="launch-modal" data-modal-id="modal-faq">Preguntas Frecuentes</a></li>



        <?= (!isset($_SESSION['usuario']) ? '<li><a class="btn btn-link-2" href="login.php">Iniciá Sesión</a></li>':''); ?>

        <?= (isset($_SESSION['usuario']) ? '<li style="padding:10px 15px;">Hola <strong>'.$_SESSION['usuario'].'</strong>!</li>':''); ?>

        <?= (isset($_SESSION['usuario']) ? '<li><a class="" href="logout.php">Cerrar sesión</a></li>':''); ?>


      </ul>
    </div>
  </div>

</nav>
