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
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Payslip</h1>
  <h3>Create</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  
  <div id="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-select_department_employee">Select Employee</a></div>
      <div class="link-descr">Generate payslip of an employee</div>
    </div>
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-rejected_payslip">Rejected Employee</a></div>
      <div class="link-descr">Manage employee rejected payslips</div>
    </div>


    <div class="link-box">
      <div class="link-heading"><a href="#" onClick="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;message-div&#39;, &#39;/employee/payslip_date_select&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)}); return false;">One click payslip generator</a></div>
      <div class="link-descr">One click payslip generation</div>

    </div>

    <div class="link-box">
      <div class="link-heading"><a href="#" onClick="if (confirm(&#39;This will delete the entire payslip record of all the employees(of the month you select),  from the system. Are you sure ?&#39;)) { Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;message-div&#39;, &#39;/employee/payslip_revert_date_select&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)}); }; return false;">One click payslip revert</a></div>
      <div class="link-descr">One click payslip revertion</div>

    </div>
    <div class="extender"></div>
    <div class="loader-image">
      <img align="absmiddle" alt="Loader2" border="0" id="loader" src="../images/loader2.gif" style="display: none;">
    </div>

    <div id="message-div">
      <div class="extender"></div>
    </div>
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

        <!-- footer -->
  <?php include("include/footer.php")?>