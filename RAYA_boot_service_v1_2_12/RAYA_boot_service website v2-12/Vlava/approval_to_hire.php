

    <?php

$conn = mysqli_connect('localhost','root','','');

if(!$conn)
{
echo 'Connection error' . mysqli_connect_error();


}

function getPosts ()
{
    $posts= array();
    $posts[1] = isset($_POST['v_position']) ? $_POST['v_position'] : '';
    $posts[2] = isset($_POST['no_vac']) ? $_POST['no_vac'] : '';
    $posts[3] = isset($_POST['loc']) ? $_POST['loc'] : '';
    $posts[4] = isset($_POST['emp_type']) ? $_POST['emp_type'] : '';
    $posts[5] = isset($_POST['ann_plan']) ? $_POST['ann_plan'] : '';
    $posts[6] = isset($_POST['reason']) ? $_POST['reason'] : '';
    $posts[7] = isset($_POST['ann_plan']) ? $_POST['ann_plan'] : '';
    $posts[8] = isset($_POST['join_date']) ? $_POST['join_date'] : '';
    $posts[9] = isset($_POST['salary_range']) ? $_POST['salary_range'] : '';
    $posts[10] = isset($_POST['years_exp']) ? $_POST['years_exp'] : '';
    $posts[11] = isset($_POST['req_exp']) ? $_POST['req_exp'] : '';
    $posts[12] = isset($_POST['uploadfile']) ? $_POST['uploadfile'] : '';
    return $posts;

}
if(isset($_POST['insert']))
{
    $data = getPosts();
     $insert_Query = "INSERT INTO ``(`Emp_ID`, `letter`, `status`) VALUES ('".$data[1]."','".$data[2]."','pending')";
    try{
        $insert_Result = mysqli_query($conn, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
            }else{
                echo "<script type='text/javascript'>alert('Data Not saved!')</script>";
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
    
        <h4>
          <div class="row mar-bot40">
    <form  action="get_data.jsp"  method="post"  name="form2" enctype="multipart/form-data">
            <P>Request No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" value="" name="Request_No"/>
            </P>
            <P>Position &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" value="" name="position"/>
            </P>
            
      <P>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grade &nbsp;
      <input type="text" name="Grade"/>
      </P>
      <P>Direct Manager&nbsp; 
      <input type="text" name="manager"/></P>
      <P>Department &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="dept"/> </P>
      <P>Hiring Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="hire_date" onfocus="this.select();lcs(this)" onclick="displayCalendar(document.form2.hire_date,'dd-m-yyyy',this)"/></P>
      <P>
        <input type="radio" name="type" value="Replacement" onclick="show()"/>Replacement&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Addition" onclick="hide()"/>Addition&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="type" value="New Position" onclick="hide"/>New Position&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="type" value="Part-time" onclick="hide()"/>Part-time&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="type" value="Temporary" onclick="hide()"/>Temporary &nbsp;&nbsp;&nbsp;
        
      </P>
      <P>
       <label id="firstname"  style="visibility:hidden" >Replace by  </label> 
 
        <input type="text" id="replace_by" name="replace_by" style="visibility:hidden"/>
      </P>
      <P>Salary &nbsp;(100%) &nbsp;&nbsp;
      <input type="text" name="salary"/></P>
      <P>Fixed &nbsp;&nbsp;(%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
       <input type="text" name="fixed_perc" onchange="form2.fixed_le.value=(form2.salary.value)*(form2.fixed_perc.value)/100"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixed LE&nbsp;&nbsp;&nbsp;
      
      <input type="text" name="fixed_le" onchange="form2.fixed_perc.value=(form2.fixed_le.value)*100/(form2.salary.value)"/></P>
      <P>Variable &nbsp;&nbsp;(%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
         <input type="text" name="variable_perc" onchange="form2.variable_le.value=(form2.salary.value)*(form2.variable_perc.value)/100"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variable LE &nbsp;&nbsp;

      <input type="text" name="variable_le" onchange="form2.variable_perc.value=(form2.variable_le.value)*100/(form2.salary.value)"/>      </P>
      
      <P align="center">
      <input type="submit" value="Save" onclick=" 
          if((document.form2.fixed_perc.value *100/100)+(document.form2.variable_perc.value *100/100) > 100 )
          {
            alert('Invalid %');return false;
          }
          if((document.form2.fixed_perc.value *100/100)+(document.form2.variable_perc.value *100/100) <  100 )
          {
            alert('Invalid %');return false;
          }
          
           if( document.form2.type[0].checked == true ||  document.form2.type[1].checked == true||  document.form2.type[2].checked == true||  document.form2.type[3].checked == true||  document.form2.type[4].checked == true)       
          {}
           else
              { alert('Enter the type'); return false;}
              
            if(document.form2.type[0].checked == true)
            {
              if(document.form2.replace_by.value =='')
              {
                alert('Enter replacement by field');return false;
              }
            }
           if( document.form2.name.value == '')       
              { alert('Enter name '); return false;} 
           if( document.form2.position.value == '')       
              { alert('Enter the position'); return false;} 
           if( document.form2.manager.value == '')       
              { alert('Enter name of direct manager'); return false;} 
            if (document.form2.dept.value == '')    
              { alert('Enter the department'); return false; }           
            if (document.form2.hire_date.value == '')      
              { alert('Enter the hire date'); return false; }              
            if(document.frmIndex.request_id.value== '')
            { alert('Choose request number');  return false;}              
              if (document.form2.salary.value == '')      
             { alert('Enter the salary'); return false; }              
            if (document.form2.fixed_perc.value == '')          
              { alert('Enter the fixed %'); return false; }       
            if (document.form2.fixed_le.value == '')         
              { alert('Enter the fixed LE'); return false; }      
            if (document.form2.variable_perc.value == '')          
              { alert('Enter the variable %'); return false; }    
            if (document.form2.variable_le.value == '')        
             { alert('Enter the variable LE'); return false; }       
              
            if (document.form2.uploadfile.value='')
                { alert('Please attach the employee joining form'); return false; } 
          "/>                   
      </P>
      
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

