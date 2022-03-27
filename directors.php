<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
  <body> 
  <?php include 'inc/nav.php';
  
  ?>
  
<style>
  .parent {
display: grid;
grid-template-columns: auto auto auto;
row-gap: 20px;
}
.parent div img{
 border-radius: 15px;
 filter: drop-shadow(2px 3px 10px rgba(0,0,0,0.3));
width: 250px;
height: 250px;
transition:all 0.5s ease;
margin-bottom: 10px;
}

.parent div img:hover{
 filter: drop-shadow(4px 6px 10px rgba(0,0,0,0.5));
}

@media screen and (max-width:750px){
  .parent {
grid-template-columns: auto;
}
}
@media screen and (max-width:1200px){
  .parent {
grid-template-columns: auto auto;
}
}

</style>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->



 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Dihliz Directors Board</h2>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container"  style="background:#fff; padding:20px;">
   <div class="mu-blog-description">
  
<p>

<div class="parent">

<center><div><img src="assets/img/directors/mah.jpg" alt="">  <h4>DR. MAH AZHARI</h4></div></center>
<center><div><img src="assets/img/directors/dr-abdussalam.jpg" alt="">  <h4>DR. ABDUSSALAM </h4></div></center>
<center><div><img src="assets/img/directors/farooq-saqafi.jpg" alt="">  <h4>DR. UMARUL FARUQ SAQAFI</h4></div></center>
<center><div><img src="assets/img/directors/anil-seth.jpg" alt="">  <h4>DR. ANIL SETH</h4></div></center>
<center><div><img src="assets/img/directors/noufal.jpg" alt="">  <h4>MR. NOUFAL HASSAN NURANI</h4></div></center>


</div>


</p>


</div>
     </div>
   </div>
 </section>




 <?php include'inc/footer.php'; ?>
 
  

  
  </body>
</html>