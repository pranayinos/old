<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/profile.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 



<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Profile</h1>
  <h3>Details</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="nav">
  <ul>
    <li>
      <a href="#" class="drops" id="link_one">Profile ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="?page=emp_profile">General</a></li>
        <li><a href="?page=emp_profile">Personal</a></li>
        <li><a href="?page=emp_profile">Address</a></li>
        <li><a href="?page=emp_profile">Contact</a></li>
        <li><a href="?page=emp_profile">Bank Info</a></li>
        <li><a href="?page=emp_profile">Additional Info</a></li>
      </ul>
    </li>

    <li>
        <a href="#" class="drops" id="link_two">Salary ▼</a>
        <ul id="box_two" class="scriptaculously" style="display:none;">
          <li><a href="?page=emp_sal_payroll">Payroll</a></li>
          <li><a href="?page=emp_sal_payslip">Payslip</a></li>
        </ul>
      </li>
    
	 <li>
        <a href="#" class="drops" id="link_three">Leaves ▼</a>
        <ul id="box_three" class="scriptaculously" style="display:none;">
          <li><a href="?page=emp_leave_altendance" >Attendance</a></li>
          <li><a href="?page=emp_leaves">Leaves</a></li>
        </ul>
      </li>
    
		<li><a href="?page=emp_timetable">Timetable</a></li>
   		<li><a href="?page=emp_reminder">Reminder(2)</a></li>
      
     <li>
      <a href="#" class="drops" id="link_four">More▼</a>
          <ul id="box_four" class="scriptaculously" style="display:none;">
        
          <li><a href="#">Library</a></li>
        
          <li><a href="?page=emp_transport_details">Transport</a></li>
        
      </ul>
    </li>
  </ul>

</div>




<div id="page-yield">

  

  <div id="employee_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Sumesh" src="../images/HR/default_employee.png">
      
    </div>

    <div id="employee_main_info">
      <h3> SUMITH  V  </h3>
      <h4> Employee ID : E1 </h4>
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
  <tbody><tr class="odd left"><td>Joining date</td><td class="right">June 29, 2008</td></tr>
  <tr class="even left"><td>Department</td><td class="right">Department of Economics</td></tr>
  <tr class="odd left"><td>Category</td><td class="right">Teaching Staff </td></tr>
  <tr class="even left"><td>Position</td><td class="right">Junior Lecturer</td></tr>

  <tr class="odd left"><td>Grade</td><td class="right">B</td></tr>
  <tr class="even left"><td>Job Title</td><td class="right"></td></tr>

  <tr class="odd left"><td>Manager</td><td class="right">
      
  SOORAJ  K
      
  </td></tr>
  <tr class="even left"><td>Gender</td><td class="right">Male</td></tr>
  <tr class="odd left"><td>Status</td><td class="right">Active</td></tr>
  <tr class="even left"><td>Qualification</td><td class="right"></td></tr>
  <tr class="odd left"><td>Total Experience</td><td class="right">4 Years 3 Months</td></tr>
  <tr class="even left"><td> Experience Info</td><td class="right"></td></tr>
</tbody></table>
<!---Insert the code of the personal details ------------------------------------------->
<table width="700">
  <tbody><tr class="odd left"><td>Date of Birth</td><td class="right">1987-06-29</td></tr>
  <tr class="even left"><td>Marital Status</td><td class="right">Single</td></tr>
  <tr class="odd left"><td>No of children</td><td class="right"></td></tr>
  <tr class="even left"><td>Father Name</td><td class="right"></td></tr>
  <tr class="odd left"><td>Mother Name</td><td class="right"></td></tr>
  <tr class="even left"><td>Spouse name</td><td class="right"></td></tr>
  <tr class="odd left"><td>Blood Group</td><td class="right">Unknown</td></tr>
  <tr class="even left"><td>Nationality</td><td class="right">India</td></tr>
</tbody></table>
<!---End the code of the personale details ----------------------------------------------->

<!------Insert the Address code  --------------------------------------------------------->
<table width="700">
  <tbody><tr class="odd left"><td>Home Address</td><td class="right">&nbsp;</td></tr>
  <tr class="even left"><td>City</td><td class="right"></td></tr>
  <tr class="odd left"><td>State</td><td class="right"></td></tr>
  <tr class="even left"><td>Country</td><td class="right">India</td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"></td></tr>
  <tr class="even left"><td>Office Address</td><td class="right">&nbsp;</td></tr>
  <tr class="odd left"><td>City</td><td class="right"> </td></tr>
  <tr class="even left"><td>Country</td><td class="right">India</td></tr>
  <tr class="odd left"><td>PIN code</td><td class="right"></td></tr>
</tbody></table>
<!------End the code ------------------------------------------------------->

<!------Insert the Contact code  ------------------------------------------------->
<table width="700">
  <tbody><tr class="odd left"><td>Office phone 1</td><td class="right"></td></tr>
  <tr class="even left"><td>Office phone 2</td><td class="right"></td></tr>
  <tr class="odd left"><td>Mobile</td><td class="right"></td></tr>
  <tr class="even left"><td>Home Phone</td><td class="right"></td></tr>
  <tr class="odd left"><td>Email</td><td class="right">noreplyE2@fedena.com</td></tr>
  <tr class="even left"><td>FAX</td><td class="right"></td></tr>
</tbody></table>
<!------End the code ------------------------------------------------------->

<!------Insert the Bank Info code  ------------------------------------------------->
<!------End the code ------------------------------------------------------->
<!------Insert the Additinal Info  code  ------------------------------------------------->
<!------End the code ------------------------------------------------------->



<div class="edit-pdf-group">
  
  
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
           
   