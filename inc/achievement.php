 <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Achievements</h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <center>
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">



            <?php 
$newsSQL = "SELECT * FROM blog WHERE category = 'achievement'";
$newsRes = mysqli_query($fxConn, $newsSQL);

if(mysqli_num_rows($newsRes)>0){
  while($row=  mysqli_fetch_assoc($newsRes)){
    echo'
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/blog/'.$row['thumb'].'" alt="img"></a>
                    
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">'.$row['title'].'</a></h4>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Know More</a>
                    </div>
                  </div>
                </div></div>';
  }}
                ?>

              
  
          

            </div></center>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->