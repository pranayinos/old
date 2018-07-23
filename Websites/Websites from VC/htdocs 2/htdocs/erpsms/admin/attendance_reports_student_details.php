<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/attendace_report_ index.css" media="screen" rel="stylesheet" type="text/css">


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
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance Report</h1>
  <h3>Student Report</h3>
  <div id="app-back-button">
    <a href="attendance_reports/student_details/670#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div class="label-field-pair">
    <label>Student Details 1061  </label>
  </div>
  <table id="listing" align="center" width="80%">
    <tbody><tr class="tr-head">
      <td>
        Date
      </td>
      <td>
        Status
      </td>
      <td>
        Reason
      </td>
    </tr>
    <tr class="blank"></tr>
    
      <tr class="tr-odd">
  
        <td class="col-2">2012-09-03</td>
        <td class="col-3">
          
            
              Fullday
            
          
        </td>
        <td class="col-2">
          dfg</td>
        
      </tr><tr class="tr-even">
  
        <td class="col-2">2012-09-05</td>
        <td class="col-3">
          
            
              Fullday
            
          
        </td>
        <td class="col-2">
          drgt</td>
        
      </tr><tr class="tr-odd">
  
        <td class="col-2">2012-12-01</td>
        <td class="col-3">
          
            
              Fullday
            
          
        </td>
        <td class="col-2">
          v</td>
        
    </tr>
  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>  