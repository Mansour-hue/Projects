<!DOCTYPE HTML>

<html>

<head>
  <title>بنك الكريمي</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

</head>

<body>
<nav id="topnav" class="topnav">
 <img class="brand" src="image/logo.png">
  <a  href="index.php">الرئيسية</a>
  <a  href="about.php">عن الكريمي</a>
   <div class="dropdown">
    <button class="dropbtn active">الفروع والوكلاء</button>
    <div class="dropdown-content">
     <a href="branch.php" >الفروع</a>
      <a href="agency.php" class="active">الوكلاء</a>
    </div>
  </div>
  <a href="news.php">الاخبار</a>
  <a href="employment.php">التوظيف</a>
  <a href="discuss.php">المناقشة</a>
  <a href="contact.php">تواصل بنا</a>
  <a href="login.php">تسجيل الدخول</a>
  <form>
     <input type="text" class="search" placeholder="بحث....." />
  </form>
</nav>


<div id="mySidenav" class="sidenav">
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
      <h4 class="pager"><a href="../">الرئيسية </a> / الوكلاء</h4>
    <table>
  <tr>
    <th>الوكيل</th>
    <th>العنوان</th>
    <th>التلفون</th>
  </tr>
  <tr>
    <td>كنان</td>
    <td>6 الشارع</td>
    <td>02123411</td>
  </tr>
   <tr>
    <td>كنان</td>
    <td>1 الشارع</td>
    <td>022222222</td>
  </tr>
  <tr>
    <td>كنان</td>
    <td>2 الشارع</td>
    <td>0333333333</td>
  </tr>
  <tr>
    <td>كنان</td>
    <td>7 الشارع</td>
    <td>01111111111</td>
  </tr>
  <tr>
    <td>كنان</td>
    <td>9 الشارع</td>
    <td>09999999999</td>
  </tr>
</table>
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
                    <a href="branch.php">الفروع</a>
                    .
                    <a href="agency.php">الوكلاء</a>
                    ·
                    <a href="employment.php">التوظيف</a>
                    .
                    <a href="discuss.php">  المناقشة</a>
                    .
                    <a href="contact.php">تواصل بنا</a>
                    .
                    <a href="login.php">تسجيل الدخول</a>
              </p>

                  <p>حقوق الملكيه محفوظة لبنك الكريمي &copy; 2018</p>
            </div>

        </footer>
</body>
 <script type="text/javascript" src="js/script.js"></script>
</html>