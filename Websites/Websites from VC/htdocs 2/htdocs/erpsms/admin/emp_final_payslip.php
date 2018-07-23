<?php   $emp_payslip = new Main(); // create a new news object
$emp = new Main();
$id=$_GET[id];
	$newsRecord1 = $emp_payslip->getdata('*',"emp_payslip","payslip_id='$id'","", "");
	$strecord = $newsRecord1->getNextRecord();
	$no=$strecord['emp_no']; 
	$newsRecord3 = $emp->getdata('*',"emp","emp_no='$no'","", "");
	$record3 = $newsRecord3->getNextRecord();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/view_employee_payslip.css" media="screen" rel="stylesheet" type="text/css">


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
  <h1>Employee</h1>
  <h3>Employee payslip</h3>
  <div id="app-back-button">
    <a href="/employee/view_employee_payslip" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
<ul class="item-list">
  <li class="heading"><?=$record3['emp_first_name'].''.$record3['emp_mid_name'].''.$record3['emp_last_name'];?>  </li>
  <li class="heading">Payslip generated on <?=$strecord['sal_date'];?> <span class="red"><?=$strecord['status'];?></span></li>
</ul>
<ul class="item-list">
  <li class="heading1">Salary</li>
  
    
      <li class="listodd">
        <div class="item-name">Basic </div>
        <div class="item-edit"><span class="currency-type"></span> <?=$strecord['basic_sal'];?></div>
      </li>
    
  
    
      <li class="listeven">
        <div class="item-name">Perfomance Bonus </div>
        <div class="item-edit"><span class="currency-type"></span> <?=$strecord['pb'];?></div>
      </li>
    
  
    
  
    
      <li class="listodd">
        <div class="item-name">Medical Allowance </div>
        <div class="item-edit"><span class="currency-type"></span><?=$strecord['medical_all'];?></div>
      </li>
    
  <?php
  
  $t=$strecord['basic_sal']+$strecord['pb']+$strecord['medical_all'];
  ?>
  
  <li class="listeven">
    <div class="item-name"><b>Total Salary</b></div>
    <div class="item-edit"><b><span class="currency-type"></span> <?=$t;?></b></div>
  </li>
</ul>

<ul class="item-list">
  <li class="heading1">Deductions</li>
    <li class="listodd">
        <div class="item-name">Provident Fund</div>
        <div class="item-edit"><span class="currency-type"></span> <?=$strecord['pf'];?></div>
      </li>
    
  
    <?php
  
  $d=$t-$strecord['pf'];
  
  $n=$t+$strecord['hra']+$strecord['insurance'];
  ?>
  
  
  <li class="listeven">
    <div class="item-name"><b>Total deduction</b></div>
    <div class="item-edit"><span class="currency-type"><b></b></span> <b><?=$d;?></b></div>
  </li>
</ul>

<ul class="item-list">
  <li class="heading1">Total</li>
  <li class="listeven">
    <div class="item-name"><b>Net Salary</b></div>
    <div class="item-edit"><span class="currency-type"><b></b></span><b><?=$n;?></b></div>
  </li>
</ul>


<div class="pdf-report">
 
   <a href="?page=emp_payslip_pdf&id=<?=$strecord['payslip_id']?>" class="user_button" target="_blank"> ► PDF Report</a>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>