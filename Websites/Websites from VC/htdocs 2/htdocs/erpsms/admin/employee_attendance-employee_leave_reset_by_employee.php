<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/employee_leave_reset_by_employee.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Reset employee leaves.</h1>
  <h3>Reset Employee Leave for each employee</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=employee_attendance-employee_view_all">View all</a></li>
  </ul>

</div>

<div id="fullpage-yield">
  <div id="search_box_bg">
    <div id="form-content">
      <form name="employee" action="" style="display:inline;">
        <label for="name">
          Search
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
        </label>
        <div id="search_textbox">
          <input autocomplete="off" id="query" name="query" type="text"><br>
        </div>
      </form>
    </div>
    <div class="advanced_options">
      <div class="advanced-options-select"><select id="employee_department_id" name="employee[department_id]"><option value="">Select department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select></div>
      <div class="advanced-options-select"><select id="employee_category_id" name="employee[category_id]"><option value="">Select category</option>
<option value="47">System Admin</option>
<option value="51">Officials </option>
<option value="52">Teaching Staff</option></select></div>

      <div class="advanced-options-select"><select id="employee_position_id" name="employee[position_id]"><option value="">Select position</option>
<option value="48">System Admin</option>
<option value="50">HOD</option>
<option value="51">Asst Professor </option></select></div>
      <div class="advanced-options-select"><select id="employee_grade_id" name="employee[grade_id]"><option value="">Select Grade</option>
<option value="45">System Admin</option>
<option value="47">level 1</option>
<option value="48">level 2</option></select></div>
      <div class="extender"></div>
    </div>
  </div>



  


  <script type="text/javascript">
    function employee_search_ajax(){
 if ($('query').value.include("%")) return;
Element.show('loader'); new Ajax.Updater('information', '/employee_attendance/employee_search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+ $('query').value + '&employee_department_id='+$('employee_department_id').value + '&employee_category_id='+$('employee_category_id').value + '&employee_position_id='+$('employee_position_id').value + '&employee_grade_id='+$('employee_grade_id').value + '&authenticity_token=' + encodeURIComponent('JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=')})
  }

  document.observe("dom:loaded", function() {
    new Form.Element.Observer('query', 1, employee_search_ajax);
    new Form.Element.Observer('employee_department_id', 0.1, employee_search_ajax);
    new Form.Element.Observer('employee_category_id', 0.1, employee_search_ajax);
    new Form.Element.Observer('employee_position_id', 0.1, employee_search_ajax);
    new Form.Element.Observer('employee_grade_id', 0.1, employee_search_ajax);
  });

  </script>

  <div class="extender"></div>
  <div id="information">


   <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
        
        <tbody><tr class="tr-odd">
          <td class="col-2">No employee found</td>
        </tr>
      
    </tbody></table>

</div>


</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>