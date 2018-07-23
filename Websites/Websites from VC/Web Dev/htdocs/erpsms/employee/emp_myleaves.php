<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/edit.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Leave Management</h1>
  <h3>Apply or check status</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=emp_leaves">Apply</a></li>
    <li><a href="?page=emp_leave_history">Leave History</a></li>
    <li><a href="?page=emp_myleaves">My Leaves</a></li>
    <li><a href="?page=emp_all_leaves">All Leaves</a></li>
      
  </ul>
</div>





<div id="page-yield">

  
        
    
  <div id="application-list-2">
    
        

  </div>
 
  <div id="application-list">
<div class="heading">My leave applications</div>

  <span>There are no leave applications</span>
</div>

  </div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>