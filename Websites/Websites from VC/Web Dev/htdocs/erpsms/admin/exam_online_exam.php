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
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Online Exam</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    
      <div class="link-box">
        <div class="link-heading"><a href="#">New Online Exam</a> </div>
        <div class="link-descr">Create new online exam </div>
      </div>
    
    
    
    
      <div class="link-box">
        <div class="link-heading"><a href="#">View Online Exams</a> </div>
        <div class="link-descr">View existing online exam</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="#">View Exam Results</a> </div>
        <div class="link-descr">View online exam results</div>
      </div>
    


    
      <div class="link-box">
        <div class="link-heading"><a href="#">Reset Exam</a> </div>
        <div class="link-descr">Reset exam for a student</div>
      </div>
    

    <div class="extender"></div>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>