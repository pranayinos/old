<?php
    $student = new Main(); // create a new news object
   $roll=$_GET[id];
 	$field = $student->getdata('*',"student","id='$roll'","", "");// set newsRecordSet to a 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
   <?php include("include/scripting.php") ?>
    <link href="css/profile.css" media="screen" rel="stylesheet" type="text/css">
  </head>

  <body>
   <?php include("include/topmenu.php") ?>
   
   
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
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<?php
if( ($record = $field->getNextRecord()) !== false )
    { 
	 // getting batch field.
	$batchid=$record['std_batch_code'];
  $batchfield = $student->getdata('*',"course,batch","batch.batch_id='$batchid' and batch.batch_course_code=course.course_code","","");// Course
   $batch = $batchfield->getNextRecord(); 
   
   $catfiled=$student->getdata('category_description',"category","cat_id='$record[std_category]'","","");// Course
   $category = $catfiled->getNextRecord(); 
   // end  getting batch field.
 ?>

<div id="nav">
  <ul>
    
      <li><a href="?page=student-reports">Reports</a></li>
    
   
    
      <li><a href="?page=student_guardians&id=<?=$record['id']?>">Guardians</a></li>
    
    
      
      
        <li><a href="?page=student_email">Send Email</a></li>
      
    
    
      <li><a href="?page=student_profile_delete&id=<?=$record['id']?>" onClick="">Delete</a></a></li>
    
    <li>
      <a href="#" class="drops" id="link_one">More ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=fee_student">Fees</a></li>
        
        
          <li><a href="?page=galleries">Gallery</a></li>
        
          <li><a href="?page=student_hostel_details">Hostel</a></li>
        
          <li><a href="?page=library_student_library_details">Library</a></li>
        
          <li><a href="?page=transport_student_transport_details">Transport</a></li>
        
      </ul>
    </li>
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">

    <div id="profile_picture_display">
      
       <!-- <img alt="Default_student" src="../images/master_student/profile/default_student.png">-->
        <img src="upload/<?php echo $record[file]?>" height="100" width="120" style="float:left" />
      
    </div>

    <div id="student_main_info">
      <h3> <?=$record['std_first_name']." ".$record['std_middle_name']." ".$record['std_last_name']	?>    </h3>
      <h4>Course &nbsp;  &nbsp;  &nbsp; : <?=$batch['course_name']." ".$batch['course_section_name']?> </h4>
      <h4> Batch  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$batch['batch_code']?></h4>
      <h4> Adm no. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?=$record['std_adm_no'] ?></h4>
    </div>

    <div class="extender"> </div>

  </div>

  <div id="new_profile_info_top">
    <div class="profile_top_banner">
      <span class="profile">Details</span>
      <img alt="Topbanner" src="../images//master_student/profile/topbanner.png"></div>
    <table width="750" style="font-size:14px">
          <tbody><tr class="odd left"><td>Admission Date</td><td class="right"> <?=date(("d-M-Y"), strtotime($record['std_adm_date'])) ?></td></tr>
      <tr class="even left"><td>Date of Birth</td><td class="right"> <?=date(("d-M-Y"), strtotime($record['std_dob'])) ?></td></tr>
      <tr class="odd left"><td>Blood Group</td><td class="right"> <?=$record['std_blood_grp'] ?></td></tr>
      <tr class="even left"><td>Gender</td><td class="right"> <?=$record['std_gender'] ?></td></tr>
     <tr class="odd left"><td>Birth Place</td><td class="right"> <?=$record['std_birth_place'] ?></td></tr>
      <tr class="odd left"><td>Nationality</td><td class="right"> <?=$record['std_nationality'] ?></td></tr>
      <tr class="even left"><td>Language</td><td class="right"> <?=$record['std_mother_tng'] ?></td></tr>

      <tr class="odd left"><td>Category</td><td class="right"> <?=$category['category_description'] ?></td></tr>
      <tr class="even left"><td>Religion</td><td class="right"> <?=$record['std_relgn'] ?></td></tr>
      <tr class="odd left"><td>Address</td><td class="right"> <?=$record['std_add_1'] ?> </td></tr>

      <tr class="even left"><td>City</td><td class="right"> <?=$record['std_city'] ?></td></tr>
      <tr class="odd left"><td>State</td><td class="right"> <?=$record['std_state'] ?></td></tr>
      <tr class="even left"><td>Country</td><td class="right"> <?=$record['std_country'] ?></td></tr>
      <tr class="odd left"><td>Phone</td><td class="right"> <?=$record['std_phone'] ?></td></tr>
      <tr class="even left"><td>Mobile</td><td class="right"> <?=$record['std_mobile'] ?></td></tr>
      <tr class="odd left"><td>Email</td><td class="right"> <?=$record['std_email'] ?></td></tr>
      
      
        <tr class="even left">
  <td>Library card</td>  <td class="right"></td>
</tr>
      
      
      <tr class="even left"><td>In case of emergencies, contact :</td><td class="right">
          
          
            
              
                <span>No guardian added yet<a href="?page=add_guardian&id=<?=$record['id']?>">Add Guardian</a>)</span>
              
            
          </td></tr>
      
      
        <tr class="odd left"><td></td><td class="right">No Previous data (<a href="?page=add_previous_data&id=<?=$record['id']?>">Add Previous Data</a>)</td></tr>
      
    </tbody></table>
    
      <div class="buttons">
        <a href="?page=edit_student_profile&id=<?=$record['id']?>" class="user_button"> ► Edit</a>
        <!--- Insert the code of the pdf convert file -------------------->
<!--<form action="print.php" method="post" enctype="multipart/form-data"> 
  
  <p align="left">-->  
  
   &nbsp; &nbsp; &nbsp; <!--<input name="input" type="submit" class="user_button"  value="► PDF Report" /> -->
   <!--</form>-->
      <a href="?page=student_pdf&id=<?=$record['id']?>" class="user_button" target="_blank"> ► PDF Report</a>
  </p> 
  <p align="left"> </p> 
  <p> </p> 

<!---End of the code of pdf file --------------->
      <!-- <a href="examples/example_017.php" class="user_button" target="_blank"> ► PDF Report</a>-->
      </div>
    

  </div>
</div>
<?php } // end if query?>
 </div>

      <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?>
           