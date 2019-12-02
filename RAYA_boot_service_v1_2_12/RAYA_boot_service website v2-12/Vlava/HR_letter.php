<?php
include_once('DBClass.php');
include_once('insert_robot_transaction.php');
$db=new DBClass();
$db->DBClass();
$conn = $db->DBClass();






function getPosts ()
{
    $posts= array();
    $posts[1] = isset($_POST['Emp_ID']) ? $_POST['Emp_ID'] : '';
    $posts[2] = isset($_POST['letter']) ? $_POST['letter'] : '';
    return $posts;
}

              
if(isset($_POST['insert']))
{

  
    $data = getPosts();
    $insert_Query = "INSERT INTO `hr_letter`(`Emp_ID`, `letter`, `status`) VALUES ('".$data[1]."','".$data[2]."','pending')";
    try{
        $insert_Result = mysqli_query($conn, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            { 
              $conn = $db->DBClass();
              $select_queue="SELECT * FROM hr_letter  ORDER BY `index` DESC LIMIT 1";
              $select_Result = mysqli_query($conn, $select_queue);
            if (mysqli_num_rows($select_Result) > 0) {
            while ($row = mysqli_fetch_array($select_Result, MYSQLI_ASSOC)) {
            $index=$row['index'];
            $test=new Insert_robot_transaction();
            $test->insert('1',$index);
            header('Location: Robot_responce.php');
    
            }
    
    
                 }
            else
            {
    
             echo "Query didn't return any result";
            }
           
              
            }else{
              echo 'data not saved';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
    
  }
?>








<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>Raya boot service/HR</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:80px; height:60px; background-color:rgba(0,0,0,0);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="index.html"><img data-0="width:155px;" data-300=" width:120px;" src="img/logo.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#section-about">About</a></li>
          </ul>
      </div>
    </div>
  </div>



  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">
        <h3>
        <div class="row mar-bot40">
            <form action="hr_letter.php" method="post">
                Emp_ID <input type="text" name="Emp_ID"><br><br>
                Letter <select name="letter">
                            <option value=""></option>
                            <option value="CIB_Arabic_Template">CIB_Arabic_Template</option>
                            <option value="CIB_English_Template">CIB_English_Template</option>
                            <option value="CIB_HR_Letter_Template">CIB_HR_Letter_Template</option>
                            <option value="Embassy_italy_Template">Embassy_italy_Template</option>
                            <option value="Embassy_KSA_Template">Embassy_KSA_Template</option>
                            <option value="Experience_male_Arabic_Template">Experience_male_Arabic_Template</option>
                            <option value="Experience_male_English_Template">Experience_male_English_Template</option>
                            <option value="To_whom_may_concern_Template">To_whom_may_concern_Template</option>
                            <option value="Experience_female_English_Template">Experience_female_English_Template</option>

                        </select><br><br>
                        <input type="submit" name="insert" value="Reguest">
                        <input type="button" name="cancel" value="Cancel" onclick="location.href='http://localhost:81/RAYA_boot_service/Vlava/HR.php#'">
            </form>
        </div>
        </h3>
    </div>






    </div>
    </div>
  </section>

 
 
 


  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
