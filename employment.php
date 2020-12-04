<!DOCTYPE HTML>

<html>

<head>
  <title>بنك الكريمي</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
<style>
.error{
    background-color: #5500CC;
    font-weight: bold;
    color: white;
    border-radius: 17px 0 0 0;
    padding: 2px 56px;
    margin: 0;
    border: 0px solid #cf0eff;

}
</style>
</head>

<body>
 <?php

 require_once("db_con.php");

?>
<nav id="topnav" class="topnav">
 <img class="brand" src="image/logo.png">
  <a  href="index.php">الرئيسية</a>
  <a href="about.php">عن الكريمي</a>
 <div class="dropdown">
    <button class="dropbtn">الفروع والوكلاء</button>
    <div class="dropdown-content">
     <a href="branch.php">الفروع</a>
      <a href="agency.php">الوكلاء</a>
    </div>
  </div>
   <a href="news.php">الاخبار</a>
  <a class="active" href="employment.php">التوظيف</a>
   <a  href="discuss.php">المناقشة</a>
  <a href="contact.php">تواصل بنا</a>
<a href="login.php">تسجيل الدخول</a>
  <form>
     <input type="text" class="search" placeholder="بحث....." />
  </form>
</nav>


<div id="mySidenav " class="sidenav ">
  <a href="#" id="facebook">تابعونا على <i class="fa fa-facebook"></i></a>
  <a href="#" id="twitter">تابعونا على <i class="fa fa-twitter"></i></a>
  <a href="#" id="youtube">تابعونا على <i class="fa fa-youtube"></i></a>
  <a href="#" id="instagram">تابعونا على <i class="fa fa-instagram"></i></a>
</div>
<button onclick="topFunction()" id="goback" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<script>
 window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("goback").style.display = "block";
    } else {
        document.getElementById("goback").style.display = "none";
    }
}



 </script>

<div class="em-bg"></div>

 <div class="container">
     <h4 class="pager"><a href="../">الرئيسية </a> / التوظيف</h4>
     <div class="em-form">
<?php
function cleanData($value){
     $value=trim($value);
     $value=htmlspecialchars($value);
     $value=stripslashes($value);
     return $value;
}
    $s_email=$s_phone="";
    $s_email_err=$s_phone_err="";
 if(isset($_POST['send']))
 {

    if(empty($_POST['firstname']))
   {
    $errors['firstname1']="يرجى ادخال اسمك";
   }
   else
   {
     if(strlen($_POST['firstname'])>10)
         {
           $errors['firstname2']="يرجى ادخال أقل من 10 أحرف";
         }
      else
      {
        $firstname= cleanData($_POST['firstname']);
      }
   }

		if (empty($_POST['email'])) {
			$s_email_err="يجب ادخال البريد الالكتروني ";

		}
		else{
			$s_email=cleanData($_POST['email']);
			if(!filter_var($s_email,FILTER_VALIDATE_EMAIL)){
				{$s_email_err="ادخل البريد الالكتروني بشكل صحيح بحيث يتضمن (@ .com) ";
                   }
			}
			else $s_email_err="";
		}


        	if (empty($_POST['number'])) {
			$s_phone_err="يجب ادخال رقم الهاتف";
		}
		else{
			$s_phone=cleanData($_POST['number']);
			if(!preg_match("/^[7]+[7,3,1,0]+[0-9]{7}$/",$s_phone))
			{
				$s_phone_err="رقم الهاتف يجب ان يكون احد ارقام الشركات المحمولة المحلية فقط ";

			}
			else $s_phone_err="";
		}
 }
     ////////////////upload FILE//////////////////////////////////////////////////////////////
 if (isset($_POST['submit']))
 {
$target_dir = "USER_IMG/";
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




////////////////////////////

?>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">


    <div>
    <label>الاسم:</label><div class="error">
<?php
    if(isset($errors['firstname1'])){echo $errors['firstname1'];}
    if(isset($errors['firstname2'])){echo $errors['firstname2'];}
?>
</div><input type="text" name="firstname"  placeholder="ادخل اسمك.." />
    <label>رقم الهاتف:</label><div class="error">  <?php echo $s_phone_err ; ?> </div><input type="number" name="number" placeholder="ادخل رقمك.." />
    <label>البريد الالكتروني:</label><div class="error">    <?php echo $s_email_err ; ?> </div><input type="email" name="email" placeholder="ادخل بريدك الالكتروني.." />
    <label>المدينة:</label><input type="text" name="city" placeholder="ادخل اسم مدينتك.." />
    <label>الجنسية:</label><input type="text" name="nationality" placeholder="ادخل جنسيتك.."/>
    <label>السيرة الذاتية:</label><input type="file" name="fileToUpload" id="fileToUpload">

    <label>نبذة عنك:</label><textarea  name="about" placeholder="اكتب نبذة عن نفسك" ></textarea>
    <input type="submit" value="أرسال" name="submit">
  </form>
    </div>
  </div>
</div>
    <footer class="footer-distributed">

            <div class="footer-right">
               <img src="image/logo.png" alt="" />
            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a href="./">الرئيسية</a>
                    ·
                    <a href="about.php">عن الكريمي</a>
                    ·
                    <a href="branch.php">الفروع والوكلاء</a>
                    ·
                    <a href="employment.php">التوظيف</a>
                     .
                    <a href="discuss.php">  المناقشة</a>
                    ·
                    <a href="contact.php">تواصل بنا</a>
                    .
                    <a href="login.php">تسجيل الدخول</a>
                </p>

                 <p>حقوق الملكيه محفوظة لبنك الكريمي &copy; 2018</p>
            </div>

        </footer>
</body>
</html>