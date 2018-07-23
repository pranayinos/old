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
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
 
      <div id="content"> 
<div id="content-header">
  <img src="../images/student_details/student_details_logo.jpg">
  <h1>Student info</h1>
  <h3>Student Profile</h3>
  <div id="app-back-button">
    <a href="/profile/54#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="nav">
  <ul>
    
      <li><a href="?page=student-reports">Reports</a></li>
    
   
    
      <li><a href="?page=student_guardians">Guardians</a></li>
    
    
      
      
        <li><a href="?page=student_email">Send Email</a></li>
      
    
    
      <li><a href="#">Delete</a></li>
    
    <li>
      <a href="?page=profile" class="drops" id="link_one">More ▼</a>  
      <ul id="box_one" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=fee_student">Fees</a></li>
        
         <li><a href="?page=galleries">Gallery</a></li>
        
          <li><a href="?page=hostels-hostel_dashboard">Hostel</a></li>
        
          <li><a href="?page=library">Library</a></li>
        
          <li><a href="?page=transport_dash_board">Transport</a></li>
        
      </ul>
    </li>
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Default_student" src="../images/master_student/profile/default_student.png">
      
    </div>

    <div id="student_main_info">
      <h3> jamsheer    </h3>
      <h4> Course: STANDARD 10  </h4>
      <h4> Batch : 2010 A </h4>
      <h4> Adm no. : 1003 </h4>
    </div>

    <div class="extender"> </div>

  </div>

  <div id="new_profile_info_top">
    <div class="profile_top_banner">
      <span class="profile">Details</span>
      <img alt="Topbanner" src="../images//master_student/profile/topbanner.png"></div>
    <table width="750">
      <tbody><tr class="odd left"><td>Admission Date</td><td class="right">June  1, 2010</td></tr>
      <tr class="even left"><td>Date of Birth</td><td class="right">August  9, 2006</td></tr>
      <tr class="odd left"><td>Blood Group</td><td class="right">B-</td></tr>
      <tr class="even left"><td>Gender</td><td class="right">Male</td></tr>

      <tr class="odd left"><td>Nationality</td><td class="right">India</td></tr>
      <tr class="even left"><td>Language</td><td class="right"></td></tr>

      <tr class="odd left"><td>Category</td><td class="right">OBC</td></tr>
      <tr class="even left"><td>Religion</td><td class="right"></td></tr>
      <tr class="odd left"><td>Address</td><td class="right">, </td></tr>

      <tr class="even left"><td>City</td><td class="right"></td></tr>
      <tr class="odd left"><td>State</td><td class="right"></td></tr>
      <tr class="even left"><td>Country</td><td class="right">India</td></tr>
      <tr class="odd left"><td>Phone</td><td class="right"></td></tr>
      <tr class="even left"><td>Mobile</td><td class="right"></td></tr>
      <tr class="odd left"><td>Email</td><td class="right">noreply1003@fedena.com</td></tr>
      
      
        <tr class="even left">
  <td>Library card</td>
  <td class="right"></td>
</tr>
      
      
      <tr class="even left"><td>In case of emergencies, contact :</td><td class="right">
          
          
            
              
                <span>No guardian added yet(<a href="/add_guardian/54">Add Guardian</a>)</span>
              
            
          </td></tr>
      
      
        <tr class="odd left"><td></td><td class="right">No Previous data (<a href="/previous_data/54">Add Previous Data</a>)</td></tr>
      
    </tbody></table>
    
      <div class="buttons">
        <a href="/edit/54" class="user_button"> ► Edit</a>

        <a href="/profile_pdf/54" class="user_button" target="_blank"> ► PDF Report</a>
      </div>
    

  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?>
           