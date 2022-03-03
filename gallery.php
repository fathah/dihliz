<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
  <body> 
  <?php include 'inc/nav.php';
  
  ?>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Gallery</h2>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Dihliz Gallery</h2>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top">              
              <ul>
                <li class="filter active" data-filter="all">All</li>
                <li class="filter" data-filter=".lab">Lab</li>
                <li class="filter" data-filter=".library">Library</li>
                <li class="filter" data-filter=".extra">Extra Cur</li>

                <li class="filter" data-filter=".masjid">Masjid</li>
                <li class="filter" data-filter=".hostel">Hostel</li>
                <li class="filter" data-filter=".cafe">Cafe</li>
                <li class="filter" data-filter=".other">Others</li>
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <!-- start single gallery image -->

<?php
$gallerySQL  = "SELECT * FROM gallery";
$galleryRes = mysqli_query($fxConn, $gallerySQL);

if(mysqli_num_rows($galleryRes)>0){
  while($r = mysqli_fetch_assoc($galleryRes)){
echo'

<li class="col-md-4 col-sm-6 col-xs-12 mix '.$r['category'].'">
<div class="mu-single-gallery">                  
  <div class="mu-single-gallery-item">
    <div class="mu-single-gallery-img">
      <a href="#"><img alt="img" src="assets/img/gallery/big/'.$r['image'].'"></a>
    </div>
    <div class="mu-single-gallery-info">
      <div class="mu-single-gallery-info-inner">
       
        <a href="assets/img/gallery/big/'.$r['image'].'" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
      </div>
    </div>                  
  </div>
</div>
</li>

';



  }
}

?>
              </ul>            
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 
<?php include'inc/footer.php'; ?>

  </body>
</html>