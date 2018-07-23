<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_search.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Search</h1>
  <h3>Employee Details</h3>
  <div id="app-back-button">
  <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=emp_employee-view_all">View all</a></li>
    <li><a href="?page=emp_employee-advanced_search">Advanced</a></li>
  </ul>

</div>

<div id="page-yield">
    <div id="search_box_bg">
      <div id="form-content">
      <form name="employee" action="#" style="display:inline;">
        <label for="name">
          Search
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
        </label>
        <div id="search_textbox">
          <input autocomplete="off" id="query" name="query" type="text"><br>
        </div>
      </form>
      </div>
        <div class="advanced_options">
        <div class="advanced-options-select"><select id="employee_department_id" name="employee[department_id]"><option value="">Select department</option>
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
<option value="18">PHYSICAL EDUCATION</option></select></div>
        <div class="advanced-options-select"><select id="employee_category_id" name="employee[category_id]"><option value="">Select category</option>
<option value="1">Fedena Admin</option>
<option value="2">Non- Teaching Staff</option>
<option value="3">Teaching Staff </option>
<option value="4">finance</option></select></div>
        <div class="advanced-options-select"><select id="employee_position_id" name="employee[position_id]"><option value="">Select position</option>
<option value="1">Fedena Admin</option>
<option value="2">Professor</option>
<option value="3">Junior Lecturer</option>
<option value="4">Head Accountant</option>
<option value="5">LD Clerk</option>
<option value="6">LD typist</option>
<option value="7">Mechanic</option>
<option value="8">Peon</option>
<option value="9">Lab Assistant</option></select></div>
        <div class="advanced-options-select"><select id="employee_grade_id" name="employee[grade_id]"><option value="">Select Grade</option>
<option value="1">Fedena Admin</option>
<option value="2">A</option>
<option value="3">B</option>
<option value="4">C</option>
<option value="5">D</option>
<option value="6">E</option></select></div>
        <div class="extender"></div>
        </div>
    </div>



    <script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('query', 0.1, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/employee/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&employee_department_id='+escape($('employee_department_id').value) + '&employee_category_id='+escape($('employee_category_id').value) + '&employee_position_id='+escape($('employee_position_id').value) + '&employee_grade_id='+escape($('employee_grade_id').value) + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})})
//]]>
</script><script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('employee_department_id', 0.1, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/employee/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&employee_department_id='+escape($('employee_department_id').value) + '&employee_category_id='+escape($('employee_category_id').value) + '&employee_position_id='+escape($('employee_position_id').value) + '&employee_grade_id='+escape($('employee_grade_id').value) + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})})
//]]>
</script><script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('employee_category_id', 0.1, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/employee/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&employee_department_id='+escape($('employee_department_id').value) + '&employee_category_id='+escape($('employee_category_id').value) + '&employee_position_id='+escape($('employee_position_id').value) + '&employee_grade_id='+escape($('employee_grade_id').value) + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})})
//]]>
</script><script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('employee_position_id', 0.1, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/employee/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&employee_department_id='+escape($('employee_department_id').value) + '&employee_category_id='+escape($('employee_category_id').value) + '&employee_position_id='+escape($('employee_position_id').value) + '&employee_grade_id='+escape($('employee_grade_id').value) + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})})
//]]>
</script><script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('employee_grade_id', 0.1, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/employee/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&employee_department_id='+escape($('employee_department_id').value) + '&employee_category_id='+escape($('employee_category_id').value) + '&employee_position_id='+escape($('employee_position_id').value) + '&employee_grade_id='+escape($('employee_grade_id').value) + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=') + '&authenticity_token=' + encodeURIComponent('HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=')})})
//]]>
</script>
  <div class="extender"></div>
    <div id="information"></div>

</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html></body></html>