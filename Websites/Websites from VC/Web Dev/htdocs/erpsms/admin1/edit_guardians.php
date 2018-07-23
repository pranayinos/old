<?php //gaurdian table be used 
    $gaurdian = new Main(); // create a new news object
   $student_id=$_GET[id];
 	$field = $gaurdian->getdata('*',"gaurdian","stud_id='$student_id'","", "");// set newsRecordSet to a 
?>
<?php // student table be used
    $student = new Main(); // create a new news object
   $student_id=$_GET[id];
 	$field1 = $student->getdata('*',"student","id='$student_id'","", "");// set newsRecordSet to a 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/guardians.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar2.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
<img src="../images/student_details/student_details_logo.jpg">
  <h1>Parents Info</h1>
  <h3>Parents Profile</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<?php  //student table be used 
 while( ($record = $field1->getNextRecord()) !== false )
    { 
?>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=student_profile&id=<?=$record['id']?>">Student Profile</a></li> <!-- get the id student table -->
    
      <li><a href="?page=add_guardian&id=<?=$record['id']?>">Add Guardian</a></li>
    
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">


<div id="student_main_info">
      <span class="name"> <?=$record['std_first_name']?>&nbsp;<?=$record['std_middle_name']?>&nbsp;<?=$record['std_last_name']?></span>
      <!--<span class="course">Course &amp; Batch: 0Course Normal </span>-->
      <span class="adm">Adm no.: <?=$record['std_adm_no']?> </span>
    </div>
<?php }?>
    <div class="extender"> </div>

  </div>

  <div id="guardians-links">

    <ul>
      <span>Parents/Guardian:</span>
      <?php  //gaurdian table be used 
 while( ($record = $field->getNextRecord()) !== false )
    { 
?>
        <li><a href="#"><?=$record['guard_first_name']?> </a> (<?=$record['guard_rel']?>)</li>
      
    </ul>

  </div>


  <div id="parent-list">


<a name="guardian-details-id-64"> </a>
      <div id="new_profile_info_top">
        <div class="profile_top_banner">
          <span class="profile">Details</span>
          <img alt="Topbanner" src="../images//master_student/profile/topbanner.png"></div>
        <div class="profile_info_label">Name</div>
        <div class="profile_info_text"><?=$record['guard_first_name']?></div>

        <div class="profile_info_label2">Relation</div>
        <div class="profile_info_text2"> <?=$record['guard_rel']?></div>

        <div class="profile_info_label">Date of Birth</div>
        <div class="profile_info_text"> <?=$record['guard_dob']?></div>


        <div class="new_profile_info_area1">
          <div class="profile_info_label2">Email</div>
          <div class="profile_info_text2"> <?=$record['guard_email']?></div>

          <div class="profile_info_label">Office phone 1</div>
          <div class="profile_info_text"><?=$record['guard_off_ph1']?></div>
        </div>

        <div class="new_profile_info_area1">
          <div class="profile_info_label2">Office phone 2</div>
          <div class="profile_info_text2"><?=$record['guard_off_ph2']?></div>

          <div class="profile_info_label">Mobile Phone no.</div>
          <div class="profile_info_text"><?=$record['guard_mobile_no']?></div>
        </div>

        <div class="new_profile_info_area1">
          <div class="profile_info_label2">Address</div>
          <div class="profile_info_text2"><?=$record['guard_off_add1']?></div>

          <div class="profile_info_label"> </div>
          <div class="profile_info_text">India </div>
        </div>

        <div class="new_profile_info_area1">
          <div class="profile_info_label2"><a title="Click to Continue &gt; by Text-Enhance" id="_GPLITA_0" style="text-decoration:underline" href="http://google.com" in_rurl="http://google.com">Income</a></div>
          <div class="profile_info_text2"><?=$record['guard_income']?></div>

          <div class="profile_info_label">Occupation</div>
          <div class="profile_info_text"><?=$record['guard_occu']?></div>
        </div>
<?php }?>        
        <div class="extender"></div>
      </div>
      <div class="button-pair">
        
          <div class="parent-edit-button">
            <a href="student/edit_guardian">► Edit</a>
          </div>
        
        
          
        
      </div>

      <div class="extender"></div>
    

  </div>
</div> </div>

       <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?>
           

