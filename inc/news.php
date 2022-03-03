
  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>News & Events</h2>
            </div>
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">

<?php 
$newsSQL = "SELECT * FROM blog WHERE category = 'news'";
$newsRes = mysqli_query($fxConn, $newsSQL);

if(mysqli_num_rows($newsRes)>0){
  while($row=  mysqli_fetch_assoc($newsRes)){
    echo'
    <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/blog/'.$row['thumb'].'" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">'.$row['title'].'</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      
                    </div>
                    <div class="mu-blog-description">
                      <a class="mu-read-more-btn" href="#">Read More</a>
                    </div>
                  </article>
                </div>

    
    
    
    
    ';

    
  }
}
?>

                

               
                
              </div>
            </div>     
            <!-- end from blog content   -->   