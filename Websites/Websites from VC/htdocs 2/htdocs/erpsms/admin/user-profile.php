<?php
$manage_users = new Main(); // create a new news object
$id=$_GET[id];
$newsRecord = $manage_users->getdata('*',"manage_users","user_id=$id","", "");
$record = $newsRecord->getNextRecord();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/user_ profile.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="User_profile_logo" src="../images/user_profile/user_profile_logo.jpg">
  <h1>User profile</h1>
  <h3>User Information</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/user/profile/E1099#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>



<div id="page-yield">

  

  <div id="profile_view">

    <div class="profile_info_label">Username</div>
    <div class="profile_info_text"> <?=$record[user_name];?> </div>

    <div class="profile_info_label2">Name</div>
    <div class="profile_info_text2"><?=$record[first_name].' '.$record[last_name];?>  </div>


    <!--<div class="profile_info_label">Role</div>
    <div class="profile_info_text"> Employee </div>-->

    <div class="profile_info_label2">Email</div>
    <div class="profile_info_text2"> <?=$record[email_id];?> </div>

    
    <div class="extender"></div>
  </div>

  
    <div class="submit-buttons">

      
        
          <a href="?page=employee-profile&email=<?=$record[email_id];?>" class="user_button">► View Profile</a>
        
      
      <a href="?page=user_change_password&email=<?=$record[email_id];?>" class="user_button">Change password</a>
      
        
          <a href="?page=user-edit_privilege&email=<?=$record[email_id];?>" class="user_button">► Edit Privilege</a>

        
      
      
    </div>
  
</div> </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>