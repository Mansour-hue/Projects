<?php session_start();//manss ?>
<?php include ("database.php");
if (isset($_POST['login'])){
    $usname=mysqli_real_escape_string($con,$_POST['username']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    
    $query = "select * from user where user_name='$usname' and password='$pass' and active='1'";
     //MD5('$pass')
    $run = mysqli_query($con,$query);
    $user= mysqli_fetch_array($run);
    
    if (mysqli_num_rows($run)>0){
        $_SESSION['id']=$user['id'];
        $_SESSION['user_name']=$usname;
    $password = md5($pass);
        
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "<script>alert('User name or password is not correct')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
   
    <title>Your Admin Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Reset all CSS rule -->
    <link rel="stylesheet" href="css/reset.css" />

    <!-- Main stylesheed  (EDIT THIS ONE) -->
    <link rel="stylesheet" href="css/style.css" />

    </script>

</head>

<body>

    <div id="content" class="login">

        <h1><img src="css/img/img/icons/locked.png" alt="" /><span style="color: #FF8205">Admin panel</span></span></h1>
        <form method="post" action="login.php">

            <div class="input placeholder">
                <input type="text" name="username" id="login" placeholder="Username" style="color: #FFFF66" />
            </div>
            <div class="input placeholder">
                <input type="password" name="password" id="pass" placeholder="Password" style="color: #FF8205" />
            </div>

            <div class="checkbox">
                <input type="checkbox" id="remember" />
                <label class="inline" for="remember" ><span style="color: #FFFFFF"><span style="background-color: #000066"><span style="color: #FF8205">&reg;Remember me&reg;</span></span></label>
            </div>
            <div class="submit">
                <input type="submit" name="login" value="LOGIN" />
            </div>
        </form>


    </div>


</body>

</html>
