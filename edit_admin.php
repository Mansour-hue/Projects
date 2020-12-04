<?php include 'header.php';//manss ?>
<?php 
$show_admins = mysqli_query($con,"select * from users where admin = '1'");
?>
<div id="content">
    <h1>Admins</h1>
    <div class="bloc">
        <div class="title">Admins List</div>
        <div class="content">
            <table class="table table-striped">
                <tr>
                    <th>#ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    
                </tr>
                <?php while ($row = mysqli_fetch_array($show_admins)): ?>
                <tr>
                    <td>
                        <?php echo $row['ID'];?>
                    </td>
                    <td>
                        <?php echo $row['username'];?>
                    </td>
                    
                        <?php echo $row['email'];?>
                    </td>
                    
                    <td style="text-align:right">
                        <td style="text-align:right">
                            <a href="admin_edit_user.php?id=<?php echo $row['ID'];?>"><button name="edit" class="black">Edit</button></a>
                        </td>
                    </td>

                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
