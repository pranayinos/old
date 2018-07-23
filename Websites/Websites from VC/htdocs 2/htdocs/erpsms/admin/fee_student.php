<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/fees.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar2.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
   <img alt="Student_details_logo" src="../images/_global/student_details_logo.jpg">
  <h1>Student</h1>
  <h3>Fee Status</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=profile">Student Profile</a></li>
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">



    <div id="student_main_info">
      <span class="name"> ANAND   T  </span>
      <span class="course">Course &amp; Batch: B.A.HISTORY </span>
      <span class="adm"> Adm no.: 114 </span>
    </div>

    <div class="extender"> </div>

  </div>

  <div class="fees">
    
      <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="YL3gDuIpXinwA/jtwqt/VzEpFLyMBz2nKtrWG248PSg="></div>
        
          <input name="fee[has_paid_fees]" type="hidden" value="0"><input id="fee_has_paid_fees" name="fee[has_paid_fees]" type="checkbox" value="1">Has paid fees all fees for the batch.
        
        <input class="user_button" name="commit" type="submit" value="► Update">
      </form>
    
  </div>
  <ul id="category-list">
    
      <li class="listheading"> <div class="category-name">Fees </div> </li>
    
      <li class="listodd">
        <div class="category-name"><a href="#">first exam fee 4</a></div>
        <div class="due-date">2011-08-06</div>
        
        <div class="category-edit">UNPAID - 5250.0</div>
      </li>
          <li class="listeven">
        <div class="category-name"><a href="#">jan</a></div>
        <div class="due-date">2011-08-16</div>
        
        <div class="category-edit">UNPAID - 0</div>
      </li>
    
  </ul>

</div>
 </div>

      <div class="extender"></div>
    </div>

       <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>