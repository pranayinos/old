<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/task3_show.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Task Management</h1>
  <h3>View Task</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=emp_task_assign">Assigned To</a></li>
    
    
  </ul>
</div>
<div id="page-yield">

  

  <div id="news_title">
    teaching note preparation <span id="task_creator"> by  Fedena </span>
    <div id="task_status">
      
        
        <div id="task-status-assigned">Assigned</div>
          
</div>
  </div>
  <div id="create_date">
    Start Date : Monday, 30 January, 2012
  </div>
  
    <div id="due_date">
      Due Date :Saturday, 31 March, 2012
    </div>
  
  <div id="news_content">
    teaching note should be prepared and submitted on or before 31st march 2012
  </div>
  
    <div id="attachment">No file attached.</div>
  
  <div class="extender"></div>

  <form action="#" enctype="multipart/form-data" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>
    
    <h3 id="leave-a-comment">Post an update</h3>
    <div class="comment-content"> <textarea cols="40" id="cmnt_description" name="cmnt[description]" rows="20"></textarea> </div>
    <input id="cmnt_task_id" name="cmnt[task_id]" type="hidden" value="3">
    <div id="file_attachment"> <label for="task_comment_attachment">Attach a file  </label><input id="cmnt_attachment" name="cmnt[attachment]" size="30" type="file"></div>
    <div id="submit-button"><input name="commit" type="submit" value="►Submit"></div>
  </form>
  <h3 id="comments-heading">Updates</h3>


  <span id="comments-count">No updates yet.</span>


  <ul id="comments-list">
    
  </ul>

</div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>