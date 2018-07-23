<?php
 $coll_id=$_GET[fee_id];
 $fee_collection_date = new Main(); 
 $field1 = $fee_collection_date->getdata('*',"fee_collection_date","fee_coll_id='$coll_id'","", "");// set newsRecordSet to a 
?>
<div id="content"> 
<div id="content-header">
<!--<img alt="Admission_page_logo" src="../images/admission/admission_page_logo.jpg">-->
  <h1><center>
    REPORT FEE STRUCTURE
  </center>
  </h1>
  <h3><center>
    FEE details
  </center></h3>
  <div id="app-back-button">
   <!-- <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>-->
   <center> <input name="print" type="button" value="Print" onClick="window.print()" /></center> </div>
</div>


<div id="page-yield"> 
<?php  while( ($record1 = $field1->getNextRecord()) !== false )
    {
?>

<?php  $a=$record1['fee_coll_fee_cat'];
$fee_master_particular = new Main(); 
 $field2 = $fee_master_particular->getdata('*',"fee_master_particular","fee_category_batch	='$a'","", "");
 ?>
<form action="#" class="new_student" enctype="multipart/form-data" id="new_student" method="post">

<center>
  <table width="600" border="1" cellspacing="2" cellpadding="2" style="border:inset">
    <tr>
      <th scope="row">&nbsp;Admission Number</th>
      <td>&nbsp;<?php echo $roll;?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Fee Collection Name</th>
      <td>&nbsp; <?=$record1['fee_coll_name'] ?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Fee Category Name</th>
      <td>&nbsp;<?=$record['std_first_name']?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Start Date</th>
      <td>&nbsp;<?=$record1['fee_coll_start_date'] ?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;End Date</th>
      <td>&nbsp; <?=$record1['fee_coll_end_date'] ?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Due Date</th>
      <td>&nbsp; <?=$record1['fee_coll_due_date'] ?> <?=$record1['fee_coll_fee_cat'] ?> </td>
    </tr>
 </table>   
 <?php }?> 
 
 <br />
 <br />
 
 
 
 
 <table width="600" border="1" cellspacing="2" cellpadding="2" style="border:inset">
    
    <tr>
     <th scope="row">&nbsp;SN</th>
      <th scope="row">&nbsp;Particulars Name</th>
      <th>&nbsp;Amount </th>
    </tr>
    <?php  $i=0;?>
    <?php  while( ($record2 = $field2->getNextRecord()) !== false )
    {
?>
 <?php  $i++;   ?>
   <tr><td scope="row">&nbsp;<?PHP echo $i ?></td>
      <td scope="row">&nbsp;<?=$record2['particular_name'] ?></td>
      <td>&nbsp;<?=$record2['particular_amt']?></td>
    </tr>
    
    
<?php }?>  
 

<tr><td scope="row">&nbsp;N</td>
    <td scope="row">&nbsp;Total</td>
      <td>&nbsp;<?=$record2['particular_amt']?></td>
    </tr> 

 </table>   
 

           