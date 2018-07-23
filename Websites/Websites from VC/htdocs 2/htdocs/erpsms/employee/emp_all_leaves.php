<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<!--<link href="css/leaves.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">-->
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
    <a href="http://demo.fedena.com/employee_attendance/leaves/3#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
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

<div class="heading">View all employee leave applications</div>
<div class="label-field">      
  <div class="text-input-bg"><select id="leave_applications_employee_id" name="leave_applications[employee_id]" onchange="new Ajax.Request(&#39;/employee_attendance/update_all_application_view&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;employee_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;0KbK1V8Poa8yJy6nH54wLcx8fPkSds2zY6buD5eU6mY=&#39;)})"><option value="">Select Employee</option>
<option value="4">MUNEER  </option>
<option value="14">SREEJITH   P.</option>
<option value="15">V  VINEETH</option></select>
  </div>
</div>


<div class="extender"></div>
<div id="all-application-view">

</div>

</div>

  </div>
 </div>

      <div class="extender"></div>
    </div>

          <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>