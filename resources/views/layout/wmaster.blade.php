<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="@yield('css')">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="@yield('description')">
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('blur')
    <div class="wrapper">
      @yield('Content')
    </div>

    <div class="fixed-action-btn toolbar animated bounceInDown">
    <a class="btn-floating btn-large #0d47a1 blue darken-3">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      @yield('bottom-nav')
    </ul>
    </div>
    <!--Import jQuery before materialize.js-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    @yield('jsscript')
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $('.fixed-action-btn.toolbar').openToolbar();
    });
    </script>

  </body>

</html>
