<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Formulando...</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">
    </a>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Formularios</h1>
      <div class="row center">
        <h5 class="header col s12 light">A mi me daban dos</h5>
      </div>

    </div>
  </div>


  <div class="container">
    <?php
      if(isset($_POST['ataque']) && $_POST['ataque'] == true) {
        print '<p>Veo que lo has enviado por POST, te lo voy a cambiar a GET</p>';
        $_GET = $_POST;
      }
      if(isset($_GET['ataque']) && $_GET['ataque'] == true) {
    ?>
        <h3>BAAABOOOOOOOMMM.</h3>
        <img src="/images/cosa-arde.jpeg" />
        <h4>Atacando a <strong><?php print $_GET['pais']?><strong></h4>
        <p>Ahora pasemos a las <a href="/devolucion.php">cosas serias</a></p>
    <?php
      }
      else {
    ?>
    <form action="/index.php" method="get">
      <p>Hemos detectado que no tienes los permisos para lanzar un ataque nuclear</p>
      <p>Por nuestra seguridad hemos desactivado el botón de lanzamiento.</p>
      País a atacar: <input type="text" disabled name="pais" required />
      <input type="submit" class="btn" disabled value="Lanzar misiles" />
      <input type="hidden" id="ataque" name="ataque" value="false" />
    </form>

    <?php
      }
    ?>
  </div>

  <footer class="page-footer orange">
    <div class="container">
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
