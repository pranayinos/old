<?php 
//emp table be used
$emp = new Main(); 
$newsRecordSet = $emp->getdata('*',"emp","","emp_no DESC", "1");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<link media="screen" rel="stylesheet" href="css/create_monthly_payslip.css" />
<?php /*?><script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script><?php */?>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>Monthly payslip</h1>
  <h3>Create</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
  <div id="employee_profile_heading">

    <div id="employee_main_info">
      <h3>
     <?php /*?> <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        
<?=$record['emp_first_name']?>
<? echo $i;?><?php */?>
</h3>
      <h4><?php /*?><?=$record['emp_no']?><?php */?>
 </h4><?php /*?><?php }?> <?php */?> 
    </div>

    <div class="extender"></div>

  </div>
<?php
$emp_payslip = new Main(); 
$newsRecordSet1=$emp_payslip->getdata('*',"emp_payslip","","emp_no DESC", "1");

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee payslip implemented by 8 nov 2012
			   $cols['emp_no'] =$_POST['emp_no'];
			   $cols['emp_name'] =$_POST['emp_name'];
			   $cols['sal_date'] =$_POST['salary_date'];
			   $cols['basic_sal']=$_POST['basic_sal'];
			   $cols['hra']=$_POST['hra_amount'];
			   $cols['pf']=$_POST['pf_amount'];
			   $cols['pb']=$_POST['pb_amount'];
			   $cols['medical_all']=$_POST['medical_amount'];
			   $cols['insurance']=$_POST['insurance_amount'];
			  
		  if($emp_payslip->Inserttable($cols,"emp_payslip"))
           {
				$msg="New  Payslip Added Succesfully";
				//header("location:?page=create_monthly_payslip&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			//header("location:?page=create_monthly_payslip&error=$msg");
		   }		
	 }	


?>
<div id="form-content">
    <form action="#" method="post"><div style="margin: 0px; padding: 0px; display: inline; "><input name="authenticity_token" type="hidden" value="OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY="></div>
    
<?php  //GET THE EMPLOYEE ID AND NAME FROM TABLE EMP 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
 <div class="payslip-field-pair">
          <label for="payroll_category_name">Employee Id</label>
          <div class="payslip-input-bg"><input id="emp_no" name="emp_no" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 1 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" readonly="readonly" type="text" value="<?=E.$record['emp_no']?>"></div>
        </div>

 <div class="payslip-field-pair">
          <label for="payroll_category_name">Employee Name</label>
          <div class="payslip-input-bg"><input id="emp_no" name="emp_no" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 1 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" readonly="readonly" type="text" value="<?=$record['emp_first_name']?>"></div>
        </div>

<?php }?>


    <div class="payslip-field-pair">
      <label for="salary_date">Salary date</label>
      <div class="payslip-input-bg">
<input id="salary_date" name="salary_date" readonly="readonly" type="text" value="2012-11-08"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[2010, 2012]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>


 <div class="payslip-field-pair">
          <label for="payroll_category_name">Basic</label>
          <div class="payslip-input-bg"><input id="basic_sal" name="basic_sal" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 1 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
      <!--  <div class="payslip-field-pair">
          <label for="payroll_category_name">Travel allowance</label>
          <div class="payslip-input-bg"><input id="manage_payroll_5_amount" name="manage_payroll[5][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 5 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
        <div class="payslip-field-pair">
          <label for="payroll_category_name">HRA</label>
          <div class="payslip-input-bg"><input id="hra_amount" name="hra_amount" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 12 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
      <!--  <div class="payslip-field-pair">
          <label for="payroll_category_name">dsfs</label>
          <div class="payslip-input-bg"><input id="manage_payroll_14_amount" name="manage_payroll[14][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 14 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
       <!-- <div class="payslip-field-pair">
          <label for="payroll_category_name">BASIC </label>
          <div class="payslip-input-bg"><input id="manage_payroll_15_amount" name="manage_payroll[15][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 15 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
      
        <div class="payslip-field-pair">
          <label for="payroll_category_name"> Provident Fund</label>
          <div class="payslip-input-bg"><input id="pf_amount" name="pf_amount" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 2 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
        <div class="payslip-field-pair">
          <label for="payroll_category_name">Perfomance Bonus</label>
          <div class="payslip-input-bg"><input id="pb_amount" name="pb_amount" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 3 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
        <div class="payslip-field-pair">
          <label for="payroll_category_name">Medical Allowance</label>
          <div class="payslip-input-bg"><input id="medical_amount" name="medical_amount" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 4 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
        <div class="payslip-field-pair">
          <label for="payroll_category_name">Insurance</label>
          <div class="payslip-input-bg"><input id="insurance_amount" name="insurance_amount" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 7 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>
      
        <!--<div class="payslip-field-pair">
          <label for="payroll_category_name">HRA</label>
          <div class="payslip-input-bg"><input id="manage_payroll_9_amount" name="manage_payroll[9][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 9 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value=""></div>
        </div>-->
      
       <!-- <div class="payslip-field-pair">
          <label for="payroll_category_name">tax</label>
          <div class="payslip-input-bg"><input id="manage_payroll_13_amount" name="manage_payroll[13][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 13 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
      <!--  <div class="payslip-field-pair">
          <label for="payroll_category_name">hrra</label>
          <div class="payslip-input-bg"><input id="manage_payroll_16_amount" name="manage_payroll[16][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 16 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
     <!--   <div class="payslip-field-pair">
          <label for="payroll_category_name">P F </label>
          <div class="payslip-input-bg"><input id="manage_payroll_17_amount" name="manage_payroll[17][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 17 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
      <!--  <div class="payslip-field-pair">
          <label for="payroll_category_name">abc</label>
          <div class="payslip-input-bg"><input id="manage_payroll_18_amount" name="manage_payroll[18][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 18 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      
       <!-- <div class="payslip-field-pair">
          <label for="payroll_category_name">qwe</label>
          <div class="payslip-input-bg"><input id="manage_payroll_19_amount" name="manage_payroll[19][amount]" onchange="new Ajax.Request(&#39;/payroll/update_dependent_fields&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;amount=&#39;+ value + &#39;&amp;cat_id=&#39; + 19 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)})" size="30" type="text" value="0"></div>
        </div>-->
      


    <div id="submit-button">
      <input name="commit" type="submit" value="► Create">
    </div>
    <div class="extender"></div>
  </form>
  </div>

  <div id="individual-payslip-categories">
    <div id="individual-payslip-categories-list">
      


  <div id="list-payslip-category">
    




<ul>


</ul>


  </div>


<div class="extender"></div>
<!--<div id="add-payslip-category-link">
  
  <a href="http://demo.fedena.com/employee/create_monthly_payslip/8#" onclick="new Ajax.Updater(&#39;payslip-category-form&#39;, &#39;/employee/add_payslip_category&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;emp_id=8&amp;salary_date=&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;OsECdEpWCgPMTKAeBD6YYYqEgf37ra3Ig/EjRpuzlgY=&#39;)}); return false;">► Add new category</a>
</div>-->


<div id="payslip-category-form"> </div>

      <!-- div id="payslip-category-form"> </div -->
    </div>
  </div>
  <div class="extender"></div>
</div>
 </div>

      <div class="extender"></div>
    </div>

        <!-- footer -->
  <?php include("include/footer.php")?>