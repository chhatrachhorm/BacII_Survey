<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/css/qmaster.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="@yield('desc')">
    <title>@yield('title')</title>
  </head>
  <body>
    @include('layout.nav')
    <div class="container">
      <div class="row MarginBottom">
        @yield('Heading')
      </div>
      <div class="row MarginBottom">
        @yield('Instruction')
      </div>
      <div class="row MarginBottom">
        @yield('Question')
      </div>
    </div>
    @include('layout.footer')
    <!--Import jQuery before materialize.js-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $('.collapsible').collapsible();
    })
    </script>
  </body>

</html>
