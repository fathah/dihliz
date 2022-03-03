<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
  <body> 
  <?php include 'inc/nav.php';
  
  $link = $_GET['link'];

  //$postRes = fxQuery('fx_posts','*', " WHERE post_name='$link'");
  $postData = mysqli_fetch_assoc($postRes);
  $post_title = $postData['post_title'];
  $post_body = $postData['post_body'];

  
  
  ?>
  
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
           <h2><?php echo $post_title; ?></h2>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container"  style="background:#fff; padding:20px;">
   <div class="mu-blog-description">
   <?php echo $post_body; ?>
</div>
     </div>
   </div>
 </section>




 <?php include'inc/footer.php'; ?>
 
  
 <!-- jQuery library -->
 <script src="assets/js/jquery.min.js"></script>  
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="assets/js/bootstrap.js"></script>   
 <!-- Slick slider -->
 <script type="text/javascript" src="assets/js/slick.js"></script>
 <!-- Counter -->
 <script type="text/javascript" src="assets/js/waypoints.js"></script>
 <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
 <!-- Mixit slider -->
 <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
 <!-- Add fancyBox -->        
 <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 
 
 <!-- Custom js -->
 <script src="assets/js/custom.js"></script> 

  
  </body>
</html>