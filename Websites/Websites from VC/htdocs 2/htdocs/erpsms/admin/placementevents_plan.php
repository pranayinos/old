<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/plan_show.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> <div id="content-header">
  <img alt="Placement" src="../images/placement/placement.png">
  <h1>Placements</h1>
  <h3>Placement Event</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/placementevents/2#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li>  <a href="?page=placementevents-invite">Invite Students</a></li>
    <li>  <a href="?page=placement_registrations">Registrations</a></li>
  </ul>
</div>
<div id="page-yield">
  
  <div id="placement-title">New Placement Plan</div>
  <div id="placement-time"> Friday,09 March 2012</div>
  <div id="placement-description">
    <p>blablabla stuff to do etc..</p>
  </div>
  <div id="action-buttons">
    
  </div>


  
    <form action="http://demo.fedena.com/placementevents/2/report" method="get">
      <div id="report-form">
        <div class="label-field-pair">
          <label>Generate Report</label>
          <div class="text-input-bg">   <select id="report_type" name="report[type]"><option value="">Select Type</option>
<option value="Invited">Invited</option>
<option value="Applied">Applied</option>
<option value="Approved">Approved</option>
<option value="Attended">Attended</option>
<option value="Placed">Placed</option></select></div>
        </div>
        <div id="report-submit"> <input class="submit-button" id="report_submit" name="commit" type="submit" value="Go"> </div>
      </div>
    </form>
  



</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>