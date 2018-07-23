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
   <?php include("include/sidebar3.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
   <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance</h1>
  <h3>Attendance Home </h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div id="box">


      
        <div class="link-box">
          <div class="link-heading"><a href="?page=attendances">Attendance register</a></div>
          <div class="link-descr">Attendance register for students</div>
        </div>
      

      
        <div class="link-box">
          <div class="link-heading"><a href="?page=attendance_reports">Attendance Report</a></div>
          <div class="link-descr">Attendance report of students</div>
        </div>
      

    <!--
       <div class="link-box">
           <div class="link-heading"><a href="/attendance_reports/advance_search">Attendance Report</a></div>
           <div class="link-descr">Attendance report for students</div>
         </div>
    -->

    <div class="extender"></div>
  </div>


</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>