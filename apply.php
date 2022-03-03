<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php';
?>
<style>
    form h3, form h4 {
        color: #0B9444;
    }




</style>
<body>
    <?php include 'inc/nav.php';
    $response = '';
function mailForm($body){
$to = "info@dihlizworldschool.com";
$subject = "Dihliz | New Admission";

$message = '<html>
<head>
<title>Dihliz | New Admission</title>
</head>
<body>
'.$body.'
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Dihliz Admission Department<no-reply-admission@dihlizworldschool.com>' . "\r\n";
$headers .= 'Cc: info@dihlizworldschool.com' . "\r\n";

mail($to,$subject,$message,$headers);

}



    if(isset($_POST['submit'])){
$course = mysqli_real_escape_string($fxConn,  $_POST['course']);
$name = mysqli_real_escape_string($fxConn,  $_POST['name']);
$father = mysqli_real_escape_string($fxConn,  $_POST['father']);
$fatherOcc = mysqli_real_escape_string($fxConn,  $_POST['fatherOcc']);
$mother = mysqli_real_escape_string($fxConn,  $_POST['mother']);
$motherOcc = mysqli_real_escape_string($fxConn,  $_POST['motherOcc']);
$motherTongue = mysqli_real_escape_string($fxConn,  $_POST['motherTongue']);
$dob = mysqli_real_escape_string($fxConn,  $_POST['dob']);
$email = mysqli_real_escape_string($fxConn,  $_POST['email']);
$permAddress = mysqli_real_escape_string($fxConn,  $_POST['permAddress']);
$commAddress = mysqli_real_escape_string($fxConn,  $_POST['commAddress']);
$phone1 = mysqli_real_escape_string($fxConn,  $_POST['phone1']);
$phone2 = mysqli_real_escape_string($fxConn,  $_POST['phone2']);
$whatsapp = mysqli_real_escape_string($fxConn,  $_POST['whatsapp']);
$examName = mysqli_real_escape_string($fxConn,  $_POST['examName']);
$examBoard = mysqli_real_escape_string($fxConn,  $_POST['examBoard']);
$passYear = mysqli_real_escape_string($fxConn,  $_POST['passYear']);
$schoolStudied = mysqli_real_escape_string($fxConn,  $_POST['schoolStudied']);
$schoolPlace = mysqli_real_escape_string($fxConn,  $_POST['schoolPlace']);
// $Lang1 = mysqli_real_escape_string($fxConn,  $_POST['Lang1']);
// $Lang2 = mysqli_real_escape_string($fxConn,  $_POST['Lang2']);
// $English = mysqli_real_escape_string($fxConn,  $_POST['English']);
// $Hindi = mysqli_real_escape_string($fxConn,  $_POST['Hindi']);
// $SocialScience = mysqli_real_escape_string($fxConn,  $_POST['SocialScience']);
// $Physics = mysqli_real_escape_string($fxConn,  $_POST['Physics']);
// $Chemistry = mysqli_real_escape_string($fxConn,  $_POST['Chemistry']);
// $Biology = mysqli_real_escape_string($fxConn,  $_POST['Biology']);
// $Maths = mysqli_real_escape_string($fxConn,  $_POST['Maths']);
// $IT = mysqli_real_escape_string($fxConn,  $_POST['IT']);
$mdExamName = mysqli_real_escape_string($fxConn,  $_POST['mdExamName']);
$mdExamBoard = mysqli_real_escape_string($fxConn,  $_POST['mdExamBoard']);
$mdPassYear = mysqli_real_escape_string($fxConn,  $_POST['mdPassYear']);
$madrasaStudied = mysqli_real_escape_string($fxConn,  $_POST['madrasaStudied']);
$mdPlace = mysqli_real_escape_string($fxConn,  $_POST['mdPlace']);
$surahMemorized = mysqli_real_escape_string($fxConn,  $_POST['surahMemorized']);


$contents = '
Course: <b>'.$course.'</b><br>
<h3>Personal Details:</h3>
Full Name: <b>'.$name.'</b><br>
Father Name: <b>'.$father.'</b><br>
Father Occupation: <b>'.$fatherOcc.'</b><br>
Mother Name: <b>'.$mother.'</b><br>
Mother Occupation: <b>'.$motherOcc.'</b><br>
Mother Tongue: <b>'.$motherTongue.'</b><br>
Date of Birth: <b>'.$dob.'</b><br><br>

<h3>Contact Details:</h3>
Email: <b>'.$email.'</b><br>
Permanent Address: <b>'.$permAddress.'</b><br>
Communication Address: <b>'.$commAddress.'</b><br>
Phone 1: <b>'.$phone1.'</b><br>
Phone 2: <b>'.$phone2.'</b><br>
WhatsApp No: <b>'.$whatsapp.'</b><br>

<h3> Details of Qualifying Examination:</h3>
Name of Examination: <b>'.$examName.'</b><br>
Exam Board: <b>'.$examBoard.'</b><br>
Year of Passing: <b>'.$passYear.'</b><br>
schoolStudied: <b>'.$schoolStudied.'</b><br>
Place: <b>'.$schoolPlace.'</b><br>


<h3>Details of Islamic Education:</h3>
Name of Examination: <b>'.$mdExamName.'</b><br>
Board: <b>'.$mdExamBoard.'</b><br>
Year of passing: <b>'.$mdPassYear.'</b><br>
Name of Madrassa studied: <b>'.$madrasaStudied.'</b><br>
Place: <b>'.$mdPlace.'</b><br>
Suras Memorized: <b>'.$surahMemorized.'</b><br>

';


/*
<h4>Grades obtained in the examination</h4>
Lang1: <b>'.$Lang1.'</b><br>
Lang2: <b>'.$Lang2.'</b><br>
English: <b>'.$English.'</b><br>
Hindi: <b>'.$Hindi.'</b><br>
Social Science: <b>'.$SocialScience.'</b><br>
Physics: <b>'.$Physics.'</b><br>
Chemistry: <b>'.$Chemistry.'</b><br>
Biology: <b>'.$Biology.'</b><br>
Maths: <b>'.$Maths.'</b><br>
IT: <b>'.$IT.'</b><br><br>

*/
mailForm($contents);
$userBody = "
<p>You have successfully submitted your application. Our admission head will contact you soon.</p>
<br>
<br>
Regards<br><b>Dihliz World School</b><br>Markaz Garden<br>Poonoor, Calicut, Kerala";
$userSubnject = "Dihliz World School Admission";
$userHeaders = "MIME-Version: 1.0" . "\r\n";
$userHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$userHeaders .= 'From: Dihliz Admission Department<info@dihlizworldschool.com>' . "\r\n";
$userHeaders .= 'Reply-to: info@dihlizworldschool.com' . "\r\n";

mail($email,$userSubnject,$userBody,$userHeaders);


$sql = "
INSERT INTO admission(course, name, father, fatherOcc, mother, 
motherOcc, motherTongue, dob, permAddress, commAddress, phone1, 
phone2, whatsapp, examName, examBoard, passYear, schoolStudied,
schoolPlace, mdExamName,mdExamBoard,mdPassYear, 
madrasaStudied, mdPlace, surahMemorized)
VALUES('$course','$name', '$father', '$fatherOcc', '$mother', 
'$motherOcc', '$motherTongue', '$dob', '$permAddress', '$commAddress', '$phone1', 
'$phone2', '$whatsapp', '$examName', '$examBoard', '$passYear', '$schoolStudied',
'$schoolPlace', '$mdExamName','$mdExamBoard','$mdPassYear', 
'$madrasaStudied', '$mdPlace', '$surahMemorized')
";
if(mysqli_query($fxConn, $sql))
{
$response = '<div class="fx-alert success">Your application is sent to us. Will get you soon.</div>';
}
else{
    $response = '<div class="fx-alert warning">Something went wrong! Please re-check your form or ty again later.</div>';
}
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
                        <h2>Apply at Dihliz</h2>

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
                            <h2>Apply at Dihliz World School</h2>
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <?php echo $response; ?> <br>
                                        <form class="contactform" method="post">
                                            <p>
                                                <label for="author">Course Applied </label>
                                                <select name="course" id="course" style="width: 100%;height:35px;">
                                                    <option value="High School 8th">High School 8th</option>
                                                    <option value="High School 9th">High School 9th</option>
                                                    <option value="HSS Commerce">HSS Commerce</option>
                                                    <option value="HSS Science">HSS Science</option>
                                                </select>
                                            </p> <br>
                                            <h3>Personal Details</h3>
                                            <p>
                                                <label for="name">Full Name </label>
                                                <input type="text" required="required" size="30" value="" name="name">
                                            </p>
                                            <p>
                                                <label for="father">Father's Name </label>
                                                <input type="text" required="required" size="30" value="" name="father">
                                            </p>
                                            <p>
                                                <label for="fatherOcc">Father's Occupation </label>
                                                <input type="text" required="required" size="30" value="" name="fatherOcc">
                                            </p>
                                            <p>
                                                <label for="mother">Mother's Name </label>
                                                <input type="text" required="required" size="30" value="" name="mother">
                                            </p>
                                            <p>
                                                <label for="motherOcc">Mother's Occupation </label>
                                                <input type="text" required="required" size="30" value="" name="motherOcc">
                                            </p>
                                            <p>
                                                <label for="motherTongue">Mother Tongue </label>
                                                <input type="text" required="required" size="30" value="" name="motherTongue">
                                            </p>
                                            <p>
                                                <label for="dob">Date of Birth </label>
                                                <input type="date" id="dob"  name="dob" required="required" size="30" style="width: 100%;height:35px;">

                                            </p>

                                            <!-- CONTACT DETAILS -->
                                            <h3>Contact Details</h3>
                                            <p>
                                                <label for="email">Email</label>
                                                <input type="text" required="required" size="30"  name="email">
                                            </p>
                                            <label for="permAddress">Permanent Address</label>
                                            <textarea required="required" aria-required="true" rows="4" cols="45" name="permAddress"></textarea>
                                            </p>
                                            <p>
                                                <label for="commAddress">Communication Address</label>
                                                <textarea required="required" aria-required="true" rows="4" cols="45" name="commAddress"></textarea>
                                            </p>


                                            <p>
                                                <label for="phone1">Phone 1</label>

                                                <input type="text" required="required" size="30" value="" name="phone1">
                                            </p>
                                            <p>
                                                <label for="phone2">Phone 2</label>
                                                <input type="text" required="required" size="30" value="" name="phone2">
                                            </p>
                                            <p>
                                                <label for="whatsapp">Whatsapp No.</label>
                                                <input type="text" required="required" size="30" value="" name="whatsapp">
                                            </p>
                                            <!--  Details of Qualifying Examination Begins	 -->
                                            <h3> Details of Qualifying Examination </h3>

                                            <p>
                                                <label for="examName">Name of Examination</label>
                                                <input type="text" required="required" size="30" value="" name="examName">
                                            </p>
                                            <p>
                                                <label for="examBoard">Board</label>
                                                <input type="text" required="required" size="30" value="" name="examBoard">
                                            </p>
                                            <p>
                                                <label for="passYear">Year of Passing</label>
                                                <input type="text" required="required" size="30" value="" name="passYear">
                                            </p>
                                            <p>
                                                <label for="schoolStudied">Name of School Studied </label>
                                                <input type="text" required="required" size="30" value="" name="schoolStudied">
                                            </p>
                                            <p>
                                                <label for="schoolPlace">Place</label>
                                                <input type="text" required="required" size="30" value="" name="schoolPlace">
                                            </p>
                                            <!-- Grades obtained in the examination Begins
<h4>Grades obtained in the examination</h4>
<p><label for="Lang1">Language 1</label>
<input type="text" size="30" value="" name="Lang1"></p>

<p><label for="Lang2">Language 2</label>
<input type="text" size="30" value="" name="Lang2"></p>

<p><label for="English">English</label>
<input type="text" size="30" value="" name="English"></p>

<p><label for="Hindi">Hindi</label>
<input type="text" size="30" value="" name="Hindi"></p>

<p><label for="SocialScience">Social Science</label>
<input type="text" size="30" value="" name="SocialScience"></p>

<p><label for="Physics">Physics</label>
<input type="text" size="30" value="" name="Physics"></p>

<p><label for="Chemistry">Chemistry</label>
<input type="text" size="30" value="" name="Chemistry"></p>

<p><label for="Biology">Biology</label>
<input type="text" size="30" value="" name="Biology"></p>

<p><label for="Maths">Maths</label>
<input type="text" size="30" value="" name="Maths"></p>

<p><label for="IT">IT</label>
<input type="text" size="30" value="" name="IT"></p> -->

<!-- Grades obtained in the examination Ends -->
<!-- Details of Qualifying Examination Ends -->

<!-- Details of Islamic Education Begins -->
<h3>Details of Islamic Education</h3>
<p>
                                                <label for="mdExamName">Name of Examination</label>
                                                <input type="text" required="required" size="30" value="" name="mdExamName">
                                            </p>
                                            <p>
                                                <label for="mdExamBoard">Board</label>
                                                <input type="text" required="required" size="30" value="" name="mdExamBoard">
                                            </p>
                                            <p>
                                                <label for="mdPassYear">Year of Passing</label>
                                                <input type="text" required="required" size="30" value="" name="mdPassYear">
                                            </p>
                                            <p>
                                                <label for="madrasaStudied">Name of Madrasa Studied </label>
                                                <input type="text" required="required" size="30" value="" name="madrasaStudied">
                                            </p>
                                            <p>
                                                <label for="mdPlace">Place</label>
                                                <input type="text" required="required" size="30" value="" name="mdPlace">
                                            </p>
                                            <p>
                                                <label for="surahMemorized">How many Suras of the Qur’an Memorized</label>
                                                <input type="number" required="required" size="30" value="" name="surahMemorized"  style="width: 100%;height:35px;">
                                            </p><br>
<p style="color:#0B9444;">
    <input type="checkbox" name="declaration" id="" required>
I hereby solemnly affirm and declare that all the information provided in this form are true and correct. </p>
                                            <!-- SUBMIT FORM -->

                                            <p class="form-submit">
                                                <input type="submit" value="Submit" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
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








</body>

</html>