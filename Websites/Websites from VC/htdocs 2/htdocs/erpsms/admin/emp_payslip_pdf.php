<?php   $emp_payslip = new Main(); // create a new news object
$emp = new Main();
$id=$_GET[id];
	$newsRecord1 = $emp_payslip->getdata('*',"emp_payslip","payslip_id='$id'","", "");
	$strecord = $newsRecord1->getNextRecord();
	$no=$strecord['emp_no']; 
	$newsRecord3 = $emp->getdata('*',"emp","emp_no='$no'","", "");
			$record3 = $newsRecord3->getNextRecord();	
	?>
<?php
  
  $t=$strecord['basic_sal']+$strecord['pb']+$strecord['medical_all'];
  ?>
  
  <?php
  
  $d=$t-$strecord['pf'];
  
  $n=$t+$strecord['hra']+$strecord['insurance'];
  ?>
 </head>
  <body>
<!-- header menu --->
<!-- end of side bar -->

<center>
  <h1>Employee Payslip Report</h1>
  <h3>Employee payslip</h3>
  <center> 
    <p>Payslip generated on <?=$strecord['sal_date'];?> <span class="red"><?=$strecord['status'];?>
    <br>
      <input name="print" type="button" value="Print" onClick="window.print()" />
    </p><h5> <?=$record3['emp_first_name'].' '.$record3['emp_mid_name'].' '.$record3['emp_last_name'];?> </h5>
     <br>
    <table width="500" height="146" border="1" cellpadding="1" cellspacing="1" border="1">
    <tr>
        <th width="122">&nbsp;Salary</td>
        <td width="208">&nbsp;</td>
      </tr>
      <tr>
        <td width="122">&nbsp;Basic</td>
        <td width="208">&nbsp;<?=$strecord['basic_sal'];?></td>
      </tr>
      <tr>
        <td>&nbsp;Perfomance Bonus </td>
        <td>&nbsp;<?=$strecord['pb'];?></td>
      </tr>
      <tr>
        <td>&nbsp;Medical Allowance</td>
        <td>&nbsp;<?=$strecord['medical_all'];?></td>
      </tr>
      <tr>
        <td>&nbsp;Total Salary</td>
        <td>&nbsp;<?=$t;?></td>
      </tr>
     
    </table>
   <br>
    <table width="500" height="90" border="1" cellpadding="1" cellspacing="1" border="1" >
     <tr> 
        <th width="122">&nbsp;Deductions</td>
        <td width="208">&nbsp;</td>
      </tr>
      <tr>
        <td width="122">&nbsp;Provident Fund</td>
        <td width="208">&nbsp;<?=$strecord['pf'];?></td>
      </tr>
     
    
      <tr>
        <td>&nbsp;Total Deductions</td>
        <td>&nbsp;<?=$d;?></td>
      </tr>
     
    </table>
    
    
     <br>
    <table width="500" height="20" border="1" cellpadding="1" cellspacing="1" border="1">
    <tr>
        <th width="122">&nbsp;Total</td>
        <td width="208">&nbsp;</td>
      </tr>
      <tr>
        <td width="122">&nbsp;Net Salary</td>
        <td width="208">&nbsp;<?=$n;?></td>
      </tr>
      
     
    </table>
  

    
  
  
  
  
  