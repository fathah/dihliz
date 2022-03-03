<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
  
<style>
/* 
#mu-menu .navbar-default {
  background-color:rgba(0, 0, 0, 0);
  transition: 0.5s ease;
  border: none;
}
.wh{
  color: #fff;
}
#mu-menu{
  position: fixed;
  top:0;
  z-index: 100;
  border-bottom:0.5px solid grey;
} */
</style>



<body> 
    
  <?php include 'inc/nav.php'; ?>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <?php include 'inc/slider.php';
  include 'inc/topBoxes.php';
  
  
  ?>

 


  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>
                  Dihilz, a  phrase meaning threshold in Persian, continues the journey that GSV started more than one decade before.   Dihliz World School, runs under Markaz Garden, Calicut, plans its residential school system with a new advanced approach and outstanding curriculum to expand its global connections. It explores excellence in all the academic and non-academic areas to mould the students as 'ideal' in the areas concerned.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/IN3Re5tJzFE" target="mutube-video">
                  <img src="assets/img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">547</h4>
                  <p>Alumni</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">220</h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4><span class="counter">24</span> Hrs</h4>
                  <p>Mentorship</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user"></span>
                  <h4 class="counter">26</h4>
                  <p>Teachers</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->


 <?php 
 include'inc/features.php';
 include'inc/achievement.php'; 
 include'inc/director-msg.php';
 include'inc/testinomials.php';
 include'inc/news.php';


 
 ?>




          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->
<?php include'inc/footer.php'; ?>
<script>

// $(document).ready(function(){
//   $(window).scroll(function(){
//   	var scroll = $(window).scrollTop();
// 	  if (scroll > 200) {
// 	    $(".navbar-default").css("background" , "#ffffff");
// 	  }
// 	  else{
// 		  $(".navbar-default").css("background" , "rgba(0, 0, 0, 0.2)");  
//       $(".navbar-default > a").css('color', '#ffffff');
// 	  }
//   })
// })

</script>


  </body>
</html>