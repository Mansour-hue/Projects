<?php 
session_start();

header ("LOCATION:login.php");

session_destroy ();
?>
