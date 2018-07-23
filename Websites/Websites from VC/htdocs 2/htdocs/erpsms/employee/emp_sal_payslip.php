<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/profile.css" media="screen" rel="stylesheet" type="text/css">



<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 



<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Profile</h1>
  <h3>Details</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="nav">
   <ul>
    <li>
      <a href="#" class="drops" id="link_one">Profile ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="?page=emp_profile">General</a></li>
        <li><a href="?page=emp_profile">Personal</a></li>
        <li><a href="?page=emp_profile">Address</a></li>
        <li><a href="?page=emp_profile">Contact</a></li>
        <li><a href="?page=emp_profile">Bank Info</a></li>
        <li><a href="?page=emp_profile">Additional Info</a></li>
      </ul>
    </li>

    <li>
        <a href="#" class="drops" id="link_two">Salary ▼</a>
        <ul id="box_two" class="scriptaculously" style="display:none;">
          <li><a href="?page=emp_sal_payroll">Payroll</a></li>
          <li><a href="?page=emp_sal_payslip">Payslip</a></li>
        </ul>
      </li>
    
	 <li>
        <a href="#" class="drops" id="link_three">Leaves ▼</a>
        <ul id="box_three" class="scriptaculously" style="display:none;">
          <li><a href="?page=emp_leave_altendance" >Attendance</a></li>
          <li><a href="?page=emp_leaves">Leaves</a></li>
        </ul>
      </li>
    
		<li><a href="?page=emp_timetable">Timetable</a></li>
   		<li><a href="?page=emp_reminder">Reminder(2)</a></li>
      
     <li>
      <a href="#" class="drops" id="link_four">More▼</a>
          <ul id="box_four" class="scriptaculously" style="display:none;">
        
          <li><a href="#">Library</a></li>
        
          <li><a href="?page=emp_transport_details">Transport</a></li>
        
      </ul>
    </li>
  </ul>
</div>




<div id="fullpage-yield">

  

  <div id="employee_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Sumesh" src="./emp_sal_payslip_files/sumesh.jpg">
      
    </div>

    <div id="employee_main_info">
      <h3> SUMITH  V  </h3>
      <h4> Employee ID : E1 </h4>
    </div>

    <div id="profile-general-info">


    </div>
    <div class="extender"></div>

  </div>




  <div id="profile-infos">


    <div class="label-field-pair">
      <label for="monthly_payslip_salary_date">Select a month &amp; year</label>
      <div class="text-input-bg"><select id="monthly_payslip_salary_date" name="monthly_payslip[salary_date]" onchange="new Ajax.Request(&#39;/employee/update_monthly_payslip&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;salary_date=&#39;+value+&#39;&amp;emp_id=3&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;BiOiqb2QELGMG+8F0nYLsXvtJ0mv3ghH4YlD+EDJ9mo=&#39;)})"><option value="">Select month</option>
<option value="2011-07-01">July 2011</option>
<option value="2011-08-01">August 2011</option></select></div>
    </div>
<div id="payslip_view">
<ul class="item-list">
  <li class="heading">Payslip generated on 2011-08-01</li>
</ul>
<ul class="item-list">
  <li class="heading1">Salary</li>
  
    
    
    
      <li class="listodd">
        <div class="item-name">BASIC </div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 26000</div>
      </li>
    
  
    
    
    
      <li class="listeven">
        <div class="item-name">HRA </div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 6000</div>
      </li>
    
  
    
    
    
      <li class="listodd">
        <div class="item-name">SPECIAL ALLOWANCE  </div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 2600</div>
      </li>
    
  
    
    
    
      <li class="listeven">
        <div class="item-name">DA </div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 560</div>
      </li>
    
  
    
    
    
  
    
    
    
  
  
  <li class="listodd">
    <div class="item-name"><b>Total Salary</b></div>
    <div class="item-edit"><b><span class="currency-type">Rs.</span> 35160</b></div>
  </li>
</ul>


<ul class="item-list">
  <li class="heading1">Deductions</li>

  
    
    
    
  
    
    
    
  
    
    
    
  
    
    
    
  
    
    
    
      <li class="listeven">
        <div class="item-name">PF</div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 4560</div>
      </li>
    
  
    
    
    
      <li class="listodd">
        <div class="item-name">FBS</div>
        <div class="item-edit"><span class="currency-type">Rs.</span> 560</div>
      </li>
    
  
  
  <li class="listeven">
    <div class="item-name"><b>Total deduction</b></div>
    <div class="item-edit"><span class="currency-type"><b>Rs.</b></span> <b>5120</b></div>
  </li>
</ul>

<ul class="item-list">
  <li class="heading1">Total</li>

  <li class="listeven">
    <div class="item-name"><b>Net Salary</b></div>
    <div class="item-edit"><b><span class="currency-type">Rs.</span> 30040</b></div>
  </li>
</ul>


  <div class="pdf-link">
    <a href="http://demo.fedena.com/employee/individual_payslip_pdf/3/2011-08-01" target="_blank">► PDF Report</a>
  </div>
</div>
    <div class="extender"></div>



</div>
  <div class="extender"> </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <div id="footer">
      <div id="footer_logo">
        <div id="powered_by">
          Powered by <a href="http://www.foradian.com/" target="_blank">Fedena</a>
        </div>
        <a href="http://www.projectfedena.org/" target="_blank" class="footer-logo"></a>
      </div>
    </div>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>