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
      <div id="content"> 
<div id="content-header">
  <h1>Custom Reports</h1>
  <h3>Custom Reports</h3>
</div>
<div id="inner-tab-menu">
  <ul>
     
    <li>
      <a href="?page=custom_reports_generate_student">New Student Report</a>
    </li>
     
     
    <li>
      <a href="?page=custom_reports_generate_employee">New Employee Report</a>
    </li>
     
  </ul>
</div>

<ul id="category-list">
  
    
  
</ul> </div>

      <div class="extender"></div>
    </div>
 <!-- footer -->
  <?php include("include/footer.php")?>
 