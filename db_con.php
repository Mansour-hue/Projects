<?php
$host = "localhost";
$pass="root";
$database="alkuraimi";
if (mysqli_connect($host,$pass, "", $database))
{
}
else{
 die("error:". mysqli_error($con));
}
?>