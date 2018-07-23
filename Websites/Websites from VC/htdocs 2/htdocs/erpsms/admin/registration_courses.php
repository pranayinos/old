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
  <h1>Course Registration</h1>
  <h3>Enabled Courses</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/pin_groups#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=applicants_admin">Settings</a></li>
    <li><a href="?page=registration_courses-new">Add Course</a></li>
  </ul>
</div>

<div id="page-yield">

  
  <table id="listing" width="100%">
    <tbody><tr class="tr-head">
      <td>Course Name</td>
      <td>Code</td>
      <td>Cutoff</td>
      <td>Active</td>
      <td>Actions</td>
    </tr>

    
  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>
           