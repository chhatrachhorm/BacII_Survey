<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/css/qmaster.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<<<<<<< HEAD
    <meta name="description" content="@yield('title')">
=======

    <title>@yield('title')</title>
>>>>>>> e4b9929da2579722b4445bf25a95c4b34c75a63b
  </head>
  <body>
<<<<<<< HEAD
    @include('layout.nav')
    <div class="container">
      <div class="row">
        @yield('survey')
      </div>
    </div>
=======

    @include('layout.nav')
>>>>>>> e4b9929da2579722b4445bf25a95c4b34c75a63b
    @include('layout.footer')
    <!--Import jQuery before materialize.js-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
    })
    </script>
  </body>

</html>
