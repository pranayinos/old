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
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Assignment" src="../images/assignment/assignment.png">
  <h1>Assignments</h1>
  <h3>Edit assignment</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>



<form action="?page=emp_test-assignments" class="edit_assignment" enctype="multipart/form-data" id="edit_assignment_17" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg="></div>
  
  <div class="assignment_container">
    <div class="assignment_form">



      <div class="label-field-pair">
        <label for="assignment_title">Title</label>
        <div class="text-input-bg"><input id="assignment_title" name="assignment[title]" size="30" type="text" value="Test Assignment"></div>
      </div>

      <div class="label-field-pair">
        <label for="assignment_subject">Subject</label>    <div class="text-input-bg">    <select id="assignment_subject_id" name="assignment[subject_id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/assignments/subjects_students_list&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;subject_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg=&#39;)})"><option value="2" selected="selected">Introductory Economics lI  - CWTS2 - 2011-12</option>
<option value="16">Reading on Indian Constitution,Secularism and enviroment  - B.Computer - 2011-12</option></select></div>
        <a href="http://demo.fedena.com/assignments/new">Change Subject</a>
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./emp_assignments_edit_files/loader.gif" style="display: none;">
      </div>

      <div class="label-field-pair " id="assignment_description">
        <label>Content</label>
        <div class="text-input-bg"><textarea cols="40" id="assignment_content" name="assignment[content]" rows="20">Please submit on time</textarea></div>
      </div>

      <div class="label-field-pair">
        <label>Attach a file</label>
        <div class="text-input-bg" id="assignment-attachment"><input id="assignment_attachment" name="assignment[attachment]" size="30" type="file"></div>
      </div>
      <div class="label-field-pair">
        <label for="duedate">Due Date</label>
        <div class="text-input-bg">
          <input class="text-input-bg" id="assignment[duedate]" name="assignment[duedate]" type="text" value="July 30, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./emp_assignments_edit_files/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>

    </div>
    <div id="subjects_student_list">
      
  
    
    <div class="scrollable">
        <div class="select_all">
          Select: <a href="http://demo.fedena.com/assignments/17/edit#" onclick="$$(&#39;input.right&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
          <a href="http://demo.fedena.com/assignments/17/edit#" onclick="$$(&#39;input.right&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
        </div>
      <div id="scrollable-list">

        
          <div class="listitem">
            <div class="student_name"> KIRAN  KUMAR </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="8"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> SUMESH  S </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="9"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> PRIYA  DEVID </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="10"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ANITHA  S </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="11"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> AKHILA   </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="15"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> SOORAJ   BASKAR </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="16"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> SOUMYA   </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="19"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ATHIRA  KRISHNAN </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="20"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> FARZANA   C.M </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="21"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ABHIRAJ   P </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="22"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> AHAMMED   SHAFEEQUE P </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="23"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> AHMED   RIZWAN C.L. </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="24"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ANAND   T </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="25"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ANIL   KUMAR M </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="26"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> DEEPAK   KRISHNA P.V </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="28"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> deviprasad   </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="29"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> REMYA   P </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="30"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> ABHINA  P </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="31"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> AJINA  K.D </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="32"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> AKHIL  CHANDRAN </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="34"></div>
          </div>
        
          <div class="listitem">
            <div class="student_name"> Ajith   </div>
            <div class="check_box"><input checked="checked" class="right" id="assignment_student_ids_" name="assignment[student_ids][]" type="checkbox" value="51"></div>
          </div>
        
      </div>
    
  
</div>
    </div>
  </div>
  <div id="assignment-submit">
    <input class="submit_button" id="assignment_submit" name="commit" type="submit" value="Update Assignment">
  </div>
</form>
 </div>

      <div class="extender"></div>
    </div>

          <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>