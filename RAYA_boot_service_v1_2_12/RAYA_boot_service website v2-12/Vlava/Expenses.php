    <?php

$conn = mysqli_connect('localhost','root','','');

if(!$conn)
{
echo 'Connection error' . mysqli_connect_error();


}

function getPosts ()
{
    $posts= array();
    $posts[1] = isset($_POST['Emp_ID']) ? $_POST['Emp_ID'] : '';
    $posts[2] = isset($_POST['Emp_name']) ? $_POST['Emp_name'] : '';
    $posts[3] = isset($_POST['Payment_types']) ? $_POST['Payment_types'] : '';
    $posts[4] = isset($_POST['Total_expenses']) ? $_POST['Total_expenses'] : '';
    $posts[5] = isset($_FILES['uploadfile']['name']) ? $_FILES['uploadfile']['name'] : '';
    return $posts;

}

if(isset($_POST['insert']))
{ 
   $data = getPosts();
   if(true){
    // Check if file was uploaded without errors
    if(isset($_FILES["uploadfile"]) && $_FILES["uploadfile"]["error"] == 0){
        //$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["uploadfile"]["name"];
        $filetype = $_FILES["uploadfile"]["type"];
        $filesize = $_FILES["uploadfile"]["size"];
    
        // Verify file extension
       /* $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");*/
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(TRUE){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["uploadfile"]["error"];
    }
}
  
  $insert_Query = "INSERT INTO `expenses`(`Emp_ID`, `Emp_name`, `Total_expenses`, `uploadfile`) VALUES ('".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
  try{
      $insert_Result = mysqli_query($conn, $insert_Query);
      
      if($insert_Result)
      {
          if(mysqli_affected_rows($conn) > 0)
          {  
            
          //header('Location: Expenses_Approval.php');
  
            
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
  <title>Raya boot service</title>
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
    <h2> <FONT color="#330099">&nbsp;<FONT color="#003399"><STRONG>Expenses request</STRONG></FONT> </FONT></h2>
        <h4>
          <div class="row mar-bot40">
          <form action="Expenses.php" method="post" name="R_Form" enctype="multipart/form-data">
      <DIV align="center">
        <table cellspacing="2" cellpadding="3" border="0" width="100%">
          
          <tr>
            <td width="12%">&nbsp;
          
            <td width="88%">
           <hr width="600" align="left" size="5" style="background-color:rgb(0,0,153);"/>
            </td>
          </tr>
          <tr>
            <td width="12%">&nbsp;
           
            <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>Employer ID</STRONG></FONT></FONT> </td>
            <td width="88%">
              <input type="text" name="Emp_ID">
            </td>
          </tr>
          <tr>
            <td width="12%">&nbsp;
           
            <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>Employer name</STRONG></FONT></FONT> </td>
            <td width="88%">
              <input type="text" name="Emp_name">
            </td>
          </tr>

          <tr>
            <td width="18%">&nbsp;&nbsp;&nbsp;
           
            <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>Payment types</STRONG></FONT></FONT> </td>
            <td width="88%">
              <select name="Payment_types">
                <option value="Mobile">Mobile</option>
                <option value="Transportation">Transportation</option>
                <option value="Business_Travel">Business Travel</option>
                <option value="Exam">Exam</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="18%">&nbsp;&nbsp;&nbsp;
           
            <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>Total expenses</STRONG></FONT></FONT> </td>
            <td width="88%">
              <input type="text" name="Total_expenses">
            </td>
          </tr>


          <tr>
            <td width="12%">
              <FONT color="#003399"><STRONG>&nbsp;&nbsp;</STRONG><STRONG>Attachment</STRONG> </FONT>
              </td>
            <td width="88%">
              <P>
                <input type="FILE"  name="uploadfile" size="70"/>
              </P>
              
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#003399"><STRONG>&nbsp;&nbsp;</STRONG><STRONG></STRONG> </FONT>
              </td>
            <td width="88%">
              <P>
                <input type="Submit" value="Submit" name="insert" size="70"/>
              </P>
              
            </td>
          </tr>


        </table>
      </DIV>
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

