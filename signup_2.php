 <html>

   <head>
      <title>Accessing Cookies with PHP</title>
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
<body>
    <span style="font-size: xx-large"><i><b><u><span style="text-decoration: blink"><span style="font-family: 'Bradley Hand ITC', 'Brush Script MT'">Welcome To Insert Page </span></span></u></b></i></span>
   <br /><br><br>
<?php

 require_once("db_con.php");

?>
<form method="POST" >

     <input type="text" name="firstname"  placeholder="الاسم الاول"/><br>
     <input type="text" name="lastname"  placeholder="الاسم الثاني"/><br>
     <input type="email"  name="email" placeholder="بريدك الالكتروني"/><br>
     <input type="password" name="password"  placeholder="كلمه السر"/><br>
     <input type="password" name="password2"  placeholder=" تاكيد كلمه السر"/><br>
	  <select name="type">
        <option value="0">مشرف</option>
        <option value="1">مستخدم</option>
		<option value="2">عضو</option>
    </select>
	<input type="submit" name="insert"  value="ادخل"/>

 </form>
<?php
$len=0;
$pass2=0;

if (isset($_POST['firstname'])!="" && $_POST['lastname']!="" && $_POST['email']!="" && $_POST['password']!="")
{
		if (isset($_POST['insert']))
		{
			$pass=md5($_POST['password']);
			if (strlen($_POST['firstname'])<10 && strlen($_POST['lastname'])<10)
			{
				$len=1;
			}
			if ($_POST['password']==$_POST['password2'])
			{
				$pass2=1;
			}
			if ($len==1&&$pass2==1)
			{
				if ($_POST['type']==0||$_POST['type']==1)
				{
				$query="INSERT INTO `user`(`user_name`, `last_user_name`, `email`, `password`, `active`, `type`) VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$pass}',1,{$_POST['type']})";
				}else
				{
					$query="INSERT INTO `user`(`user_name`, `last_user_name`, `email`, `password`, `active`, `type`) VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$pass}',0,{$_POST['type']})";
				}
				$r=mysqli_query($con,$query);
				if ($r)
				{
					echo"done";
				}
				else
					echo"error";
			}
			else
			{
				if ($len==0)
					echo"<p> حجم السلسلة النصيه اكبر من 10 في الاسم </p>";
				if ($pass2==0)
					echo"<p>كلمة السر غير متطابقة  </p>";
			}



		}
}else
	echo "enter the value ";
?>
   </body>
</html>