<?php include ("database.php"); //manss ?>
<?php 
session_start();
$id=$_SESSION['id'];
$query = mysqli_query ($con,"select * from user where id='$id'");
?>
<?php
$un_user="select * from user where active='1'";
$run_un= mysqli_query ($con,$un_user);
$check_unactive = mysqli_num_rows($run_un);
$active_admin ="select * from user where active='1' and id='$id'";
$run_active = mysqli_query($con,$active_admin);
$act=mysqli_num_rows($run_active);




$user_account= "SELECT * FROM user where id= '$id'";
//Run Query
$u_account = mysqli_query ($con,$user_account);
$run_u_account = mysqli_fetch_array($u_account);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--  HEAD -->
    <div id="head">
        <div class="left">
            <a href="" class="button profile"><img src="css/img/img/icons/huser.png"></a>
            Hi,
            <a href="#">
                //<?php //
                // echo $_SESSION['user_name'];?>
            </a>|
            <a href="logout.php">Logout</a>

        </div>
        <div class="right">
            <form action="#" id="search" class="search placeholder">
                <label>Looking for something ?</label>
                <input type="text" value="" name="q" class="text" />
                <input type="submit" value="rechercher" class="submit" />
            </form>
        </div>

    </div>


    <!--
                SIDEBAR
                         -->
    <div id="sidebar">
        <ul>
            <li class="nosubmenu">
                <a href="index.php">
                    <img src="css/img/img/icons/menu/black-dashboard.png" alt="" /> Dashboard
                </a>
            </li>

            <li>
                <a href="index.php"><img src="css/img/img/icons/menu/black-layout.png" alt="" /> Elements</a>
                <ul>

                    <li><a href="account.php">Edit Your Account</a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="add_employees">Add employees</a></li>
                    <li><a href="add_branch.php">Add Branch</a></li>
                </ul>
            </li>

            <li class="nosubmenu">
                <a href="#"><img src="css/img/img/icons/menu/black-pacman.png" alt="" /><span style="font-family: 'Bradley Hand ITC', 'Brush Script MT'">WELCOME TO FUN PROJECT</span></a>
            </li>
        </ul>


    </div>
