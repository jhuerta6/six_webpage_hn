<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>hn_01</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <style>
  #iris {
    background-image: url("url('http://tutorial45.com/wp-content/uploads/2015/06/3d-rectangle2.png?x61285');");
    background-repeat: no-repeat;
    height: 100vh;
    background-size: cover;
  }
  </style>
</head>
<header>

</header>
<main>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <div class="container">
      <!--logo-->
      <div class="row">
        <div class="col s12 center-align">
          <img class="responsive-img" src="http://valvearg.com/w/images/f/f9/Portal-2-logo.png">
        </div>
      </div>
      <!-- end logo-->
      <!--navbar-->
      <div class="row">
        <div class="col s12 center-align">
          <nav class="nav-extended">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo center">Nombre/Logo<i id="motito" class="material-icons right hide-on-small-only">directions_bike</i></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <i class="material-icons">e</i>
                <!--<li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li> -->
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Motocicletas</a></li>
                <li><a href="collapsible.html">Accesorios </a></li>
                <li><a href="collapsible.html">Contacto</a></li>
              </ul>
              <div id="tabs" class="nav-content hide-on-med-and-down ">
                <ul class="tabs tabs-transparent tabs-fixed-width">
                  <li class="tab s6"><a href="#test1">INICIO</a></li>
                  <li class="tab s6"><a href="#test2">MOTOCICLETAS</a></li>
                  <li class="tab s6"><a href="#test2">ACCESORIOS</a></li>
                  <li class="tab s6"><a href="#test2">CONTACTANOS</a></li>
                </ul>
              </div>
            </nav>

          </div>
        </div>
        <!-- end navbar-->
        <!--videos-->
        <div class="row">
          <div class="col s3 center-align">
            <img class="responsive-img" style="width: 250px; height: 400px;" src="http://tutorial45.com/wp-content/uploads/2015/06/3d-rectangle2.png?x61285">
          </div>
          <div class="col s3 center-align">
            <img class="responsive-img" style="width: 250px; height: 400px;" src="http://tutorial45.com/wp-content/uploads/2015/06/3d-rectangle2.png?x61285">
          </div>
          <div class="col s3 center-align">
            <img class="responsive-img" style="width: 250px; height: 400px;" src="http://tutorial45.com/wp-content/uploads/2015/06/3d-rectangle2.png?x61285">
          </div>
          <div class="col s3 center-align">
            <img class="responsive-img" style="width: 250px; height: 400px;" src="http://tutorial45.com/wp-content/uploads/2015/06/3d-rectangle2.png?x61285">
          </div>
        </div>
        <!-- end videos-->
      </div>
      <!--<div class="container"> -->
    </body>

    <script>
    $(document).ready(function(){
      $('ul.tabs').tabs();
      $(".button-collapse").sideNav();

    });
    </script>

  </main>
  <footer>
  </footer>
  </html>
