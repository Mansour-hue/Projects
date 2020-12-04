<?php include 'header.php'; //manss ?>
<?php 
$user_id = $_GET['id'];
//Creat Query 
$user = "SELECT * FROM user WHERE id=".$user_id;
//Run Query
$run_user = mysqli_query($con,$user);
$run=mysqli_fetch_array($run_user);

$chk_admin = mysqli_query($con,"select * from user where active = '0' and id= $user_id");  //admin = '0' or active = '0'
$run_chk = mysqli_fetch_array ($chk_admin);
$chk = mysqli_num_rows($chk_admin);
?>
<?php
if (isset($_POST['add_admin'])){
        $update_query = "update user set active= '1' where id=$user_id";  //active= '1' or admin = '0'
        if (mysqli_query($con,$update_query)) {
            echo "<script>alert('You Hired A New ADMIN')</script>";
            exit ();
        }
    }
else if (isset($_POST['del_admin'])){
        $update_query = "update user set active= '0' where id=$user_id";
        if (mysqli_query($con,$update_query)) {
            echo "<script>alert('You Have Deleted An ADMIN')</script>";
            exit ();
        }
    }
if (isset($_POST['delete'])){
    $del_query = "delete from user where id=$user_id";
    if (mysqli_query($con,$del_query)){
            echo "<script>alert('User has been deleted')</script>";
            exit ();
    }
}
?>

    <div id="content">
        <h1>Users</h1>
        <div class="bloc">
            <div class="title">Edit User</div>
            <div class="content">
                <form method="post" action="admin_edit_user.php?id=<?php echo $user_id; ?>">
                    <div class="input">
                        <label for="input1">firstname</label>
                        <input name="firstname" type="text" id="input1" value="<?php echo $run['user_name']; ?>">
                    </div>
					<div class="input">
                        <label for="input1">last name</label>
                        <input name="lastname" type="text" id="input1" value="<?php echo $run['user_name']; ?>">
                    </div>
                    <div class="input">
                        <label for="input1">Email</label>
                        <input name="email"  id="input1" value="<?php echo $run['email']; ?>">
                    </div>
					  <div class="input">
                        <label for="input1">password</label>
                        <input name="password"  id="input1" value="<?php echo $run['password']; ?>">
                    </div>
                    <div class="input">
					
                        <input name="admin" type="hidden" id="input1" value="<?php echo $run['active']; ?>">
						
                    </div>
                    <div class="submit">
                        <?php if ($chk>0) :?>
                        <input type="submit" name="add_admin" value="Make Him Admin" class="black">
                        <input type="submit" name="delete" value="Delete User" class="btn-danger">
						<input type="submit" name="update" value="update User" class="btn-danger">
						<input type="submit" name="insert" value="insert User" class="btn-danger">
                        <a href="../signup2.php"><input type="button" name="cancel" value="Cancel" class="black"></a>
                        <?php else :?>
                        <input type="submit" name="del_admin" value="Delete Admin" class="btn-danger">
                        <input type="submit" name="delete" value="Delete User" class="btn-danger">
						<input type="submit" name="update" value="update User" class="btn-danger">
						<a href="update.php?id=<?php  echo $user_id; ?>&type=0"> insert user  </a>
                        <a href="../signup2.php"><input type="button" name="cancel" value="Cancel" class="black"></a>
                        <?php endif ; ?>
                    </div>
                </form>
            </div>

        </div>
    </div>
  
   
	<?php
	if(isset($_POST['update']))
	{
		$q="UPDATE `user` SET `user_name`='{$_POST['username']}',`email`= '{$_POST['email']}' WHERE id={$_GET['id']}";
		$r=mysqli_query($con,$q);
		if ($r)
		{
			echo "done";
			
		}else
			echo "your update is error";
		
	}
	if (isset($_GET['type']))
	{
		    $pass=md5($_POST['password']);
			$query="INSERT INTO `user`(`user_name`, `last_user_name`, `email`, `password`, `active`) VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$pass}',1)";
			$r=mysqli_query($con,$query);
			if ($r)
			{
				echo"done";
			}
			else
				echo"error";
		
	}
	
	?>

