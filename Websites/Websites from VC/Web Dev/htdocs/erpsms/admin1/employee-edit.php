<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_edit1.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> 
<script src="./employee-edit_files/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="./employee-edit_files/jquery-ui.min(1).js" type="text/javascript"></script>

<script>
  $jq = jQuery.noConflict()
  $jq(document).ready(function() {
    $jq("#employee_joining_date").datepicker({dateFormat: 'yy-mm-dd'});
    $jq("#employee_date_of_birth").datepicker({dateFormat: 'yy-mm-dd'});
  });
</script>

<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Edit Employee Information</h1>
  <h3>General</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  



  <form action="./employee-edit_files/employee-edit.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>
    

    <div id="admission1_form">

      <div id="necessary-field-notification"> Fields marked with  <span class="necessary-field">*</span>must be filled.</div>
      <span class="span-sub-heading">General Details</span>
      <hr class="sub-heading">
      <div class="label-field-pair">
        <label for="employee_id">Employee Number<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="employee_employee_number" name="employee[employee_number]" size="30" type="text" value="E13"></div>
      </div>
      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_joining_date">Joining date</label>
        <div class="text-input-bg"><input id="employee[joining_date]" name="employee[joining_date]" type="text" value="March 11, 2009"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1987, 2012]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_name">First Name <span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="employee_first_name" name="employee[first_name]" size="30" type="text" value="SREEJITH "></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_name">Middle Name</label>
        <div class="text-input-bg"><input id="employee_middle_name" name="employee[middle_name]" size="30" type="text" value=""></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_name">Last Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="employee_last_name" name="employee[last_name]" size="30" type="text" value="P."></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_department">Department <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><select id="employee_employee_department_id" name="employee[employee_department_id]"><option value="2">Department of Botany</option>
<option value="3">Department of Chemistry</option>
<option value="4">Department of Commerce</option>
<option value="5" selected="selected">Department of Computer Science</option>
<option value="20">Department of computer studies</option>
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
<option value="1">Fedena Admin</option>
<option value="16">Office Administration</option>
<option value="17">Physical Education</option>
<option value="18">PHYSICAL EDUCATION</option>
<option value="19">vbgfcvc</option></select></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_category">Category<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><select id="employee_employee_category_id" name="employee[employee_category_id]" onChange="new Ajax.Request(&#39;/employee/update_positions&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;category_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;)})"><option value="1">Fedena Admin</option>
<option value="2">Non- Teaching Staff</option>
<option value="3" selected="selected">Teaching Staff </option></select></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_position">Position <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><div id="positions1"> 

<select id="employee_employee_position_id" name="employee[employee_position_id]"><option value="1">Fedena Admin</option>
<option value="2">Professor</option>
<option value="3" selected="selected">Junior Lecturer</option>
<option value="4">Head Accountant</option>
<option value="5">LD Clerk</option>
<option value="6">LD typist</option>
<option value="7">Mechanic</option>
<option value="8">Peon</option>
<option value="9">Lab Assistant</option></select>
 </div></div>
      </div>

      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_grade">Grade<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><select id="employee_employee_grade_id" name="employee[employee_grade_id]"><option value="2">A</option>
<option value="3" selected="selected">B</option>
<option value="4">C</option>
<option value="5">D</option>
<option value="6">E</option>
<option value="1">Fedena Admin</option></select></div>
      </div>
      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_job_title">Job Title</label>
        <div class="text-input-bg"><input id="employee_job_title" name="employee[job_title]" size="30" type="text" value=""></div>
      </div>
      <hr class="label-underline">

      <div class="label-field-pair">
        <label for="employee_qualification">Qualification</label>
        <div class="text-input-bg"><input id="employee_qualification" name="employee[qualification]" size="30" type="text" value=""></div>
      </div>
      <hr class="label-underline">
      <div class="label-field-pair-text-area">
        <label for="employee_experience"> Experience Info</label>
        <div class="textarea-input-bg"><textarea class="admission1-textarea" cols="27" id="employee_experience_detail" name="employee[experience_detail]" rows="5"></textarea></div>
      </div>
      <hr class="label-underline">
      <div class="label-field-pair">
        <label for="employee_total-experience">Total Experience</label>
        <div class="text-input-bg"><select id="employee_experience_year" name="employee[experience_year]"><option value="0">0</option>
<option value="1">1</option>
<option value="2" selected="selected">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option></select>
          <select id="employee_experience_month" name="employee[experience_month]"><option value="0">0</option>
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option></select></div>
      </div>
      <hr class="label-underline">

      <div class="label_field_pair">
        <label class="label_for_employee_gender" for="master_student_gender">Gender</label>
        <div class="employee_gender_value">
          <label class="label_for_gender" for="master_student_gender_true">Male</label>
          <input checked="checked" id="employee_gender_true" name="employee[gender]" type="radio" value="true">

          <label class="label_for_gender" for="master_student_gender_false">Female</label>
          <input id="employee_gender_false" name="employee[gender]" type="radio" value="false">
        </div>
      </div>
      <hr class="label-underline">


      <div class="label_field_pair">
        <label class="employee_status" for="employee_status">Status</label>

        <label class="label_for_status" for="employee_status_true">Active</label>
        <input checked="checked" id="employee_status_true" name="employee[status]" type="radio" value="true">

        <label class="label_for_status" for="employee_status_false">Inactive</label>
        <input id="employee_status_false" name="employee[status]" type="radio" value="false">
      </div>

    </div>
    <input class="submit_button" name="commit" type="submit" value="► Update">
  </form>
</div>

 </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>