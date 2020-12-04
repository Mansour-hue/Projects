 <html>

   <head>
      <title>Accessing Cookies with PHP</title>
   <style type="text/css">
<!--
body {
    direction: ltr;

     color:white;
    text-align: center;
    background-image: -webkit-linear-gradient(top left, #392413, #23003d);
    background-image: linear-gradient(to bottom right, #392413, #23003d)




}
-->
</style>
   </head>

   <body>
       <span style="font-size: xx-large"><i><b><u><span style="text-decoration: blink"><span style="font-family: 'Bradley Hand ITC', 'Brush Script MT'">active users</span></span></u></b></i></span>
   <br /><br><br>
<?php
session_start();

/////if ($_SESSION['TYPE']==1)      //i added is set /////
 if (isset($_SESSION['TYPE'])==1)
{
	require_once("db_con.php");

	$q="SELECT * FROM `user` WHERE `active`=0";
	$r=mysqli_query($con,$q);
	
	while($row=mysqli_fetch_assoc($r))
	{
		echo "<span>{$row['user_name']} {$row['last_user_name']} </span>";
		echo"<a href='users.php?id={$row['id']}'>تفعيل</a>";
		echo "</br>";
		
	}
	if (isset($_GET['id']))
	{
		$q2="UPDATE `user` SET `active`=1 WHERE `id`={$_GET['id']}";
		$r2=$r=mysqli_query($con,$q2);
		if($r2)
		{
		
			header("location:users.php");
				echo"لم يتم تفعيل المستخدم بنجاح";
		}
		else
			echo"لم يتم تفعيل المستخدم " ;
	}
}
else
{
	echo "<h1>ليست لديك صلاحية المستخدمين للتنشيط الحسابات الرجاء الدخول بحساب المستخدمين </h1>";
	echo"<a href='login.php'>تسجيل الدخول</a>";
}
?>

   </body>
</html>