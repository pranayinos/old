<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
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
      <div id="content"> 

<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>CCE Settings</h1>
  <h3>Co-Scholastic Settings</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/cce_settings/co_scholastic#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">

    <div class="link-box">
      <div class="link-heading"><a href="?page=observation_groups">Co-Scholastic Items</a></div>
      <div class="link-descr">Manage co-scholastic items</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=observation_groups-assign_courses">Assign Co-Scholastic Items</a></div>
      <div class="link-descr">Assign Co-Scholastic itesms to courses.</div>
    </div>

    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

   <?php include("include/footer.php")?>  