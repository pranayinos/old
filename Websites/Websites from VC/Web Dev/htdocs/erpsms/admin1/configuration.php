<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar6.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Configuration</h1>
  <h3>Configuration Home</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div id="box">

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=courses">Manage Course/Batch</a></div>
        <div class="link-descr">Add a new Course or Batch for this academic year.</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=category">Manage Student Category</a></div>
        <div class="link-descr">Add Student Category</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=subject">Manage Subject</a></div>
        <div class="link-descr">Manage subjects corresponding to different courses.</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=configuration-settings">General Settings</a></div>
        <div class="link-descr">Set some general configurations related to institution,attendance, etc.</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="#">Add Admission Additional Detail</a></div>
        <div class="link-descr">Set some additional details for admission.</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="#">SMS module</a></div>
        <div class="link-descr">Enable/Disable SMS settings</div>
      </div>
    
  </div>


</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>