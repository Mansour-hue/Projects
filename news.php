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
    <button class="dropbtn">الفروع والوكلاء</button>
    <div class="dropdown-content">
     <a href="branch.php">الفروع</a>
      <a href="agency.php">الوكلاء</a>
    </div>
  </div>
  <a href="news.php" class="active">الاخبار</a>
  <a href="employment.php">التوظيف</a>
   <a  href="discuss.php">المناقشة</a>
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
  <h4 class="pager"><a href="../">الرئيسية </a> / اخبار البنك</h4>
  <div class="col2">
   <div class="n-container">
     <div class="n-header"><h3>البنك الرائد في اليمن</h3>    </div>
     <img src="image/building.jpg"  alt="" />
     <div class="n-detail"><p>تمتع بخدماتناالمتكاملة </p>
     <p>تمتع بكامل الاريحية بفروعنا المتوفره في جميع انحاء اليمن الخ...</p>  </div>
      <div class="more2"><button  onclick="openModal(1);">قراءة المزيد</button>  </div>
   </div>
  </div>


  <div class="col2">
   <div class="n-container">
     <div class="n-header"><h3>خيارالتوفير السليم</h3>    </div>
     <img src="image/mansss.jpg"  alt="" />
     <div class="n-detail"><p>الكريمي تمتع بخدمات البنك الرائد</p>
                            <p>تعمل على تمويل جميع المشاريع الكبيره والصغيره... </p>
     </div>
      <div class="more2"><button onclick="openModal(2);">قراءة المزيد</button>  </div>
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
                    <a href="branch.php">الفروع</a>
                    .
                    <a href="branch.php">الوكلاء</a>
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
                <!---///modals-->
<div id="Modal3" class="modal">



</div>
            </div>




                   <div id="Modal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">

      <span class="close">×</span>


    <div class="modal-body">
      <img src="image/mansor.jpg" style=" border-radius: 50%; " alt="" />
       <h2>بنك الكريمي</h2>
      <p>البنك الرائد في اليمن</p>
      <p>لا نلتفت للخلف ولا نستمع لدعاة الهدم بل نسير ونتقدم ونتطور وننظر للمستقبل بتفاؤل وأمل برغم كل الصعوبات لان هدفنا سامي هو خدمة المواطن وفي اي مكان وزمان فنحن دوماً معك. </p>
        <p>يطمح بنك الكريمي للتمويل الأصغر الإسلامي أن تصل الخدمات المالية والبنكية لكل مواطن.</p>

    </div>
  </div>

</div>


                   <div id="Modal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">

      <span class="close">×</span>


    <div class="modal-body">
      <img src="image/black-friday.jpg" style=" border-radius: 50%; alt="" />
       <h2>خيار التوفير السليم..</h2>
   <p>تمتع بخدمات الكريمي الشامله</p>

   <p>تعمل على تمويل المشاريع الصغيره والكبيره </p>
      <p>يمكنك الاستلام من اي منطقة في اليمن و العالم</p>

    </div>
  </div>

</div>





        </footer>

           <script>
 function openModal(x){
// Get the modal
var modal = document.getElementById("Modal"+x);

// Get the button that opens the modal

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[x-1];

// When the user clicks the button, open the modal

    modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

}
</script>


</body>
 <script type="text/javascript" src="js/script.js"></script>
</html>