<?php
$host = "localhost";
$pass="root";
$database="alkuraimi";
$con=mysqli_connect($host,$pass, "", $database);
if (!mysqli_connect_error())
{
	
}
else{
 die("error:". mysqli_error($con));
}
?>