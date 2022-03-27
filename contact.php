<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
  <body> 
  <?php include 'inc/nav.php';
  
  $resp ="";
  if(isset($_POST['submit'])){
$author =$_POST['author'];
$from =$_POST['email'];
$subj =$_POST['subject'];
$comment =$_POST['comment'];



$to = "info@dihlizworldschool.com";
$subject = "Dihliz Contact Form";
$txt = "Message from Dihliz Website Contact Form:\r\n
From: ".$author."\r\n
Email: ".$from."\r\n
Subject: ".$subj."\r\n
Message: ".$comment."
";
$headers = "From: Dihliz Contact<no-reply-contact-form@example.com>" . "\r\n" .
"CC: info@dihlizworldschool.com";

mail($to,$subject,$txt,$headers);
$resp = '<div class="fx-alert success">We have recieved your message. Will get you as soon as possible.</div>';

  }
  
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
           <h2>Contact</h2>
           
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Get in Touch</h2>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <?php echo $resp; ?><br>
                  <form class="contactform" method="post">                  
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                <div>
                  <h3>Contact Now</h3>
                Phone: <b style="color:green;"> 0495 2963484</b> <br>
                Email: <b style="color:green;"> info@dihlizworldschool.com</b>
                 <br>
                </div> <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15642.769170101852!2d75.89270278704541!3d11.429865499648871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba668a6ac97fbbf%3A0x8f0dcbc58941b5cb!2sMarkaz%20Garden%20School%20Of%20Management%20Kozhikode!5e0!3m2!1sen!2sin!4v1614874047091!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

 <?php include'inc/footer.php'; ?>

  </body>
</html>