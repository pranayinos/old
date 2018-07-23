<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/invite.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> <script>
  function add_student(student) {
    var invites_list = new Array();
    if($('invites').value != '')
      invites_list = $('invites').value.split(',');
    else
      invites_list = [];

    var student_exists = false;
    for(i=0; i<invites_list.length; i++)
      if(invites_list[i] == student)
        student_exists = true;

    if(!student_exists) {
      invites_list.push(student);
    }
    $('invites').value = invites_list.join();
    invites = $('invites').value;
new Ajax.Request('/placementevents/update_invite_list', {asynchronous:true, evalScripts:true, parameters:'students='+invites + '&authenticity_token=' + encodeURIComponent('JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=')})
  }

  function add_all_students(students) {
    var invites_list = new Array();
    if($('invites').value != '')
      invites_list = $('invites').value.split(',');
    else
      invites_list = [];

    var new_list = students.split(',');

    for(i=0;i<new_list.length;i++)
    {
      var student_exists = false;
      for(j=0; j<invites_list.length; j++)
        if(invites_list[j] == new_list[i])
          student_exists = true;
      if(!student_exists) invites_list.push(new_list[i]);
    }

    $('invites').value = invites_list.join();
    invites = $('invites').value;
new Ajax.Request('/placementevents/update_invite_list', {asynchronous:true, evalScripts:true, parameters:'students='+invites + '&authenticity_token=' + encodeURIComponent('JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=')})
  }


  function remove_student(student) {
    invites = $('invites').value;
    var invites_list = new Array();
    invites_list = $('invites').value.split(',');

    for(i=0; i<invites_list.length; i++)
      if (invites_list[i] == student)
    {
      invites_list.splice(i,1);
      break;
    }

    $('invites').value = invites_list.join();
    invites = $('invites').value;
new Ajax.Request('/placementevents/update_invite_list', {asynchronous:true, evalScripts:true, parameters:'students='+invites + '&authenticity_token=' + encodeURIComponent('JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=')})



  }
</script>

<div id="content-header">
  <img alt="Placement" src="../images/placement/placement.png">
  <h1>Placements</h1>
  <h3>Invite Students</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/placementevents/invite/2#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  


  <div class="label-field-pair">
    <label for="student_course">Select a Batch:
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="./placementevents-invite_files/loader.gif" style="display: none;">
    </label>
    <div class="text-input-bg">
      <select id="placement_batch" name="placement[batch]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/placementevents/update_students_list&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A </option>
<option value="14">10 - 2010 B </option>
<option value="2">B.A.HIS.I st SEM - 2011-12 </option>
<option value="15">B.A.HIS.I st SEM - Sample Batch </option>
<option value="3">B.COM 1st SEM - 2011-12 </option>
<option value="4">BSc.MATHS I st SEM - 2011-12 </option>
<option value="5">BSc.PHY I st SEM - 2011-12 </option>
<option value="13">ece - 2013-2014 </option>
<option value="8">I sem B.Sc CHE  - 2010-2011 </option></select>
    </div></div>



  <img align="absmiddle" alt="Loader" border="0" id="loader" src="./placementevents-invite_files/loader.gif" style="display: none;">
  <div id="list-container">
    <div id="students-list-container">
      <div class="label-field-pair">
        <label for="student_grade">Select recipient</label>
        <div class="scrolable">
          <div id="students-list">      <div class="hover"><div class="individual">No Batch selected</div></div></div>
        </div>
      </div>
    </div>
    <div id="invites-list-container">
      <div class="label-field-pair">
        <label for="student_grade">Students To Invite</label>
        <div class="scrolable">
          <div id="invite-list"><div class="hover"><div class="individual">No Students Selected</div></div></div>
        </div>
      </div>
      <form action="./placementevents-invite_files/placementevents-invite.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>
        <input id="invites" name="invites" type="hidden" value="">
        <input class="submit-button" name="commit" type="submit" value="Invite">
      </form>
    </div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>
    
    
         <!-- footer -->
  <?php include("include/footer.php")?>

    </body></html>