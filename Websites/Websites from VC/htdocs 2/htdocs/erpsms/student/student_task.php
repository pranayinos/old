<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<!--<link href="css/poll_index.css" media="screen" rel="stylesheet" type="text/css">
--> <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> <div id="content-header">
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Task Management</h1>
  <h3>All Tasks</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="fullpage-yield">

  

  <div class="box">
    <form action="#" method="get">
      <div class="label-field-pair">
        <label for="filter">Filter by </label> <div class="text-input-bg">
          <select id="filter_assigned_tasks" name="filter_assigned_tasks" onchange="new Ajax.Request(&#39;/tasks/list_assigned_tasks&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;filter_assigned_tasks=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;)})"><option value="All">All</option>
<option value="Assigned">Assigned</option>
<option value="Completed">Completed</option>
<option value="Due date">Due Date</option></select>
        </div>
      </div>
    </form>
    <div id="list_assigned_tasks">
       <ul id="category-list">
      <li class="listodd">Tasks assigned to me</li>
      
      <li class="listeven"></li>
    </ul>

    </div>

    <div class="label-field-pair">
      <label for="filter">Filter by </label>
      <div class="text-input-bg">
<select id="filter_tasks" name="filter_tasks" onchange="new Ajax.Request(&#39;/tasks/list_created_tasks&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;filter_tasks=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;)})"><option value="All">All</option>
<option value="Assigned">Assigned</option>
<option value="Completed">Completed</option>
<option value="Due Date">Due Date</option></select>      
</div>
    </div>
    <div id="list_created_tasks">
      <ul id="category-list">
  <li class="listodd">Tasks assigned by me</li>
  <div id="task-list">
    
  </div>
  <li class="listeven">
    
  </li>
</ul>

    </div>
  </div>
  <div class="extender"></div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <div id="footer">
      <div id="footer_logo">
        <div id="powered_by">
          Powered by <a href="#" target="_blank">Fedena</a>
        </div>
        <a href="#" target="_blank" class="footer-logo"></a>
      </div>
    </div>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>