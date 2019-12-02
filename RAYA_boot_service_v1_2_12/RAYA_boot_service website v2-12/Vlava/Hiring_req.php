

    <?php

include_once('DBClass.php');
$db=new DBClass();
$db->DBClass();
$conn = $db->DBClass();

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
     $insert_Query = "INSERT INTO `hiring_req`(`v_position`, `no_vac`, `loc`, `emp_type`, `ann_plan`, `reason`, `join_date`, `salary_range`, `years_exp`, `req_exp`, `uploadfile`) VALUES ('".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."')";
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
    <h2> <FONT color="#330099">&nbsp;<FONT color="#003399"><STRONG>Hiring request form</STRONG></FONT> </FONT></h2>
        <h4>
          <div class="row mar-bot40">
          <form action="Hiring_req.php" method="post" name="R_Form" enctype="multipart/form-data">
      <DIV align="center">
        <P>
          <FONT color="#000066"><FONT color="#000099"><STRONG>Request No:</STRONG></FONT> </FONT>
        <input type="text" name="max_req" value="" /></P>
        <table cellspacing="2" cellpadding="3" border="0" width="100%">
          
          <tr>
            <td width="12%">&nbsp;
          
            <td width="88%">
           <hr width="600" align="left" size="5" style="background-color:rgb(0,0,153);"/>
            </td>
          </tr>
          <tr>
            <td width="12%">&nbsp;
           
            <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>Vacant position</STRONG></FONT></FONT> </td>
            <td width="88%">
              <select name="v_position">
                <option value="Account Advisor">Account Advisor</option>
                <option value="Account Manager">Account Manager</option>
                <option value="Account Manager (Sales)">Account Manager (Sales)</option>
                <option value="Account Sales Manager">Account Sales Manager</option>
                <option value="Accountant">Accountant</option>
                <option value="Accountant (Treasury)">Accountant (Treasury)</option>
                <option value="Accounting Specialist">Accounting Specialist</option>
                <option value="Accounting Supervisor">Accounting Supervisor</option>
                <option value="Administration Assistant">Administration Assistant</option>
                <option value="Administration Assistant (Projects Control)">Administration Assistant (Projects Control)</option>
                <option value="Administration Clerk">Administration Clerk</option>
                <option value="Administration Coordinator">Administration Coordinator</option>
                <option value="Administration Supervisor">Administration Supervisor</option>
                <option value="Administrator">Administrator</option>
                <option value="Administrator (Customer Relation Center)">Administrator (Customer Relation Center)</option>
                <option value="Administrator (Human Resources)">Administrator (Human Resources)</option>
                <option value="Administrator (Information Technology)">Administrator (Information Technology)</option>
                <option value="Administrator (Operation)">Administrator (Operation)</option>
                <option value="Administrator (Project Management)">Administrator (Project Management)</option>
                <option value="Administrator (Projects)">Administrator (Projects)</option>
                <option value="Administrator (Purchasing)">Administrator (Purchasing)</option>
                <option value="Administrator (Quality Assurance)">Administrator (Quality Assurance)</option>
                <option value="Administrator (Sales Admin)">Administrator (Sales Admin)</option>
                <option value="Applications Consultant">Applications Consultant</option>
                <option value="Associate Project Manager">Associate Project Manager</option>
                <option value="Associate Project Manager (Project Management)">Associate Project Manager (Project Management)</option>
                <option value="Business Control Manager">Business Control Manager</option>
                <option value="Business Development Manager">Business Development Manager</option>
                <option value="Business Development Specialist">Business Development Specialist</option>
                <option value="Business Development Supervisor">Business Development Supervisor</option>
                <option value="Business Planning Supervisor">Business Planning Supervisor</option>
                <option value="Business Process Specialist">Business Process Specialist</option>
                <option value="Business Solution Manager">Business Solution Manager</option>
                <option value="Business Unit Manager">Business Unit Manager</option>
                <option value="Case Tools Manager">Case Tools Manager</option>
                <option value="CEO">CEO</option>
                <option value="Clerk">Clerk</option>
                <option value="Clerk (Purchasing)">Clerk (Purchasing)</option>
                <option value="Clerk (Stores)">Clerk (Stores)</option>
                <option value="Collector">Collector</option>
                <option value="Collector Supervisor">Collector Supervisor</option>
                <option value="Commissioning Manager">Commissioning Manager</option>
                <option value="Consultant">Consultant</option>
                <option value="Consultant (Network Professional Services)">Consultant (Network Professional Services)</option>
                <option value="COO (Sales & Presales)">COO (Sales &amp; Presales)</option>
                <option value="CRC Administrator">CRC Administrator</option>
                <option value="CRC Supervisor">CRC Supervisor</option>
                <option value="CS Field Manager">CS Field Manager</option>
                <option value="CS Team Leader">CS Team Leader</option>
                <option value="Customer Service Administrator">Customer Service Administrator</option>
                <option value="Customer Service Engineer">Customer Service Engineer</option>
                <option value="Customer Service Representative">Customer Service Representative</option>
                <option value="Customer Service Technician">Customer Service Technician</option>
                <option value="Customs Clearance Specialist">Customs Clearance Specialist</option>
                <option value="Deputy Manager (Warehouse)">Deputy Manager (Warehouse)</option>
                <option value="Director (Presales)">Director (Presales)</option>
                <option value="Director (Raya Network Services)">Director (Raya Network Services)</option>
                <option value="Director (Sales)">Director (Sales)</option>
                <option value="Draftsman (Technical Engineering)">Draftsman (Technical Engineering)</option>
                <option value="Driver">Driver</option>
                <option value="Engineer">Engineer</option>
                <option value="Engineer (Customer Service - Networks)">Engineer (Customer Service - Networks)</option>
                <option value="Engineer (Customer Services)">Engineer (Customer Services)</option>
                <option value="Engineer (Network Professional Services)">Engineer (Network Professional Services)</option>
                <option value="Engineer (Presales - ICT Infrastructure)">Engineer (Presales - ICT Infrastructure)</option>
                <option value="Engineer (Professional Services - Enterprise Management)">Engineer (Professional Services - Enterprise Management)</option>
                <option value="Engineer (Project Management)">Engineer (Project Management)</option>
                <option value="Executive (Business Control)">Executive (Business Control)</option>
                <option value="Executive (Customer Service)">Executive (Customer Service)</option>
                <option value="Executive (QC & HSE)">Executive (QC &amp; HSE)</option>
                <option value="Executive (Quality Assurance)">Executive (Quality Assurance)</option>
                <option value="Executive Secretary">Executive Secretary</option>
                <option value="Field Engineer">Field Engineer</option>
                <option value="Financial Analyst">Financial Analyst</option>
                <option value="General Manager">General Manager</option>
                <option value="General Manager- Enterprise Computing">General Manager- Enterprise Computing</option>
                <option value="General Manager, Business Solutions">General Manager, Business Solutions</option>
                <option value="General Manager, Customer Service">General Manager, Customer Service</option>
                <option value="General Manager, Operations">General Manager, Operations</option>
                <option value="H/W Manager">H/W Manager</option>
                <option value="H/W Senior Team Leader">H/W Senior Team Leader</option>
                <option value="H/W Team Leader">H/W Team Leader</option>
                <option value="HR Coordinator">HR Coordinator</option>
                <option value="Implementation Engineer">Implementation Engineer</option>
                <option value="Implementation Engineer (Network Services Commissioning)">Implementation Engineer (Network Services Commissioning)</option>
                <option value="Implementation Engineer (Technical Engineering)">Implementation Engineer (Technical Engineering)</option>
                <option value="Implementation Supervisor">Implementation Supervisor</option>
                <option value="Industry Solutions Specialist">Industry Solutions Specialist</option>
                <option value="Industry Team Leader">Industry Team Leader</option>
                <option value="Infrastructure Senior Coordinator">Infrastructure Senior Coordinator</option>
                <option value="Installation Coordinator">Installation Coordinator</option>
                <option value="Installation Supervisor">Installation Supervisor</option>
                <option value="INVENTORY MANAGER">INVENTORY MANAGER</option>
                <option value="IT Administrator">IT Administrator</option>
                <option value="IT System & Network Administrator">IT System &amp; Network Administrator</option>
                <option value="Jr. Accountant">Jr. Accountant</option>
                <option value="Key Account Manager - Sales">Key Account Manager - Sales</option>
                <option value="Key Account Manager (Sales)">Key Account Manager (Sales)</option>
                <option value="Key account Manger">Key account Manger</option>
                <option value="Key accounts manager">Key accounts manager</option>
                <option value="Maintenance Engineer">Maintenance Engineer</option>
                <option value="Major Accounts Manager (Sales)">Major Accounts Manager (Sales)</option>
                <option value="Manager (Accounting)">Manager (Accounting)</option>
                <option value="Manager (Business Solutions - Self Services)">Manager (Business Solutions - Self Services)</option>
                <option value="Manager (Customer Service - Networks)">Manager (Customer Service - Networks)</option>
                <option value="Manager (Customer Service)">Manager (Customer Service)</option>
                <option value="Manager (Finance)">Manager (Finance)</option>
                <option value="Manager (Implementation - ICT Infrastructure)">Manager (Implementation - ICT Infrastructure)</option>
                <option value="Manager (Information Systems)">Manager (Information Systems)</option>
                <option value="Manager (Logistics)">Manager (Logistics)</option>
                <option value="Manager (Network Professional Services)">Manager (Network Professional Services)</option>
                <option value="Manager (Network Services - Commissioning)">Manager (Network Services - Commissioning)</option>
                <option value="Manager (Network Services - Installation)">Manager (Network Services - Installation)</option>
                <option value="Manager (Presales - Hardware)">Manager (Presales - Hardware)</option>
                <option value="Manager (Presales - Multimedia Solutions)">Manager (Presales - Multimedia Solutions)</option>
                <option value="Manager (Presales - Network)">Manager (Presales - Network)</option>
                <option value="Manager (Presales - Security)">Manager (Presales - Security)</option>
                <option value="Manager (Presales)">Manager (Presales)</option>
                <option value="Manager (Professional Service - Information Security)">Manager (Professional Service - Information Security)</option>
                <option value="Manager (Professional Service - Telecom)">Manager (Professional Service - Telecom)</option>
                <option value="Manager (Professional Services - Infrastructure)">Manager (Professional Services - Infrastructure)</option>
                <option value="Manager (Quality Assurance & Business Control)">Manager (Quality Assurance &amp; Business Control)</option>
                <option value="Manager (Quality Management & Operations Control)">Manager (Quality Management &amp; Operations Control)</option>
                <option value="Manager (Sales)">Manager (Sales)</option>
                <option value="Manager (Technical Projects Management)">Manager (Technical Projects Management)</option>
                <option value="Manager (Treasury)">Manager (Treasury)</option>
                <option value="Marketing Assistant">Marketing Assistant</option>
                <option value="Marketing Executive">Marketing Executive</option>
                <option value="Marketing Specialist">Marketing Specialist</option>
                <option value="Messenger">Messenger</option>
                <option value="Microsoft Licensing Specialist">Microsoft Licensing Specialist</option>
                <option value="Network Manager">Network Manager</option>
                <option value="Network PS Manger">Network PS Manger</option>
                <option value="Network Supervisor">Network Supervisor</option>
                <option value="Network Systems Engineer">Network Systems Engineer</option>
                <option value="Networking Consultant">Networking Consultant</option>
                <option value="Networking Engineer">Networking Engineer</option>
                <option value="Networking PS Engineer">Networking PS Engineer</option>
                <option value="Networking PS Supervisor">Networking PS Supervisor</option>
                <option value="Nil">Nil</option>
                <option value="Office Boy">Office Boy</option>
                <option value="Office Clerk">Office Clerk</option>
                <option value="Office Manager">Office Manager</option>
                <option value="Officer">Officer</option>
                <option value="Officer (Projects)">Officer (Projects)</option>
                <option value="OPERATION GENERAL MANAGER">OPERATION GENERAL MANAGER</option>
                <option value="Operations Consultant">Operations Consultant</option>
                <option value="Operations Manager">Operations Manager</option>
                <option value="Oracle Data Base Administrator-RH 1">Oracle Data Base Administrator-RH 1</option>
                <option value="PC Support">PC Support</option>
                <option value="Practice Development Manager">Practice Development Manager</option>
                <option value="Presales Engineer">Presales Engineer</option>
                <option value="Presales Manager">Presales Manager</option>
                <option value="Presales Supervisor - Security & Enterprise Management Solut">Presales Supervisor -&nbsp;Security &amp; Enterprise Management Solut</option>
                <option value="PROCUREMENT SUPERVISOR">PROCUREMENT SUPERVISOR</option>
                <option value="Product Manager">Product Manager</option>
                <option value="Product Specialist">Product Specialist</option>
                <option value="Product Team Leader">Product Team Leader</option>
                <option value="Program Manager">Program Manager</option>
                <option value="Project Analyst">Project Analyst</option>
                <option value="Project Coordinator">Project Coordinator</option>
                <option value="Project Coordinator & Reporting Supervisor">Project Coordinator &amp; Reporting Supervisor</option>
                <option value="Project Leader">Project Leader</option>
                <option value="Project Management Manager">Project Management Manager</option>
                <option value="Project Manager">Project Manager</option>
                <option value="Project Manager (Project Management)">Project Manager (Project Management)</option>
                <option value="Project Supervisor">Project Supervisor</option>
                <option value="Project Supervisor (Project Management)">Project Supervisor (Project Management)</option>
                <option value="Projects Administrator">Projects Administrator</option>
                <option value="PS Supervisor">PS Supervisor</option>
                <option value="PS Team Leader">PS Team Leader</option>
                <option value="Purchasing Supervisor">Purchasing Supervisor</option>
                <option value="QA & Business Process Manager">QA &amp; Business Process Manager</option>
                <option value="Quality Control Manager">Quality Control Manager</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Regional Channels Manager">Regional Channels Manager</option>
                <option value="Representative (Customer Service - Maintenance)">Representative (Customer Service - Maintenance)</option>
                <option value="Resource Acquisition Coordinator">Resource Acquisition Coordinator</option>
                <option value="Sales Admin Helper">Sales Admin Helper</option>
                <option value="Sales Business Unit Manager, Finance & Banking Sector">Sales Business Unit Manager, Finance &amp; Banking Sector</option>
                <option value="Sales Director">Sales Director</option>
                <option value="Sales Engineer">Sales Engineer</option>
                <option value="Sales Manager">Sales Manager</option>
                <option value="Sales Manager- Telecommunications Sector">Sales Manager- Telecommunications Sector</option>
                <option value="Sales Rep.">Sales Rep.</option>
                <option value="Secretary">Secretary</option>
                <option value="Section Head (Human Resources)">Section Head (Human Resources)</option>
                <option value="Section Head (Purchasing)">Section Head (Purchasing)</option>
                <option value="Section Head (Vendor Management)">Section Head (Vendor Management)</option>
                <option value="Sector Manager – Manufacturing, Oil & Gas, and General Busin">Sector Manager &ndash; Manufacturing, Oil &amp; Gas, and General Busin</option>
                <option value="Sector Manager (Project Management)">Sector Manager (Project Management)</option>
                <option value="Sector Manager-Banking and Finance">Sector Manager-Banking and Finance</option>
                <option value="Security Specialist">Security Specialist</option>
                <option value="Security Team Leader">Security Team Leader</option>
                <option value="Senior Account Manager (Sales)">Senior Account Manager (Sales)</option>
                <option value="Senior Accountant">Senior Accountant</option>
                <option value="Senior Administrative Coordinator">Senior Administrative Coordinator</option>
                <option value="Senior Administrator">Senior Administrator</option>
                <option value="Senior Administrator (Customer Relation Center)">Senior Administrator (Customer Relation Center)</option>
                <option value="Senior Administrator (Procurement)">Senior Administrator (Procurement)</option>
                <option value="Senior Administrator (Projects)">Senior Administrator (Projects)</option>
                <option value="Senior Administrator (Projects-Audio Visual)">Senior Administrator (Projects-Audio Visual)</option>
                <option value="Senior Administrator (Purchasing)">Senior Administrator (Purchasing)</option>
                <option value="Senior Clerk">Senior Clerk</option>
                <option value="Senior Consultant">Senior Consultant</option>
                <option value="Senior Consultant (Professional Services - Security)">Senior Consultant (Professional Services - Security)</option>
                <option value="Senior Customer Service Engineer">Senior Customer Service Engineer</option>
                <option value="Senior Engineer (Customer Service - Networks)">Senior Engineer (Customer Service - Networks)</option>
                <option value="Senior Engineer (Customer Service)">Senior Engineer (Customer Service)</option>
                <option value="Senior Engineer (Network Professional Services)">Senior Engineer (Network Professional Services)</option>
                <option value="Senior Engineer (Presales - ICT Infrastructure)">Senior Engineer (Presales - ICT Infrastructure)</option>
                <option value="Senior Executive (Customer Service)">Senior Executive (Customer Service)</option>
                <option value="Senior Executive (Sales)">Senior Executive (Sales)</option>
                <option value="Senior Executive (SLM)">Senior Executive (SLM)</option>
                <option value="Senior Field Engineer">Senior Field Engineer</option>
                <option value="Senior Financial Analyst">Senior Financial Analyst</option>
                <option value="Senior HR Coordinator">Senior HR Coordinator</option>
                <option value="Senior Implementation Engineer (Network Services Commissioni">Senior Implementation Engineer (Network Services Commissioni</option>
                <option value="Senior Implementation Engineer (Software Development)">Senior Implementation Engineer (Software Development)</option>
                <option value="Senior Industry Specialist">Senior Industry Specialist</option>
                <option value="Senior Manager (Advanced Services)">Senior Manager (Advanced Services)</option>
                <option value="Senior Manager (Business Solutions - Audio Visual)">Senior Manager (Business Solutions - Audio Visual)</option>
                <option value="Senior Manager (Business Solutions - Self Services)">Senior Manager (Business Solutions - Self Services)</option>
                <option value="Senior Manager (Customer Service)">Senior Manager (Customer Service)</option>
                <option value="Senior Manager (Enterprise Computing)">Senior Manager (Enterprise Computing)</option>
                <option value="Senior Manager (Finance)">Senior Manager (Finance)</option>
                <option value="Senior Manager (Human Resources)">Senior Manager (Human Resources)</option>
                <option value="Senior Manager (Logistics & Regional Sales)">Senior Manager (Logistics &amp; Regional Sales)</option>
                <option value="Senior Manager (Network Professional Services)">Senior Manager (Network Professional Services)</option>
                <option value="Senior Manager (Presales - Multimedia Solutions)">Senior Manager (Presales - Multimedia Solutions)</option>
                <option value="Senior Manager (Presales Network)">Senior Manager (Presales Network)</option>
                <option value="Senior Manager (Project Management)">Senior Manager (Project Management)</option>
                <option value="Senior Manager (Sales)">Senior Manager (Sales)</option>
                <option value="Senior Network Engineer">Senior Network Engineer</option>
                <option value="Senior Office Clerk">Senior Office Clerk</option>
                <option value="Senior Officer (Personnel)">Senior Officer (Personnel)</option>
                <option value="Senior Officer (Personnel)">Senior Officer (Personnel)</option>
                <option value="Senior Presales Engineer">Senior Presales Engineer</option>
                <option value="Senior Procurement Coordinator">Senior Procurement Coordinator</option>
                <option value="Senior Project Analyst">Senior Project Analyst</option>
                <option value="Senior Project Coordinator">Senior Project Coordinator</option>
                <option value="Senior Project Manager">Senior Project Manager</option>
                <option value="Senior Representative (Customer Service - Maintenance)">Senior Representative (Customer Service - Maintenance)</option>
                <option value="Senior Representative (Customer Service)">Senior Representative (Customer Service)</option>
                <option value="Senior Sales Account Manager">Senior Sales Account Manager</option>
                <option value="Senior Software Developer">Senior Software Developer</option>
                <option value="Senior Specialist (Accountant)">Senior Specialist (Accountant)</option>
                <option value="Senior Specialist (Information Technology)">Senior Specialist (Information Technology)</option>
                <option value="Senior Specialist (Presales)">Senior Specialist (Presales)</option>
                <option value="Senior Specialist (Quality Assurance)">Senior Specialist (Quality Assurance)</option>
                <option value="Senior Supervisor (Technician-PS)">Senior Supervisor (Technician-PS)</option>
                <option value="Senior System Eng">Senior System Eng</option>
                <option value="Senior System Engineer">Senior System Engineer</option>
                <option value="Senior System Engineer (Presales - Hardware)">Senior System Engineer (Presales - Hardware)</option>
                <option value="Senior System Engineer (Presales – Multimedia Solutions)">Senior System Engineer (Presales &ndash; Multimedia Solutions)</option>
                <option value="Senior System Engineer (Presales - Network)">Senior System Engineer (Presales - Network)</option>
                <option value="Senior System Engineer (Presales - Security)">Senior System Engineer (Presales - Security)</option>
                <option value="Senior Systems Engineer">Senior Systems Engineer</option>
                <option value="Senior Team Leader">Senior Team Leader</option>
                <option value="Senior Technical Consultant">Senior Technical Consultant</option>
                <option value="Senior Technical Consultant (Business Solutions-Self Service">Senior Technical Consultant (Business Solutions-Self Service</option>
                <option value="Senior Technical Consultant (SW Technical Services)">Senior Technical Consultant (SW Technical Services)</option>
                <option value="Senior Technical Project Manager">Senior Technical Project Manager</option>
                <option value="Senior Technician">Senior Technician</option>
                <option value="Senior Technician (Customer Service)">Senior Technician (Customer Service)</option>
                <option value="Senior Technician (Network Services Installation)">Senior Technician (Network Services Installation)</option>
                <option value="Site Engineer">Site Engineer</option>
                <option value="Site Engineer (Network Services Installations)">Site Engineer (Network Services Installations)</option>
                <option value="Site Supervisor">Site Supervisor</option>
                <option value="Software Developer">Software Developer</option>
                <option value="Solution Architect Supervisor">Solution Architect Supervisor</option>
                <option value="Solutions Manager">Solutions Manager</option>
                <option value="Specialist (Accounting)">Specialist (Accounting)</option>
                <option value="Specialist (Credit)">Specialist (Credit)</option>
                <option value="Specialist (Networl Professional Services)">Specialist (Networl Professional Services)</option>
                <option value="Specialist (Procurement)">Specialist (Procurement)</option>
                <option value="Specialist (Purchasing)">Specialist (Purchasing)</option>
                <option value="Specialist (QC & HSE)">Specialist (QC &amp; HSE)</option>
                <option value="Specialist (Quality Assurance)">Specialist (Quality Assurance)</option>
                <option value="Sr. Administrator (Projects Control)">Sr. Administrator (Projects Control)</option>
                <option value="Sr. Administrator (Quality Assurance)">Sr. Administrator (Quality Assurance)</option>
                <option value="Sr. Consultant (Technical Engineering)">Sr. Consultant (Technical Engineering)</option>
                <option value="Sr. Engineer (Technical Engineering)">Sr. Engineer (Technical Engineering)</option>
                <option value="Sr. Executive (QC & HSE)">Sr. Executive (QC &amp; HSE)</option>
                <option value="Sr. Implementation Engineer">Sr. Implementation Engineer</option>
                <option value="Sr. Implementation Engineer (Implementation - ICT Infra)">Sr. Implementation Engineer (Implementation - ICT Infra)</option>
                <option value="Sr. Implementation Engineer (Network Services Commissioning)">Sr. Implementation Engineer (Network Services Commissioning)</option>
                <option value="Sr. Implementation Engineer (VDF Outsourcing)">Sr. Implementation Engineer (VDF Outsourcing)</option>
                <option value="Sr. Manager (Operations - ICT Infrastructure)">Sr. Manager (Operations - ICT Infrastructure)</option>
                <option value="Sr. Manager (Presales - ICT Infrastructure)">Sr. Manager (Presales - ICT Infrastructure)</option>
                <option value="Sr. Networking Engineer">Sr. Networking Engineer</option>
                <option value="Sr. Networking PS Engineer">Sr. Networking PS Engineer</option>
                <option value="Sr. Specialist (Business Control)">Sr. Specialist (Business Control)</option>
                <option value="Sr. System Engineer (Business Solutions - Audiovisual Tech.)">Sr. System Engineer (Business Solutions - Audiovisual Tech.)</option>
                <option value="Sr. Technician (Implementation - ICT Infrastructure)">Sr. Technician (Implementation - ICT Infrastructure)</option>
                <option value="Sr. Technician (Technical - Maintenance)">Sr. Technician (Technical - Maintenance)</option>
                <option value="Sr.Account Manager">Sr.Account Manager</option>
                <option value="Sr.HR Specialist">Sr.HR Specialist</option>
                <option value="Sr.Store Keeper (Warehouse)">Sr.Store Keeper (Warehouse)</option>
                <option value="Store Keeper">Store Keeper</option>
                <option value="Supervisor ( Business Solutions-Audiovisual Technology)">Supervisor ( Business Solutions-Audiovisual Technology)</option>
                <option value="Supervisor (Accounting)">Supervisor (Accounting)</option>
                <option value="Supervisor (Credit)">Supervisor (Credit)</option>
                <option value="Supervisor (Customer Service)">Supervisor (Customer Service)</option>
                <option value="Supervisor (Human Resources)">Supervisor (Human Resources)</option>
                <option value="Supervisor (Network Professional Services)">Supervisor (Network Professional Services)</option>
                <option value="Supervisor (Network Services Commissioning)">Supervisor (Network Services Commissioning)</option>
                <option value="Supervisor (Presales - Hardware)">Supervisor (Presales - Hardware)</option>
                <option value="Supervisor (Presales - ICT Infrastructure)">Supervisor (Presales - ICT Infrastructure)</option>
                <option value="Supervisor (Presales - Network)">Supervisor (Presales - Network)</option>
                <option value="Supervisor (Presales - Security)">Supervisor (Presales - Security)</option>
                <option value="Supervisor (Professional Services - Enterprise Management)">Supervisor (Professional Services - Enterprise Management)</option>
                <option value="Supervisor (professional Services)">Supervisor (professional Services)</option>
                <option value="Supervisor (Technical - Installations)">Supervisor (Technical - Installations)</option>
                <option value="Supervisor (Technician - Customer Service)">Supervisor (Technician - Customer Service)</option>
                <option value="Supervisor (Technician - Professional Services)">Supervisor (Technician - Professional Services)</option>
                <option value="Supervisor (Warehouse)">Supervisor (Warehouse)</option>
                <option value="Supervisor Engineer (Business Development)">Supervisor Engineer (Business Development)</option>
                <option value="Supervisor Technician (Business Solutions -Audiovisual Tech)">Supervisor Technician (Business Solutions -Audiovisual Tech)</option>
                <option value="Supervisor Technician (Implementation - ICT Infrastructure)">Supervisor Technician (Implementation - ICT Infrastructure)</option>
                <option value="Supervisor Technician (Technical - Maintenance)">Supervisor Technician (Technical - Maintenance)</option>
                <option value="SW Technical Manager">SW Technical Manager</option>
                <option value="System Administrator">System Administrator</option>
                <option value="System Engineer">System Engineer</option>
                <option value="System Engineer (Business Solution - Self Service)">System Engineer (Business Solution - Self Service)</option>
                <option value="System Engineer (Business Solutions - Audiovisual Tech.)">System Engineer (Business Solutions - Audiovisual Tech.)</option>
                <option value="System Engineer (Presales - Hardware)">System Engineer (Presales - Hardware)</option>
                <option value="System Engineer (Presales - Network)">System Engineer (Presales - Network)</option>
                <option value="System Engineer (Presales - Security)">System Engineer (Presales - Security)</option>
                <option value="System Engineer (Professional Services - Information Securit">System Engineer (Professional Services - Information Securit</option>
                <option value="System Engineer (Software Technical Services)">System Engineer (Software Technical Services)</option>
                <option value="System integration supervisor">System integration supervisor</option>
                <option value="System Support Specialist">System Support Specialist</option>
                <option value="Team Leader">Team Leader</option>
                <option value="Team Leader (Audio Visual Presales)">Team Leader (Audio Visual Presales)</option>
                <option value="Team Leader (Customer Service)">Team Leader (Customer Service)</option>
                <option value="Team Leader (Network Professional Services)">Team Leader (Network Professional Services)</option>
                <option value="Team Leader (Network Services Commissioning)">Team Leader (Network Services Commissioning)</option>
                <option value="Team Leader (Presales - Enterprise Management)">Team Leader (Presales - Enterprise Management)</option>
                <option value="Team Leader (Presales - Hardware)">Team Leader (Presales - Hardware)</option>
                <option value="Team Leader (Presales - ICT Infrastructure)">Team Leader (Presales - ICT Infrastructure)</option>
                <option value="Team Leader (Presales - Multimedia Solutions)">Team Leader (Presales - Multimedia Solutions)</option>
                <option value="Team Leader (Presales - Network)">Team Leader (Presales - Network)</option>
                <option value="Team Leader (Presales - Security)">Team Leader (Presales - Security)</option>
                <option value="Team Leader (Presales)">Team Leader (Presales)</option>
                <option value="Team Leader (Professional Services - Enterprise Management)">Team Leader (Professional Services - Enterprise Management)</option>
                <option value="Team Leader (Professional Services - Information Security)">Team Leader (Professional Services - Information Security)</option>
                <option value="Team Leader (SW Technical Services)">Team Leader (SW Technical Services)</option>
                <option value="Team Leader (Technical - installations)">Team Leader (Technical - installations)</option>
                <option value="Team leader (Warehouse)">Team leader (Warehouse)</option>
                <option value="Team Leader Engineer (Emersom Outsourcing)">Team Leader Engineer (Emersom Outsourcing)</option>
                <option value="Team Leader Engineer (Implementation - ICT Infrastructure)">Team Leader Engineer (Implementation - ICT Infrastructure)</option>
                <option value="Team Leader Engineer (Presales - ICT Infrastructure)">Team Leader Engineer (Presales - ICT Infrastructure)</option>
                <option value="Team Leader Engineer (Technical - Maintenance)">Team Leader Engineer (Technical - Maintenance)</option>
                <option value="Team Leader Engineer (Technical Engineering)">Team Leader Engineer (Technical Engineering)</option>
                <option value="Team Leader Technician (Implementation - ICT Infrastructure)">Team Leader Technician (Implementation - ICT Infrastructure)</option>
                <option value="Team Leader Technician (Technical - Maintenance)">Team Leader Technician (Technical - Maintenance)</option>
                <option value="Team Leader, Technical Implementations">Team Leader, Technical Implementations</option>
                <option value="Technical Consultant">Technical Consultant</option>
                <option value="Technical Consultant (Software Technical Services)">Technical Consultant (Software Technical Services)</option>
                <option value="Technical Development Manager">Technical Development Manager</option>
                <option value="Technical Project Manager">Technical Project Manager</option>
                <option value="Technical Project Supervisor">Technical Project Supervisor</option>
                <option value="Technical Projects Manager">Technical Projects Manager</option>
                <option value="Technical Sales HP computing Solutions">Technical Sales HP computing Solutions</option>
                <option value="Technical Services Manager">Technical Services Manager</option>
                <option value="Technical Support Team Leader">Technical Support Team Leader</option>
                <option value="Technician">Technician</option>
                <option value="Technician (Customer Service)">Technician (Customer Service)</option>
                <option value="Technician (Implementation - ICT Infrastructure)">Technician (Implementation - ICT Infrastructure)</option>
                <option value="Technician (Network Services - Installation)">Technician (Network Services - Installation)</option>
                <option value="Technician (Technical - Maintenance)">Technician (Technical - Maintenance)</option>
                <option value="Technician Team Leader">Technician Team Leader</option>
                <option value="Treasury & Credit Manager">Treasury &amp; Credit Manager</option>
                <option value="Treasury Specialist">Treasury Specialist</option>
                <option value="Vice Chairman & COO">Vice Chairman &amp; COO</option>
                <option value="Warehouse Keeper">Warehouse Keeper</option>
                <option value="Warehouse Supervisor">Warehouse Supervisor</option>
              </select>
            </td>
          </tr>
          <tr>
            <td width="20%">&nbsp;&nbsp;
            <FONT color="#330099"><FONT color="#003399"> <STRONG>No. of vacancies</STRONG></FONT></FONT>            </td>
            <td width="88%">
              <input type="text" name="no_vac" size="5"/>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#330099">&nbsp;&nbsp;<FONT color="#003399"> <STRONG>Location</STRONG></FONT></FONT>
            </td>
            <td width="88%">
              <input type="text" name="loc"/>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <STRONG><FONT color="#330099">&nbsp;&nbsp;<FONT color="#003399">Type of employment</FONT></FONT></STRONG>
            </td>
            <td width="88%">
              <select name="emp_type">
                <option value="Full time">Full time</option>
                <option value="Project">Project</option>
                <option value="Trainee">Trainee</option>
                <option value="Casual">Casual</option>
              </select>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#003399">&nbsp; <STRONG>&nbsp;In annual plan</STRONG></FONT>
                        </td>
            <td width="88%">
              <input type="radio" name="ann_plan" value="1"  onclick="disable_reason(reason)" checked/>Yes 
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" 
                  name="ann_plan" value="0" onclick="enable_reason(reason)"/>No
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#330099">&nbsp;<FONT color="#003399">&nbsp; <STRONG>Justify</STRONG></FONT> </FONT>
            </td>
            <td width="88%">
              <input type="text" size="75" name="reason" disabled/>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#330099">&nbsp;<FONT color="#003399"> <STRONG>&nbsp;Required joining date</STRONG></FONT></FONT>
            </td>
            <td width="88%">
              <input name="join_date" onfocus="this.select();lcs(this)" onclick="displayCalendar(document.R_Form.join_date,'dd-m-yyyy',this)"/>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#330099"><FONT color="#003399"><STRONG>&nbsp;&nbsp;Salary  expected</STRONG> </FONT></FONT>
</td>
            <td width="88%">
              <input type="text" name="salary_range"/>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#003399">&nbsp; </FONT>
            <STRONG><FONT color="#003399">&nbsp;Years of Experience</FONT></STRONG></td>
            <td width="88%">
              <input type="TEXT" name="years_exp"/> &nbsp;
              
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#003399"><STRONG>&nbsp;&nbsp;Relevant Experience</STRONG></FONT>
            </td>
            <td width="88%">
              <P><textarea rows="3"  cols="40" name="rel_exp"></textarea>
              </P>
            </td>
          </tr>
          <tr>
            <td width="12%">&nbsp;
            <FONT color="#003399"> <STRONG>&nbsp;Required courses covered by the candidate</STRONG></FONT>            </td>
            <td width="88%">
              <textarea rows="3"  cols="40" name="req_exp" ></textarea>
            </td>
          </tr>
          <tr>
            <td width="12%">
              <FONT color="#003399"><STRONG>&nbsp;&nbsp;</STRONG><STRONG>Job description file</STRONG> </FONT>
              </td>
            <td width="88%">
              <P>
                <input type="FILE" value="Submit" name="uploadfile" size="70"/>
              </P>
              
            </td>
          </tr>
        </table>
      </DIV>
      <DIV align="center">
        <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <STRONG><FONT color="#330099">
            <input   type="submit" name="insert" value="Save" onclick="       
            if (document.R_Form.v_position.value == '')          { alert('Enter The Vacant Position'); return false; }         
            if( document.R_Form.no_vac.value == '')         { alert('Enter number of vacancies'); return false;}        
            if (document.R_Form.emp_type.value == '')          { alert('Enter type of employment'); return false; }       
            if (document.R_Form.join_date.value == '')          { alert('Enter required joining date'); return false; }         
            if (document.R_Form.salary_range.value == '')          { alert('Enter salary range expected'); return false; }       
            if (document.R_Form.years_exp.value == '')          { alert('Enter years of experience'); return false; }          
            if (document.R_Form.rel_exp.value == '')          { alert('Enter relevant experience'); return false; }    
            if (document.R_Form.req_exp.value == '')         { alert('Enter required courses'); return false; }          
            if (document.R_Form.ann_plan[1].checked == true)    
            {              
            if (document.R_Form.reason.value == '')       
            {              
            alert('You must justify the reason'); return false;       
            }      
            }
            if (!isInteger(document.R_Form.no_vac.value)) {alert('Number of vacanies must be integer'); return false; }
            if (!isInteger(document.R_Form.years_exp.value)) {alert('Years of experience must be integer'); return false; }
            if (!isInteger(document.R_Form.salary_range.value)) {alert('Salary range must be integer'); return false; }            
            " size="30" style="font-size:13.0pt; color:rgb(0,51,153);"/>
          </FONT>
        </STRONG>
        </P>
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

