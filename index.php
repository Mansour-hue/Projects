<?php

 include("inc/header.php");

?>
<div id="mySidenav" class="sidenav">
  <a href="#" id="facebook">تابعونا على <i class="fa fa-facebook"></i></a>
  <a href="#" id="twitter">تابعونا على <i class="fa fa-twitter"></i></a>
  <a href="#" id="youtube">تابعونا على <i class="fa fa-youtube"></i></a>
  <a href="#" id="instagram">تابعونا على <i class="fa fa-instagram"></i></a>
</div>
  <button onclick="topFunction()" id="goback"title="Go to top"><i class="fa fa-arrow-up"></i></button>
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
<div class="bg" ><!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1.png" alt="1" title="1" id="wows1_0"/></li>
		<li><img src="data1/images/2.png" alt="2" title="2" id="wows1_1"/></li>
		<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/4.jpg" alt="bootstrap slider" title="4" id="wows1_3"/></a></li>
		<li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="1"><span><img src="data1/tooltips/1.png" alt="1"/>1</span></a>
		<a href="#" title="2"><span><img src="data1/tooltips/2.png" alt="2"/>2</span></a>
		<a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>3</span></a>
		<a href="#" title="4"><span><img src="data1/tooltips/4.jpg" alt="4"/>4</span></a>
		<a href="#" title="5"><span><img src="data1/tooltips/5.jpg" alt="5"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --></div>
 <div class="container">

 <section id="about">
     <h1 class="title">من نحن</h1>
     <div class="image">
         <img src="image/2018.jpg" alt="">
     </div>
     <div class="detail">
         <h3>بنك الكريمي</h3>
         <p> بنك الكريمي للتمويل الأصغر الإسلامي يمتلك رؤيا أن تصل الخدمات المالية والمصرفية لكل مواطن ليسهم  </p>
         <p>في التنمية الاقتصادية والاجتماعية وفي تحسين معيشة الفرد والمجتمع عن طريق خدمات مالية متنوعة، وبخبرات متراكمة تزيد عن أربعين عاما أسس هذا الصرح الاقتصادي ليقدم خدماته للمواطنين بجميع المحافظات والمدن والمديريات فوصلت خدماتنا من سقطرى إلى صعدة ومن المهرة إلى باب المندب.</p>
         <p>بنك الكريمي دوماً معك  في الرخاء والشدة في الجبال والوديان والصحاري والسواحل والجزر </p>
         <p>هدفنا تقديم خدمة ذات جودة بكفاءة وفعالية نلتزم ونمارس القيم التي نشأنا وتربينا عليها في الالتزام والأمانة والوضوح والشفافية والاحترام وحب الخير للآخرين والمسئولية الاجتماعية. <a href="about.php">المزيد</a></p>
     </div>
 </section>
<section id="sevice">
     <div class="image">
    <img src="image/presence-img.png" alt="">
     </div>
     <div class="detail">
         <h3>الرؤية</h3>
         <p>يطمح بنك الكريمي للتمويل الأصغر الإسلامي أن تصل الخدمات المالية والبنكية لكل مواطن.. </p>
         <h3>الرسالة</h3>
         <p> المساهمة في التنمية الاقتصادية والاجتماعية وفي تحسين مستوى معيشة الفرد والمجتمع </p>
         <h3>الغايات</h3>
         <p>مواصلة تبوء موقع ريادي في العمل البنكي يحقق عائد جيد للمساهمين والمودعين </p>
     </div>
 </section>
 <section id="contact">
    <h1 class="title">تواصل معنا</h1>
       <div class="row1">
                 <img src="image/DLszR_pW0AA7wsf.jpg" style=" height:480px;" alt="" / >
       </div>
      <?php
/*//   ------------------------------------------button creat account-----------------------

       <div class="row2">

   <!-- Trigger/Open The Modal -->

   <button id="myBtn">انشاء حساب </button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>




      <fieldset>

      <legend>Buildup new account</legend>
      <form action="bank.php">
          Frist name :
          <input type="text">
          <br>
          Last name:
          <input type="text"><br/>
          birth date:<input type="date"> birht place:<input type="text"><br>


          </form>


      </fieldset>


  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

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
button.onclick=function(){

    alert('wellcome');
}

</script>
      <textarea placeholder>
     رسالة
     </textarea><br/>
     <input type="submit" value="ارسال">*/
 ?>
 <div class="row2">
                 <img src="image/C3biYciWcAA9L0z.jpg" style=" height:480px;" alt="" / >
       </div>
   </div>


 </section>

</div>
<?php
  include("inc/footer.php");
?>