  <html>

   <head>
      <title>SHOW PHOTO BY ADMIN </title>
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
       <span style="font-size: xx-large"><i><b><u><span style="text-decoration: blink"><span style="font-family:  'Brush Script MT'">USERS PHOTOES</span> </span></u></b></i></span>
   <br /><br>
<?php
session_start();
if (isset($_SESSION['TYPE']))
{
if ($_SESSION['TYPE']==0)
{
	require_once("db_con.php");
	
	$q="SELECT * FROM `employees` ";
	$r=mysqli_query($con,$q);
	
	while($row=mysqli_fetch_assoc($r))
	{
		echo "<span>{$row['user_name']}</span>";
		echo"<img src='{$row['file']}' width='70px'height='70px'>";
		echo "</br>";
		
	}
}
else
{
	echo "<h1>ليس لديك صلاحية المشرفين</h1>";
	echo"<a href='login.php'>تسجيل الدخول</a>";
}
}
?>
   </body>
</html>