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
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

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
      if(isset($_GET['id_pedido']) && $_GET['id_pedido'] == true) {
    ?>
        <h3>Etiqueta de devolución para pedido <strong><?php print $_GET['id_pedido']?></strong></h3>
        <img src="/images/cosa-promete.jpg" width="300" height="auto" />

        <?php 

          $id_codigo_barras = '123456789012';
          foreach($_GET['articulo'] as $articulo) {
            print '<p>Codigo de la etiqueta para artículo <strong>' . $articulo . '</strong></p>';
            $id_codigo_barras += $articulo * 10;
          }

          print "<img src='sample-gd.php?id=" . $id_codigo_barras . "' />";

        ?>
    <?php
      }
      else {
    ?>
    <form action="/devolucion.php" method="get">
      <p>Este es tu pedido número 007, todavía estás a tiempo de devolverlo</p>
      <div class="md-checkbox">
    <input id="i2" type="checkbox" name="articulo[]" value="01" />
    <label for="i2">Devolver toalla</label>
  </div>
  <div class="md-checkbox">
    <input id="i1" type="checkbox" name="articulo[]" value="02" />
    <label for="i1">Devolver calcetín rosa</label>
  </div>
      <input type="submit" class="btn" value="Devolver pedido" />
      <input type="hidden" id="id_pedido" name="id_pedido" value="007" />
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
