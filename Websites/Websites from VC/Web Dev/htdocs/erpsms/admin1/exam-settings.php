<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/st_index.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->

</head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
                           <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Settings</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/settings#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=grading_levels">Set grading levels</a> </div>
        <div class="link-descr">Set grading levels</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=ranking_levels">Ranking Levels</a> </div>
        <div class="link-descr">Manage Ranking Levels</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=class_designations">Class Designations</a> </div>
        <div class="link-descr">Manage Class Designations</div>
      </div>
    
    
      
        <div class="link-box">
          <div class="link-heading"><a href="?page=cce_settings">CCE Settings</a> </div>
          <div class="link-descr">Manage CCE Settings</div>
        </div>
      
    
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <?php include("include/footer.php")?> 