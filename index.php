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
  body {
    background-image: url("./res/inicio/Fondo.jpg");
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
          <!--<img class="responsive-img" src="http://valvearg.com/w/images/f/f9/Portal-2-logo.png"> -->
          <img class="responsive-img" src="./res/SixSpeedPerfilEditable.png">
        </div>
      </div>
      <!-- end logo-->
      <!--navbar-->
      <div class="row">
        <div class="col s12 center-align">
          <nav>
            <div class="nav-wrapper black">
              <!--<a href="#!" class="brand-logo center">Nombre/Logo<i id="motito" class="material-icons right hide-on-small-only">directions_bike</i></a>-->
               <a href="#!" class="brand-logo center"><i id="motito" class="material-icons right hide-on-small-only">directions_bike</i></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <!--<ul id="nav-mobile" class="right hide-on-med-and-down">
                <i class="material-icons">e</i>
                <!--<li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li> -->
              <!--</ul> -->
              <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Motocicletas</a></li>
                <li><a href="collapsible.html">Accesorios </a></li>
                <li><a href="collapsible.html">Contacto</a></li>
              </ul>
            </div>

            </nav>
          <!--</div> -->
        </div>
      </div>
      <div class="row">
        <div class="col s12 center-align">
          <div id="tabs" class="nav-content hide-on-med-and-down black white-text z-depth-3">
            <ul class="tabs tabs-transparent tabs-fixed-width">
              <li class="tab s6"><a href="#test1">INICIO</a></li>
              <li class="tab s6"><a href="#test2">MOTOCICLETAS</a></li>
              <li class="tab s6"><a href="#test2">ACCESORIOS</a></li>
              <li class="tab s6"><a href="#test2">CONTACTANOS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end navbar-->
      <!--videos-->
      <div class="row">
        <div class="col s3 center-align">
          <img class="responsive-img" style="width: 200px; height: 400px;" src="./res/inicio/Accesorios.jpg">
        </div>
        <div class="col s3 center-align">
          <img class="responsive-img" style="width: 200px; height: 400px;" src="./res/inicio/Contacto.jpg">
        </div>
        <div class="col s3 center-align">
          <img class="responsive-img" style="width: 200px; height: 400px;" src="./res/inicio/Motos.jpg">
        </div>
        <div class="col s3 center-align">
          <img class="responsive-img" style="width: 200px; height: 400px;" src="./res/inicio/Piezas.jpg">
        </div>
      </div>
      <!-- end videos-->

      <div class="row">
        <div class="col s8 center-align">
          <!--<div class="row">
            <p> [lo nuevo, beta] </p>
          </div> -->
          <div class="row">
            <div class="parallax-container">
              <div class="section no-pad-bot">
                <br><br><br><br><br>
                <h1 class="header center deep-orange-text"> HAZ EL CAMBIO </h1>
              </div>
              <div class="parallax"><img src="https://i.kinja-img.com/gawker-media/image/upload/s--8I7vyIBo--/c_scale,f_auto,fl_progressive,q_80,w_800/axsyikcccol6ergc9k9l.jpg"></div>
            </div>
          </div>
        </div>
        <div class="col s3 center-align">
          <!--<p> [facebook embed] </p>-->
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
      </div>
      <!--<div class="container"> -->
    </body>

    <script>
    $(document).ready(function(){
      $('.parallax').parallax();
      $('ul.tabs').tabs();
      $(".button-collapse").sideNav();

    });
    </script>

  </main>
  <footer class="page-footer black">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content Beta</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum blah blah blah.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 HN Solutions
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
  </html>
