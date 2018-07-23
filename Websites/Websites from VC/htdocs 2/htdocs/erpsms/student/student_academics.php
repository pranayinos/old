<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--<link href="css/create_reminder.css" media="screen" rel="stylesheet" type="text/css">-->
<link href="css/student_academic_reports.css" media="screen" rel="stylesheet" type="text/css">

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
 <img alt="Student_details_logo" src="../images/_global/student_details_logo.jpg">
  <h1>Students</h1>
  <h3>Reports center</h3>
  <div id="app-back-button">
     <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  <div id="exam-results-dashboard">

    <h3>Academics</h3>

    <div class="exam-results-reports-col">
    
      <h4>Recent Exams</h4>
      <ul>
        
          <li><a href="?page=student_firstterm_report">FIRST TERM EXAM</a></li>
        
          <li><a href="#">TEST 1</a></li>
        
          <li><a href="#">FIRST</a></li>
        
          <li><a href="#">Test frm anp</a></li>
        
      </ul>
    

      <h4>Subject wise Report</h4>
      <ul>
        
          <li><a href="?page=student_transtion">Culture in Transition</a></li>
        
          <li><a href="#">Introductory Economics lI</a></li>
        
          <li><a href="#">Reading on Indian Constitution,Secularism and enviroment</a></li>
        
          <li><a href="#">Reading literature in English</a></li>
        
      </ul>
    </div>
    
    <div class="exam-results-reports-col">

      <h4>Detailed Report</h4>
      <ul>
        
        <li><a href="?page=student_finalreport">Final Report(Exam Grouped)</a></li>
        <li><a href="?page=student_campare_reports">Compare with past years(Exam Grouped)</a></li>
        
      </ul>

      
        <h4>Archives</h4>
        <ul>
          
          
            <li><a href="?page=student_group-archive">2011-12-G</a></li>
            
          
        </ul>
      


    </div>

    <div class="extender"> </div>

  </div>

  <div id="attendance-reports-dashboard">

    <h3>Attendance</h3>

    <h4>Detailed Report</h4>

    <ul>
      <li><a href="#">Current year report</a></li>
    </ul>
      
    <h4>Archives</h4>

  <ul>
 
       <li><a href="#">2011-12</a></li>
    
  </ul>


  </div>

</div> </div>

      <div class="extender"></div>
    </div>

   
       <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>