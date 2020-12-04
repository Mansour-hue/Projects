<?php include 'header.php'; //manss ?>
<?php
if (isset($_POST['submit'])){
    //Assign Vars.
    $name= $_POST['name'];
    //Validation
    if ($name==''){
        echo "<script>alert('fill all fields')</script>";
        exit ();
    } else {
        $q="INSERT INTO `branch`( `branch_name`, `address`, `phone`) VALUES ('{$_POST['name']}','{$_POST['address']}',{$_POST['phone']})";
        $r=mysqli_query($con,$q);
        if ($r)
        {
            echo"ÊãÊ ÚãáíÉ ÇáÇÏÎÇá ÈäÌÇÍ";
        }
        else
        {
            echo"åäÇß ÎÙÇÁ Ýí ÇáãÏÎáÇÊ "   ;
            echo $q;
        }

        }
    }

?>
    <div id="content">
        <h1>Branch</h1>
        <div class="bloc">
            <div class="title">Add branch</div>
            <div class="content">
                <form method="post" action="add_category.php">
                    <div class="input">
                        <label>Branch Name</label>
                        <input name="name" type="text" id="input1" placeholder="Enter branch Name">
                    </div>
                     <div class="input">
                        <label>Address</label>
                        <input name="address" type="text" id="input1" placeholder="Enter Address here">
                    </div>
                     <div class="input">
                        <label>Phone</label>
                        <input name="phone" type="text" id="input1" placeholder="Enter phone here">
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Confirm" class="black">
                        <a href="index.php"><input type="button" name="cancel" value="Cancel" class="black"></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
