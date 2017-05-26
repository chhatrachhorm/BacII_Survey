<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<<<<<<< HEAD
    <link rel="stylesheet" href="css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="css/css/qmaster.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
    <title>@yield('title')</title>
=======
>>>>>>> a3184cc5faf7c745962b279033c6055f80bc4e6b
  </head>

  <body>
    @include('layout.nav')
<<<<<<< HEAD
    <div class="container">

    </div><!--end of div.container-->
    @include('layout.footer')

  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
=======
    @include('layout.footer')
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
    })
    </script>
>>>>>>> a3184cc5faf7c745962b279033c6055f80bc4e6b
  </body>

</html>
