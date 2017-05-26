<!--
# @Date:   2017-05-26T21:23:58+07:00
# @Last modified time: 2017-05-26T21:24:42+07:00
-->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('desc')">

    <link rel="stylesheet" href="css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="css/css/qmaster.css" type="text/css">
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <title>@yield('title')</title>
  </head>
  <body>
    @include('layout.nav')
    <div class="container">

    </div><!--end of div.container-->
    <include "layout.footer.blade">
  </body>
</html>
