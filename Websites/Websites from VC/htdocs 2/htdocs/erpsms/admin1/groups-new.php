<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
      <div id="content"> <script>
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
  new Ajax.Request('/groups/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
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
  new Ajax.Request('/groups/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
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
  new Ajax.Request('/groups/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})



  }
</script>
<link rel="stylesheet" type="text/css" href="./groups-new_files/new(1).css">
<div id="content-header">
    <img alt="Discussion_icon" src="../images/discussion_icon.png">
  <h1>Discuss</h1>
  <h3>Create New Group</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Groups</a> »
      New
    </div>

    <form action="#" class="new_group" enctype="multipart/form-data" id="new_group" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
      
    <div id="page-yield">
    <div class="label-field-pair">
        <label>Group Name</label>
        <div class="input-container"><input id="group_group_name" name="group[group_name]" size="20" type="text"></div>
      </div>
      
        <div class="create-options">
        </div>
        
          <div id="form">
            
            <input id="recipients" name="recipients" type="hidden" value="">
            <div class="extender"></div>
               <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">

            
            <div class="label-field-to">
              <div id="depts_and_courses">
                <div id="select-employee-department">
  
  <div class="label-field-pair">
    <label for="department">Department</label>
    <div class="text-input-bg">

      <select id="select_department_department" name="select_department[department]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/groups/to_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select department</option>
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
    <label for="course">Course</label>
    <div class="text-input-bg">

      <select id="select_batch_batch" name="select_batch[batch]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/groups/to_students&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select course</option>
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
          </div>
          <div class="message">
            <div id="recipient-list"></div>

          </div>
          
        
        <div class="extender"></div>
        <div id="save-button">
          <input class="submit_button" name="commit" type="submit" value="Save">
        </div>
      </div>
    </form>

    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>
 <!-- footer -->
  <?php include("include/footer.php")?>