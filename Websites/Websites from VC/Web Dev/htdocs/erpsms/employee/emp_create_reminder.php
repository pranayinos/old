<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/create_reminder.css" media="screen" rel="stylesheet" type="text/css">
<!--<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
--> 
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
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Messages</h1>
  <h3>Create/New</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    
     
      <li><a href="?page=emp_reminder"><b>Inbox (2)</b></a></li>
    
    <li><a href="?page=emp_sent_reminder">Sent</a></li>
    <li><a href="?page=emp_create_reminder">Create</a></li>
  </ul>
</div>

<div id="fullpage-yield">

  

  <div class="create-options">


    
  </div>
  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="0KbK1V8Poa8yJy6nH54wLcx8fPkSds2zY6buD5eU6mY="></div>
    <div id="form">
      
      <input id="recipients" name="recipients" type="hidden" value="">
      
      
        <div class="to-options">
          <a href="#" onclick="new Ajax.Updater(&#39;select-employee-department&#39;, &#39;/reminder/select_employee_department&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;0KbK1V8Poa8yJy6nH54wLcx8fPkSds2zY6buD5eU6mY=&#39;)}); return false;">Create reminder to staff</a>
        </div>
      
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
      <div class="extender"></div>
      
        <div id="select-employee-department">
          
          
          
<div class="label-field-pair">
  <label for="department">Select department</label>
  <div class="text-input-bg">

    <select id="select_department_department" name="select_department[department]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/reminder/to_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;0KbK1V8Poa8yJy6nH54wLcx8fPkSds2zY6buD5eU6mY=&#39;)})"><option value="">Select department</option>
<option value="1">Fedena Admin</option>
<option value="2">Department of Botany</option>
<option value="3">Department of Chemistry</option>
<option value="4">Department of Commerce</option>
<option value="5">Department of Computer Science</option>
<option value="6">Department of Economics</option>
<option value="7">Department of English</option>
<option value="8">Department of Hindi</option>
<option value="9">Department of History</option>
<option value="10">Department of Malayalam</option>
<option value="11">Department of Mathematics</option>
<option value="12">Department of Physics</option>
<option value="13">Department of Politics</option>
<option value="14">Department of Statistics</option>
<option value="15">Department of Zoology</option>
<option value="16">Office Administration</option>
<option value="17">Physical Education</option>
<option value="18">PHYSICAL EDUCATION</option></select>
  </div>
</div>

        </div>
      

      <div class="label-field-to">
        <div id="to_users">

        </div>
      </div>
      <div class="extender"></div>


      <div class="to-options">
        <a href="#">Create reminder to student</a>
      </div>
      <div class="extender"></div>
      <div id="select-student-course">
        
        
        
<div class="label-field-pair">
  <label for="course">Select a Course</label>
  <div class="text-input-bg">

    <select id="select_batch_batch" name="select_batch[batch]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/reminder/to_students&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;0KbK1V8Poa8yJy6nH54wLcx8fPkSds2zY6buD5eU6mY=&#39;)})">
<option value="">Select a Course</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option></select>

  </div>
</div>
      </div>
      <div class="label-field-to">
        <div id="to_users2"></div>
      </div>
    </div>
    <div class="message">
      <div id="recipient-list"></div>
      <div class="label-field-pair">
        <label for="subject">Subject</label>
        <div class="text-input-bg"><input id="reminder_subject" name="reminder[subject]" size="30" type="text"></div>
      </div>
      <div class="label-field-pair">
        <label for="student_grade">Message</label>
        <div class="text-area-bg"><textarea cols="25" id="reminder_body" name="reminder[body]" rows="10"></textarea>
        </div>
      </div>
      <div class="extender"></div>
      <div id="submit-button">
      <input class="button" name="commit" type="submit" value="Send">
      </div>
    </div>


    
  </form>
  <div class="extender"></div>

</div> </div>

      <div class="extender"></div>
    </div>

       <!-- footer -->
  <?php include("include/footer.php")?>

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>