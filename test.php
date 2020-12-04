<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
<style type="text/css">
<!--
    body{

 direction: ltr;
        text-shadow: -19px 18px 8px #3B0099;
      text-shadow: -19px 18px 8px #FEFEFE;
background-image: linear-gradient(to bottom, #FFDEAE, #000);
text-align: center;

    }
-->
</style>
</head>
<?php
   setcookie( "name", "mansour", time()+ 60*360, "/","", 0);
   setcookie( "age", "20", time()+ 60*360, "/","", 0);
?>
<html>

   <head>
      <title class>Deleting Cookies with PHP</title>
   </head>

   <body >
        &clubs;
      <?php echo "<i><b>Cerated Cookies</b></i>" ?>
        &clubs;<br>
	  <a href="print_cook.php">display cookies value </a>
   </body>


</html>