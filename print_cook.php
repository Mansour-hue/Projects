<html>

   <head>
      <title>Accessing Cookies with PHP</title>
   <style type="text/css">
<!--
body {
    direction: ltr;
    text-shadow: -19px 18px 8px #FEFEFE;
    background-image: linear-gradient(to bottom, #4993C2, #844242);
    text-align: center;
}
-->
</style>
   </head>

   <body>
   <span style="font-size: xx-large"><i><b><u><span style="text-decoration: blink">&diams;&hearts; Hello ^_* And Welcome To Cookies &hearts;&diams; </span></u></b></i></span>
   <br /><br>
    <?php
      if (isset($_COOKIE["name"])&&isset($_COOKIE["age"]))
      { echo $_COOKIE["name"]. "<br />";
         echo $_COOKIE["age"] . "<br />";
      }
      ?>

   </body>
</html>