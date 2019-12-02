<?php
include_once('DBClass.php');
include_once('insert_robot_transaction.php');
$conn = mysqli_connect('localhost','root','','raya_boot_service');

if(!$conn)
{
echo 'Connection error' . mysqli_connect_error();


}

function getPosts ()
{
    $posts= array();
    $posts[1] = isset($_POST['username']) ? $_POST['username'] : '';
    $posts[2] = isset($_POST['password']) ? $_POST['password'] : '';
    $posts[3] = isset($_POST['vacation']) ? $_POST['vacation'] : '';
    $posts[4] = isset($_POST['From']) ? $_POST['From'] : '';
    $posts[5] = isset($_POST['To']) ? $_POST['To'] : '';
    $posts[6] = isset($_POST['Telephone']) ? $_POST['Telephone'] : '';
    $posts[7] = isset($_POST['Other_information']) ? $_POST['Other_information'] : '';
    return $posts;

}
if(isset($_POST['insert']))
{
    $data = getPosts();
     $insert_Query = "INSERT INTO `vacation_form`(`vacation`, `From`, `To`, `Telephone`, `Other_information`, `username`, `password`) VALUES ('".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[1]."','".$data[2]."')";
    try{
 
      $insert_Result = mysqli_query($conn, $insert_Query);
        
        if($insert_Result)
        {
          if(mysqli_affected_rows($conn) > 0)
          { 
            $select_queue="SELECT * FROM vacation_form  ORDER BY `index` DESC LIMIT 1";
            $select_Result = mysqli_query($conn, $select_queue);
          if (mysqli_num_rows($select_Result) > 0) {
          while ($row = mysqli_fetch_array($select_Result, MYSQLI_ASSOC)) {
          $index=$row['index'];
          $test=new Insert_robot_transaction();
          $test->insert('3',$index);
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
  <title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <h4>
          <div class="row mar-bot40">
            <form action="vacation_form.php" method="post" >
            <tr>
            <td width="20%">&nbsp;&nbsp;
            <FONT color="#330099"><FONT color="#003399"> <STRONG>User name</STRONG></FONT></FONT>            </td>
            <td width="88%">
              <input type="text" name="username" size="15" value=""/>
            </td>
            <td width="20%">&nbsp;&nbsp;
            <FONT color="#330099"><FONT color="#003399"> <STRONG>password</STRONG></FONT></FONT>            </td>
            <td width="88%">
              <input type="password" name="password" size="15"/>
            </td>
          </tr><br><br>
           <td>
            vacation <select name="vacation">
                            <option value=""></option>
                            <option value="Annual">Annual</option>
                            <option value="Baby_care_Replacement">Baby care Replacement</option>
                            <option value="Business_Mission">Bussiness Mission</option>
                            <option value="Business_Travel(international)">Business Travel(international)</option>
                            <option value="Business_Travel(international)_CEO_only">Business Travel(international)_CEO only</option>
                            <option value="Business_Travel(local)">Business Travel(local)</option>
                            <option value="Business_Travel(local)_CEO_only">Business Travel(local)_CEO only</option>
                            <option value="CSR_Day">CSR Day</option>
                            <option value="Day_off">Day Off</option>
                            <option value="Day_off_working">Day Off working</option>
                            <option value="Death_leave(3Days)">Death leave (3 Days)</option>
                            <option value="Emergency">Emergency</option>
                            <option value="Exam_leave">Exam leave</option>
                            <option value="Holiday_working">Holiday working</option>
                            <option value="Kick_off_Day">Kick Off Day</option>
                            <option value="Management_seminar_Day">Management seminar Day</option>
                            <option value="Marrige(3Days)">Marrige(3 Days)</option>
                            <option value="Maternity">Maternity</option>
                            <option value="Military_service_leave">Military_service_leave</option>
                            <option value="Paternity(1Day)">Paternity(1 Day)</option>
                            <option value="Pilgrimage">Pilgrimage</option>
                            <option value="Public_Holiday">Public_Holiday</option>
                            <option value="RAC_trip_vacation">RAC_trip_vacation</option>
                            <option value="RCC_Attended_without_Access">RCC Attended without Access</option>
                           <option value="RCC_insource_Attendance">RCC insource Attendance</option>
                           <option value="Restaurant_Absence_With_Permission">Restaurant Absence With Permission</option>
                           <option value="Restaurant_Absence_Without_Permission">Restaurant Absence Without Permission</option>
                           <option value="Restaurant_Annual">Restaurant Annual</option>
                           <option value="Restaurant_Day_off_Working">Restaurant Day off Working</option>
                           <option value="Restaurant_Death_leave(3Days)">Restaurant Death leave(3 Days)</option>
                           <option value="Restaurant_Holiday_working">Restaurant Holiday working</option>
                           <option value="Restaurant_Sick_leave">Restaurant Sick leave</option>
                           <option value="Restaurant_Unpaid">Restaurant_Unpaid</option>
                           <option value="Restaurant_Work_injury">Restaurant Work injury</option>
                           <option value="Sick_leave">Sick leave</option>
                           <option value="Sick_leave_Hospitalization">Sick leave Hospitalization</option>
                        </select><br><br>
                        </td>
                        <td>
                       From <input type="date" name="From">
                       </td>
                       <td>
                       To <input type="date" name="To"><br><br>
                       </td>
                       Telephone <input type="text" name="Telephone"><br><br>
                       Other information <textarea rows="2" cols="50" name="Other_information">
                        </textarea><br><br>
                       <input type="submit" name="insert" value="submit">
                       <input type="button" name="cancel" value="Cancel" onclick="location.href='HR.php#'">
            </form>
           </div>
        </h4>
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
