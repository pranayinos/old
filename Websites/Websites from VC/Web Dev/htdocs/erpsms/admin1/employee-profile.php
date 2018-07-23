<?php
$emp = new Main(); // create a new news object
$email=$_GET[email];
$newsRecord = $emp->getdata('*',"emp","emp_email='$email'","", "");
$record = $newsRecord->getNextRecord();


$code=$record[emp_dept_code];

$emp_dept=new Main();
$newsRecord1 = $emp_dept->getdata('dept_desc',"emp_dept","dept_code='$code'","", "");
$record1 = $newsRecord1->getNextRecord();

$code1=$record[emp_cat_type];
$emp_category=new Main();
$newsRecord2 = $emp_category->getdata('emp_cat_type',"emp_category","emp_cat_id='$code1'","", "");
$record2 = $newsRecord2->getNextRecord();

$code2=$record[emp_cat_posn];
$emp_position=new Main();
$newsRecord3 = $emp_position->getdata('emp_posn',"emp_position","emp_posn_id='$code2'","", "");
$record3 = $newsRecord3->getNextRecord();

$code3=$record[emp_grade];

$emp_grade=new Main();
$newsRecord4 = $emp_grade->getdata('grade_name',"emp_grade","grade_id='$code3'","", "");
$record4 = $newsRecord4->getNextRecord();

if($record[emp_gender]=='1')
{
$gen="Male";
}
else
{
$gen="Female";
}

if($record[emp_status]=='1')
{
$st="Active";
}
else
{
$st="Inactive";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_profile.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 



<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Profile</h1>
  <h3>Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="nav">
  <ul>
    <li>
      <a href="#" class="drops" id="link_one">Profile ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="#">General</a></li>
        <li><a href="#">Personal</a></li>
        <li><a href="#">Address</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Bank Info</a></li>
        <li><a href="#">Additional Info</a></li>
      </ul>
    </li>

    
      
        <li>
          <a href="#" class="drops" id="link_two">Salary ▼</a>
          <ul id="box_two" class="scriptaculously" style="display:none;">
            <li><a href="?page=profile_emp_payroll">Payroll</a></li>
            <li><a href="?page=profile_emp_payslip">Payslip</a></li>
          </ul>
        </li>
      
   <li>
          <a href="#" class="drops" id="link_three">Leaves ▼</a>
          <ul id="box_three" class="scriptaculously" style="display:none;">
            <li><a href="?page=profile_emp_leave">Attendance</a></li>
          </ul>
        </li>

      
    <li>
      <a href="#">Delete</a>
      </li>
    
    <li>
      <a href="#" class="drops" id="link_four">More▼</a>
          <ul id="box_four" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=profile_emp_library_deatils">Library</a></li>
        
          <li><a href="?page=profile_emp_transport">Transport</a></li>
        
      </ul>
    </li>
  </ul>

</div>




<div id="fullpage-yield">
  <div id="employee_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Default_employee" src="../images/HR/default_employee.png">
      
    </div>

    <div id="employee_main_info">
      <h3> <?=$record['emp_first_name'].' '.$record['emp_mid_name'].' '.$record['emp_last_name'];?>   </h3>
      <h4> Employee ID : <?=$record['emp_no'];?> </h4>
    </div>

    <div id="profile-general-info">


    </div>
    <div class="extender"></div>

  </div>




  <div id="profile-infos">
    

<div class="profile_top_banner">
  <span class="profile">Details</span>
  <img alt="Topbanner" src="../images/master_student/profile/topbanner.png"></div>

<table width="700">
  <tbody><tr class="odd left"><td>Joining date</td><td class="right"><?=$record['emp_join_date'];?></td></tr>
  <tr class="even left"><td>Department</td><td class="right"><?=$record1['dept_desc'];?></td></tr>
  <tr class="odd left"><td>Category</td><td class="right"><?=$record2[emp_cat_type];?> </td></tr>
  <tr class="even left"><td>Position</td><td class="right"><?=$record3[emp_posn];?></td></tr>

  <tr class="odd left"><td>Grade</td><td class="right"><?=$record4['grade_name'];?></td></tr>
  <tr class="even left"><td>Job Title</td><td class="right"><?=$record[emp_job_title];?></td></tr>

  <!--<tr class="odd left"><td>Manager</td><td class="right">
      
        <a href="#">SUMITH  V</a>
      
      
        <a href="#">Change</a>
      </td></tr>-->
  <tr class="even left"><td>Gender</td><td class="right"><?=$gen?></td></tr>
  <tr class="odd left"><td>Status</td><td class="right"><?=$st?></td></tr>
  <tr class="even left"><td>Qualification</td><td class="right"><?=$record[emp_qualification];?></td></tr>
  <tr class="odd left"><td>Total Experience</td><td class="right"><?=$record[emp_total_exp_yr];?></td></tr>
  <tr class="even left"><td> Experience Info</td><td class="right"><?=$record[emp_exp_info];?></td></tr>
</tbody></table>

<table width="700">
  <tbody><tr class="odd left"><td>Date of Birth</td><td class="right"><?=$record[emp_dob];?></td></tr>
  <tr class="even left"><td>Marital Status</td><td class="right"><?=$record[emp_marital_status];?></td></tr>
  <tr class="odd left"><td>No of children</td><td class="right"><?=$record[emp_children];?></td></tr>
  <tr class="even left"><td>Father Name</td><td class="right"><?=$record[emp_father_name];?></td></tr>
  <tr class="odd left"><td>Mother Name</td><td class="right"><?=$record[emp_mother_name];?></td></tr>
  <tr class="even left"><td>Spouse name</td><td class="right"><?=$record[emp_spouse_name];?></td></tr>
  <tr class="odd left"><td>Blood Group</td><td class="right"><?=$record[emp_bld_grp];?></td></tr>
  <tr class="even left"><td>Nationality</td><td class="right"><?=$record[emp_natn];?></td></tr>
</tbody></table>
<table width="700">
  <tbody><tr class="odd left"><td>Home Address</td><td class="right">&nbsp;</td></tr>
  <tr class="even left"><td>City</td><td class="right"></td></tr>
  <tr class="odd left"><td>State</td><td class="right"></td></tr>
  <tr class="even left"><td>Country</td><td class="right"></td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"></td></tr>
  <tr class="even left"><td>Office Address</td><td class="right">&nbsp;</td></tr>
  <tr class="odd left"><td>City</td><td class="right"> </td></tr>
  <tr class="even left"><td>Country</td><td class="right"></td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"></td></tr>
</tbody></table>
<table width="700">
  <tbody><tr class="odd left"><td>Office phone 1</td><td class="right"></td></tr>
  <tr class="even left"><td>Office phone 2</td><td class="right"></td></tr>
  <tr class="odd left"><td>Mobile</td><td class="right"></td></tr>
  <tr class="even left"><td>Home Phone</td><td class="right"></td></tr>
  <tr class="odd left"><td>Email</td><td class="right"></td></tr>
  <tr class="even left"><td>FAX</td><td class="right"></td></tr>
</tbody></table>
<div class="edit-pdf-group">
  
    <div class="edit">
      <a href="?page=employee-edit">► Edit</a>
    </div>
  
  
    <div class="pdf">
      <a href="#" class="user_button" target="_blank"> ► PDF Report</a>
    </div>
  
</div>


  </div>
  <div class="extender"> </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

   
 
         <!-- footer -->
  <?php include("include/footer.php")?>