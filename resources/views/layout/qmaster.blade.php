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
    <meta name="description" content="@yeild('desc')">

    <link rel="stylesheet" href="css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="css/css/qmaster.css" type="text/css">
    <title>@yeild('title')</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">SkillPicker</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
        </div>
  </nav>
    </div><!--end of div.container-->
    <include "layout.footer.blade">
  </body>
</html>
