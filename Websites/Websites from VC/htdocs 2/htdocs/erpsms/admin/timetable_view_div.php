<?php
//************************************Show Employee******************************************
$subject=new Main();
$subject1=$_GET[subject1];
//$name=$_POST['emp'];

if($subject1!="")
{
echo '  <select id="emp" name="emp"  />
       <option value="">Select Emploee</option>';
	   
$newsRecord = $subject->getdata('*',"emp","emp_dept_code='$subject1'","", "");
	while(($record = $newsRecord->getNextRecord()) !== false )
{
	//echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
     
echo '<option value="'.$record[emp_first_name].'"> '.$record['emp_first_name'].'</option>';
 }
echo '</select> ';
}


//********************************************************************************************
//*********************************Show Time*****************************************
$time = new Main(); 
$batch_id=$_GET[batch_id];

if($batch_id!="")
{
$newsRecord = $time->getdata('*',"time_setting","batch_id='$batch_id'", "","");
 echo '<br><br><br><br>
<table id="listing" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td  class="col-2">ID</td>
    <td class="col-4">Start Time</td>
    <td class="col-2">End Time</td>
	<td class="col-2">Option</td>
    
  </tr>';
   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
 
 	  echo '<tr class="tr-odd ">
      
      <td class="col-4">'.$record['sl'].'</td>
      <td class="col-2">'.$record['start_time'].'</td>
	  <td class="col-2">'.$record['end_time'].'</td>
	  <td class="col-2"><a href="?page=edit_class_time_table&ts_id='.$record[ts_id].'">Edit</a></td>
     
 
        
      </td>
   </tr>';
	}  
	echo '</body></table>';
}

//***********************************************************************************


//*******************************time table checked*******************************

?>
