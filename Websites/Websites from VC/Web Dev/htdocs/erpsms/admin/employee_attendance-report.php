<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/photo_add.css" media="screen" rel="stylesheet" type="text/css">
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
<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Employee Attendance</h1>
  <h3>Reports</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee_attendance/report#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <form action="./employee_attendance-report_files/employee_attendance-report.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
    <div class="label-field-pair">
      <label for="employee_department_select">Select the department</label>
      <div class="text-input-bg"><select id="employee_department_department_id" name="employee_department[department_id]" onChange="new Ajax.Request(&#39;/employee_attendance/update_attendance_report&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select a department</option>
<option value="49">admin</option>
<option value="48">finance </option>
<option value="62">Primary Deaprtment</option>
<option value="46">System Admin</option></select></div>
    </div>
  </form>

  <div id="attendance_report">

    
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td>
      Name
    </td>

    
      <td>
        c
      </td>
    
      <td>
        s
      </td>
    
    <td>
      Total&nbsp;&nbsp;
    </td>
    <!-- attendance_tr -->
  </tr>

  <tr class="tr-blank">
    
  </tr>

  
    <tr class="tr-odd">
      <td class="col-2">
        <a href="http://demo.fedena.org/employee_attendance/emp_attendance/58">Admin  User</a>
        
      </td>

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
      <td class="col-5"> 0 </td>

    </tr><!-- attendance_tr -->
  
    <tr class="tr-even">
      <td class="col-2">
        <a href="http://demo.fedena.org/employee_attendance/emp_attendance/60">sudhakar K  P</a>
        
      </td>

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
      <td class="col-5"> 0 </td>

    </tr><!-- attendance_tr -->
  
    <tr class="tr-odd">
      <td class="col-2">
        <a href="http://demo.fedena.org/employee_attendance/emp_attendance/61">sudhakar K P</a>
        
      </td>

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
        
        <td class="col-5">
          
          
          
          
          
            
            0
            
          
        </td><!-- attendance_td -->

      
      <td class="col-5"> 0 </td>

    </tr><!-- attendance_tr -->
  

</tbody></table>
</div>

</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>