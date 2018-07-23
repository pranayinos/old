<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/task-new.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Task</h1>
  <h3>Create new task</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/tasks/new#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
    
  <script>
  function add_recipient(recipient) {
  var recipient_list = new Array();
  if($('recipients').value != '')
  recipient_list = $('recipients').value.split(',');
  else
  recipient_list = [];

  var recipient_exists = false;

  for(i=0; i<recipient_list.length; i++)
  if(recipient_list[i] == recipient)
  recipient_exists = true;

  if(!recipient_exists) {
  recipient_list.push(recipient);
  }
  $('recipients').value = recipient_list.join();
  recipients = $('recipients').value;
  new Ajax.Request('/tasks/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }

  function add_all_recipient(recipient) {
  var recipient_list = new Array();
  if($('recipients').value != '')
  recipient_list = $('recipients').value.split(',');
  else
  recipient_list = [];

  var new_list = recipient.split(',');

  for(i=0;i<new_list.length;i++)
  {
  var recipient_exists = false;
  for(j=0; j<recipient_list.length; j++)
  if(recipient_list[j] == new_list[i])
  recipient_exists = true;
  if(!recipient_exists) recipient_list.push(new_list[i]);
  }

  $('recipients').value = recipient_list.join();
  recipients = $('recipients').value;
  new Ajax.Request('/tasks/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }


  function remove_recipient(recipient) {
  recipients = $('recipients').value;
  var recipient_list = new Array();
  recipient_list = $('recipients').value.split(',');

  for(i=0; i<recipient_list.length; i++)
  if (recipient_list[i] == recipient)
  {
  recipient_list.splice(i,1);
  break;
  }

  $('recipients').value = recipient_list.join();
  recipients = $('recipients').value;
  new Ajax.Request('/tasks/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})



  }
</script>
<form action="http://demo.fedena.org/tasks" class="new_task" enctype="multipart/form-data" id="new_task" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
  <div id="recipient-list"></div>
  <div id="admission1_form">

    <div id="necessary-field-notification">Fields marked with <span class="necessary-field">*</span>must be filled.</div>
    <div id="form">
      <div class="label-field-pair">
        <label for="task_title" id="label-member1">Title<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="task_title" name="task[title]" size="30" type="text"></div>
      </div>

      <div class="label-field-pair-text-area">
        <label for="task_description" id="label-member2">Description<span class="necessary-field">*</span></label>
        <div class="textarea-input-bg"><textarea class="admission1-textarea" cols="27" id="task_description" name="task[description]" rows="5"></textarea></div>
      </div>


      <div class="label-field-pair">
        <label for="task_attachment" id="label-member3">Attach a file </label>
        <input id="task_attachment" name="task[attachment]" size="20" type="file">
      </div>
      <input id="recipients" name="recipients" type="hidden" value="">
      <div class="extender"></div>
     

      <div class="extender"></div>
      <div class="label-field-to">
        <div id="depts_and_courses">
          <div id="select-employee-department">
  
  <div class="label-field-pair">
    <label for="department" id="label-member4">Select department
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="./tasks-new_files/loader.gif" style="display: none;"></label>
    <div class="text-input-bg">
      <select id="select_department_department" name="select_department[department]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/tasks/to_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select>
    </div>
  </div>

</div>

<div class="label-field-to">
  <div id="to_users"></div>
</div>
<div class="extender"></div>
<div class="extender"></div>
<div id="select-student-course">
  
  <div class="label-field-pair">
    <label for="course" id="label-member5">Select course
      <img align="absmiddle" alt="Loader" border="0" id="loader1" src="../images/loader.gif" style="display: none;"></label>
    <div class="text-input-bg">
      <select id="select_batch_batch" name="select_batch[batch]" onChange="Element.show(&#39;loader1&#39;); new Ajax.Request(&#39;/tasks/to_students&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader1&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select course</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>

    </div>
  </div>

</div>
<div class="label-field-to">
  <div id="to_users2"></div>
</div>
        </div>
      </div>
      
      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="start_date">Start Date</label>
        <div class="text-input-bg"><input id="task[start_date]" name="task[start_date]" readonly="readonly" type="text" value="11-07-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>

      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="due_date">End Date</label>
        <div class="text-input-bg"><input id="task[due_date]" name="task[due_date]" readonly="readonly" type="text" value="11-07-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
    </div>

    
  
</div></form>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>