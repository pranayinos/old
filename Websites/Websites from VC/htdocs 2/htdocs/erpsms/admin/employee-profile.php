<?php
    $emp = new Main(); // create a new news object
    $e_id=$_GET[id];
 	$field = $emp->getdata('*',"emp","emp_no='$e_id'","", "");// set newsRecordSet to a 
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
<?php
while( ($record = $field->getNextRecord()) !== false )
    {
	?>

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
            <li><a href="?page=profile_emp_payroll&id=<?=$record['emp_no']?>">Payroll</a></li>
            <li><a href="?page=create_monthly_payslip&id=<?=$record['emp_no']?>">Payslip</a></li>
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
     <img src="upload/<?php echo $record[file]?>" height="100" width="120" style="float:left" />
      <?php /*?><?php  $pic=$record['emp_gender']; 
	           $pic;
			  if($pic==0)
			  // echo "female 0";
			   echo '<img alt="Default_employee" src="../images/Female_Profile_Icon.jpg">';
			  
			  else
			   //echo "male 1";
			   echo '<img alt="Default_employee" src="../images/HR/default_employee.png">';
	   ?><?php */?>
      
        <!--<img alt="Default_employee" src="../images/HR/default_employee.png">-->
      
    </div>

    <div id="employee_main_info">
      <h3> <?=$record['emp_first_name']?>&nbsp;<?=$record['emp_mid_name']?>&nbsp;<?=$record['emp_last_name']?>  </h3>
      <h4> Employee ID : <?=$record['emp_no']?> </h4>
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
  <tbody><tr class="odd left"><td>Joining date</td><td class="right"><?=date(("d-M-Y"), strtotime($record['emp_join_date'])) ?></td></tr>
  <tr class="even left"><td>Department</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>Category</td><td class="right"><?=$record['emp_cat_type']?> </td></tr>
  <tr class="even left"><td>Position</td><td class="right"><?=$record['emp_cat_posn']?></td></tr>

  <tr class="odd left"><td>Grade</td><td class="right"><?=$record['emp_grade']?></td></tr>
  <tr class="even left"><td>Job Title</td><td class="right"><?=$record['emp_job_title']?></td></tr>

  <tr class="odd left"><td>Manager</td><td class="right">
      
        <a href="#"><?php /*?><?=$record['emp_dept_code']?><?php */?></a>
      
      
        <a href="#">Change</a>
      </td></tr>
  <tr class="even left"><td>Gender</td><td class="right"></td></tr>
  <tr class="odd left"><td>Status</td><td class="right"><?=$record['emp_status']?></td></tr>
  <tr class="even left"><td>Qualification</td><td class="right"><?=$record['emp_qualification']?></td></tr>
  <tr class="odd left"><td>Total Experience</td><td class="right"><?=$record['emp_total_exp_yr']?></td></tr>
  <tr class="even left"><td> Experience Info</td><td class="right"><?=$record['emp_exp_info']?></td></tr>
</tbody></table>

<table width="700">
  <tbody><tr class="odd left"><td>Date of Birth</td><td class="right"><?=date(("d-M-Y"), strtotime($record['emp_join_date'])) ?></td></tr>
  <tr class="even left"><td>Marital Status</td><td class="right"><?=$record['emp_marital_status']?></td></tr>
  <tr class="odd left"><td>No of children</td><td class="right"><?=$record['emp_children']?></td></tr>
  <tr class="even left"><td>Father Name</td><td class="right"><?=$record['emp_father_name']?></td></tr>
  <tr class="odd left"><td>Mother Name</td><td class="right"><?=$record['emp_mother_name']?></td></tr>
  <tr class="even left"><td>Spouse name</td><td class="right"><?=$record['emp_spouse_name']?></td></tr>
  <tr class="odd left"><td>Blood Group</td><td class="right"><?=$record['emp_bld_grp']?></td></tr>
  <tr class="even left"><td>Nationality</td><td class="right"><?=$record['emp_natn']?></td></tr>
</tbody></table>
<!--<table width="700">
  <tbody><tr class="odd left"><td>Home Address</td><td class="right">&nbsp;<?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>City</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>State</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>Country</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>Office Address</td><td class="right">&nbsp;<?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>City</td><td class="right"> <?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>Country</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
</tbody></table>-->
<!--<table width="700">
  <tbody><tr class="odd left"><td>Office phone 1</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>Office phone 2</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>Mobile</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="even left"><td>Home Phone</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
  <tr class="odd left"><td>Email</td><td class="right"><?=$record['emp_email']?></td></tr>
  <tr class="even left"><td>FAX</td><td class="right"><?=$record['emp_dept_code']?></td></tr>
</tbody></table>-->
<div class="edit-pdf-group">
  
    <div class="edit">
      <a href="?page=employee-edit&id=<?=$record['emp_no']?>">► Edit</a>
    </div>
  
  
    <div class="pdf">
      <a href="?page=employee_pdf&id=<?=$record['emp_no']?>" class="user_button" target="_blank"> ► PDF Report</a>
    </div>
  
</div>


  </div>
  <div class="extender"> </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

<?php } ?>   
 
         <!-- footer -->
  <?php include("include/footer.php")?>