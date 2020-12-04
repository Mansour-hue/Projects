<html>

   <head>
      <title>index</title>
   <style type="text/css">
<!--
body {
    direction: ltr;
    text-shadow: -19px 18px 8px #FEFEFE;
    text-align: center;
    background-image: -webkit-linear-gradient(top, #0A141F, #FFFEF5);
    background-image: linear-gradient(to bottom, #0A141F, #FFFEF5)
}
-->
</style>
<?php include 'header.php';//manss ?>
<?php
//session_start();
if(!isset($_SESSION['user_name'])){
    header("LOCATION:login.php");
}else {
?>

<?php
//Creat Query

$employees="SELECT * from employees";
$run_employees= mysqli_query($con,$employees);

//Create Query


$users= "SELECT * FROM user where active='1'";

//Run Query
$run_user = mysqli_query ($con,$users);

$sql = "select * from user ";
$run_sql = mysqli_query ($con,$sql);
$r_sql = mysqli_fetch_array ($run_sql);
?>
    <!--
              CONTENT
                        -->

    <div id="content">
   <a href="../test.php"><h1><i><b>&clubs;&AElig; <u><span style="font-family: 'Blackadder ITC'"><span style="font-size: larger">create cookeis</span></span></u> &AElig;&clubs;</b></i></h1></a>
    <a href="../users.php"><h1><i><b>&loz;&AElig; <u><span style="font-family: 'Blackadder ITC'" style="font-size: 30px" ><span style="font-size: xx-large">active users by using user account</span></span></u> &AElig;&loz;</b></i></h1></a>
    <a href="../admin.php" color="black"><h1><b><i>&spades;&AElig; <u><span ><span style="font-family: 'Blackadder ITC'" style="font-size: xx-large">show users with img by using admin account</span></span></u> &AElig;&spades;</i></b></h1></a>
        <?php if ($act>0) : ?>
        <?php if ($check_unactive>0) { ?>
 <div class="bloc">
            <div class="title">Unactivated Users</div>
            <div class="content">
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>User_name</th>
                        <th>email</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($run_user)): ?>
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['user_name'];?>
                        </td>
                        <td>
                            <?php echo $row['email'];?>
                        </td>
                        <td style="text-align:right">
                            <form method="post" action="active_user.php?id=<?php echo $row['id'];?>">
                            <input type="submit" name="active_user" value="Active" class="btn-active">
							<a href='admin_edit_user.php?id=<?php echo $row['id']; ?>' class="btn-active">update</a>
							<a href="../signup_2.php" >insert</a>
                            </form>
                        </td>

                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <?php } ;?>
        <div class="bloc">
            <div class="title">employees</div>
            <div class="content">
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>user_name</th>
                        <th>email</th>
                        <th>city</th>
                        <th>nationality</th>
                        <th>file</th>
                         <th>about</th>

                    </tr>

                    <?php while ($row = mysqli_fetch_array($run_employees)): ?>
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['user_name'];?>
                        </td>
                        <td>
                            <?php echo $row['email'];?>
                        </td>
                        <td>
                               <?php echo $row['city'];?>
                        </td>
                        <td>
                            <?php echo $row['file'];?>
                        </td>
                        <td>
                            <?php echo $row['about'];?>
                        </td>

                        <td style="text-align:right">
                            <a href="update.php?id=<?php echo $row['id'];?>"><button name="edit" class="black">Edit</button></a>
							
                        </td>
						<td style="text-align:right" >
						
						</td>
                    </tr>
                    <?php endwhile; ?>

                </table>

            </div>
        </div>
      

        <div class="bloc">
            <div class="title">User</div>
            <div class="content">
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>user_name</th>
                        <th>last_user_name</th>
                        <th>email</th>
                        <th>password</th>
         <!--                 <th>confirm_pass</th>    -->
                        <th>active</th>

                    </tr>
                    <?php while ($row = mysqli_fetch_array($run_un)): ?>
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>

                        <td>
                            <?php echo $row['user_name'];?>
                        </td>
                        <td>
                            <?php echo $row['last_user_name'];?>
                        </td>
                        <td>
                            <?php echo $row['email'];?>
                        </td>
                        <td>
                            <?php echo $row['password'];?>
                        </td>
                         <!--
                          <td>
                            <?php echo $row['confirm_pass'];?>
                        </td>
                        -->


                         <td style="text-align:right">
                            <a href="update.php?id=<?php echo $row['id'];?>">
                                <button name="edit" class="black">Edit</button></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>

            </div>
        </div>
       <?php endif ;?>

        <?php if ($act==0):?>
        <div class="bloc">
            <div class="title">Your employees</div>
            <?php if (mysqli_num_rows($run_employees)>0) :?>
            <div class="content">
                <table class="table table-striped">
                    <tr>
                         <th>id</th>
                        <th>user_name</th>
                        <th>email</th>
                        <th>city</th>
                        <th>nationality</th>
                        <th>file</th>
                         <th>about</th>

                    </tr>

                    <?php while ($row = mysqli_fetch_array($r_sql)): ?>
                    <tr>
                        <td>
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['user_name'];?>
                        </td>
                        <td>
                            <?php echo $row['email'];?>
                        </td>
                         <td>
                            <?php echo $row['city'];?>
                        </td>
                        <td>
                            <?php echo $row['nationality'];?>
                        </td>
                        <td>
                            <?php echo $row['file'];?>
                        </td>
                        <td>
                            <?php echo $row['about'];?>
                        </td>
                        <td style="text-align:right">
                            <a href="update.php?id=<?php echo $row['id'];?>"><button name="edit" class="black">Edit</button></a>
							<a href="../singup_2.php?id=<?php echo $row['id'];?>"><button name="edit" class="black">insert</button></a>
                        </td>
						<td style="text-align:right">
						<a href="../singup_2.php?id=<?php echo $row['id'];?>"><button name="edit" class="black">insert</button></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </table>

            </div>
            <?php else :?>
            <h2 style="padding:20px; font-size:20px; font-weight:bold; text-align:center; color:blue;">You haven't post any emp yet</h2>
            <?php endif; ?>
        </div>
        <?php endif ;?>
    </div>
       <i><b><span style="font-family:     Pristina,    'Viner Hand ITC'"><span style="font-size: xx-large"><b><b><b><b><b><b><b><b><b><b><b><b><b><b>kuraimi site</b></b></b></b></b></b></b></b></b></b></b></b></b></b></span></span></b></i>
       <?php// echo $r_sql['username']; 'Old English Text MT', Pristina,'Script MT Bold',    'Rage Italic',Vivaldi,'Vladimir Script',  ?>
    </div>


    <!-- FOOTER -->
    </body>


    </html>

 <?php } ?>