<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/empnew.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="fullcontent"> <div id="content-header">
  <img src="../images/reminder/reminder_small.png">
  <h1>Online Meetings</h1>
  <h3>Create Meeting</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="fullpage-yield">
  
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
new Ajax.Request('/online_meeting_rooms/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})
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
new Ajax.Request('/online_meeting_rooms/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})
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
new Ajax.Request('/online_meeting_rooms/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})



  }
</script>

  


<form action="#" class="new_online_meeting_room" id="new_online_meeting_room" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>
  
  <div id="recipient-list">
    
  </div>
  <div id="admission1_form">
    <div id="necessary-field-notification">Fields marked with <span class="necessary-field">*</span> must be filled.</div>
    <div id="form">
      <div class="label-field-pair">
        <label for="name" id="label-member1">Name <span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="online_meeting_room_name" name="online_meeting_room[name]" size="30" type="text"></div>
      </div>
      
        <div class="label-field-pair">
          <label for="department" id="label-member4">Server
          </label>
          <div class="text-input-bg">
            <select id="online_meeting_room_server_id" name="online_meeting_room[server_id]"></select>
          </div>
        </div>
      
      <input id="recipients" name="recipients" type="hidden" value="">
      <div class="extender"></div>
      <div class="label-field-to">
        <div id="depts_and_courses">
          <div id="select-employee-department">
  
<div class="label-field-pair">
  <label for="department" id="label-member4">Select department
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;"></label>
  <div class="text-input-bg">
    <select id="select_department_department" name="select_department[department]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/online_meeting_rooms/to_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=&#39;)})"><option value="">Select department</option>
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
  <div id="to_users"></div>
</div>
<div class="extender"></div>
<div class="extender"></div>
<div id="select-student-course">
  
  <div class="label-field-pair">
    <label for="course" id="label-member5">Select course
      <img align="absmiddle" alt="Loader" border="0" id="loader1" src="../images/loader.gif" style="display: none;"></label>
    <div class="text-input-bg">
      <select id="select_batch_batch" name="select_batch[batch]" onchange="Element.show(&#39;loader1&#39;); new Ajax.Request(&#39;/online_meeting_rooms/to_students&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader1&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=&#39;)})"><option value="">Select course</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="15">123 - raky</option>
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
      </div>

      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="name" id="label-member1">Scheduled on<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="online_meeting_room[scheduled_on]" name="online_meeting_room[scheduled_on]" type="text" value="Saturday, 21 July 2012, 06:48 Uhr"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>

      <input id="online_meeting_room_host_url" name="online_meeting_room[host_url]" type="hidden" value="http://demo.fedena.com">
    </div>
  </div>
  
</form>

</div>


 </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>




</body></html>