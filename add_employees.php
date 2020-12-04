<?php include 'header.php'; //manss?>
<?php

     ////////////////upload FILE//////////////////////////////////////////////////////////////
 if (isset($_POST['submit']))
 {
$target_dir = "../USER_IMG/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "<img src='{$target_file}' width='70px' height='70px'>" ;
        $q="INSERT INTO `employees`( `user_name`,`phone`,`email`, `city`, `nationality`, `file`, `about`) VALUES ('{$_POST['firstname']}',{$_POST['number']},'{$_POST['email']}','{$_POST['city']}','{$_POST['nationality']}','{$target_file}','{$_POST['about']}')";
        $r=mysqli_query($con,$q);
        if ($r)
        {
            echo"تمت عملية الادخال بنجاح";
        }
        else
        {
            echo"هناك خظاء في المدخلات "   ;
            echo $q;
        }


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
?>
<div id="content">
    <h1>employeees</h1>
    <div class="bloc">
        <div class="title">Add employeees</div>
        <div class="content">
           <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">


    <div>
    <label>الاسم:</label><div class="error">
<?php
    if(isset($errors['firstname1'])){echo $errors['firstname1'];}
    if(isset($errors['firstname2'])){echo $errors['firstname2'];}
?>
</div><input type="text" name="firstname"  placeholder="ادخل اسمك.." />
    <label>رقم الهاتف:</label><div class="error">   </div><input type="number" name="number" placeholder="ادخل رقمك.." />
    <label>البريد الالكتروني:</label><div class="error">     </div><input type="email" name="email" placeholder="ادخل بريدك الالكتروني.." />
    <label>المدينة:</label><input type="text" name="city" placeholder="ادخل اسم مدينتك.." />
    <label>الجنسية:</label><input type="text" name="nationality" placeholder="ادخل جنسيتك.."/>
    <label>السيرة الذاتية:</label><input type="file" name="fileToUpload" id="fileToUpload">

    <label>نبذة عنك:</label><textarea  name="about" placeholder="اكتب نبذة عن نفسك" ></textarea>
    <input type="submit" value="أرسال" name="submit">
  </form>
        </div>

    </div>
</div>

