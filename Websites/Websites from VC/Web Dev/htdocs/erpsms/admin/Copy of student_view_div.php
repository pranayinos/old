<?php
$student = new Main(); // create a new news object
$q=$_GET[q];
$batch=$_GET[batch];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** Students Details by name ****************************************
if($q!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_first_name like '$q%' or deactivate=0","std_first_name ASC", "");
}
//  **************************************** Student Details by batch  ****************************************
if($batch!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");
}
if($q!="" || $batch!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Adm-No.</td>
	<td>Name</td>
	<td>Course-Batch</td>
	<td> Option</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	$batch=$record[std_batch_code];
	$batchrecord = $student->getdata('batch.batch_code,course.course_name,course.course_section_name',"batch,course","batch.batch_id='$batch' and batch.batch_course_code=course.course_code","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	$i++;	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.'</td>
	  <td class="col-3">'.$record[std_adm_no].'</td>
	  <td class="col-4"><a href="?page=student_profile&id='.$record[id].'">'.$record[std_first_name].' '.$record[std_middle_name].' '.$record[std_last_name].'</a></td>
	  <td class="col-4">'.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
	  <td class="col-7"><a href="?page=student_profile&id='.$record[id].'">View Profile</a></td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}
//  Details Students

//  **************************************** Employee  Details by name 20 nov 2012 *********************************************************
$emp = new Main(); // create a new news object
$e1=$_GET[e1];
if($e1!="")
{
$newsRecord = $emp->getdata('emp_no,emp_first_name,emp_mid_name,emp_last_name,emp_dept_code',"emp","emp_first_name like '$e1%'","emp_first_name ASC", "");

}
//  **************************************** Epmployeee Details by batch  *******************************************************************

if($e1!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Employee name</td>
	<td>Emp ID	</td>
	<td>Employee Department</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	$batch=$record[emp_no];
	$batchrecord = $emp->getdata('emp_no',"emp","emp_no='$batch'","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	$i++;	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.'</td>
	   <td class="col-2"><a href="?page=employee-profile&id='.$record[emp_no].'">'.$record[emp_first_name].' '.$record[emp_mid_name].' '.$record[emp_last_name].'</a></td>
	  <td class="col-3">'."E".$record[emp_no].'</td>
	 
	  <td class="col-4">'.$record[emp_dept_code].'</td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}
//  Details Employee




// **************************************** Students fee  details ****************************************
$paystudent=$_GET[paystudent];
$fee_students_all_batch=$_GET[fee_students_all_batch];

if($paystudent!="")
{
$feest=$paystudent;
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_first_name like '$feest%'","std_first_name ASC", "");
}

if($fee_students_all_batch!="")
{
$batch=$fee_students_all_batch;
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$fee_students_all_batch'","std_first_name ASC", "");

}
if($paystudent!="" || $fee_students_all_batch!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Adm-No.</td>
	<td>Name</td>
	<td>Course-Batch</td>
	<td> Option</td>
	
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	
	$batch=$record[std_batch_code];
	$batchrecord = $student->getdata('batch.batch_code,course.course_name,course.course_section_name',"batch,course","batch.batch_id='$batch' and batch.batch_course_code=course.course_code","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	$i++;	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.'</td>
	  <td class="col-3">'.$record[std_adm_no].'</td>
	  <td class="col-4"><a href="?page=fees_student_one&id='.$record[id].'">'.$record[std_first_name].' '.$record[std_middle_name].' '.$record[std_last_name].'</a></td>
	  <td class="col-4">'.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
	  <td class="col-7"><a href="?page=fees_student_one&id='.$record[id].'">View Fee</a></td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}
// **************************************** Subject ****************************************
if($batch_subject!="")
{
$newsRecord = $student->getdata('*',"subject","subject_batch_code = '$batch_subject'","subject_name ASC", "");

 echo '<div class="add_sub">

  </div><ul id="category-list">';
   $i=0;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	$i++;  
      echo '<li id="subject-1" class="listeven">
        <div class="category-name">'.$record[subject_name].'</div>
        <div class="opt">
          <div class="category-code">'.$record[subject_name].'</div>
          <div class="category-edit"><a href="?page=edit_subject&subjectid='.$record[subject_id].'" onClick="">Edit</a>
		  <div class="category-edit"><a href="?page=subject&subjectid='.$record[subject_id].'" onClick="">Delete</a>
		   </div>
		  </li>';
	}  
  echo '</ul>';
}
// **************************************** fee catgegory **************************************** 
$fee_cat_batch=$_GET[fee_cat_batch];
if($fee_cat_batch!="")
{
$Record = $student->getdata('*',"fees_master_category","fee_batch_id = '$fee_cat_batch'","fee_master_name ASC", "");

 echo '<div id="categories">

  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Sl  no.</td>
      <td>Fees Name</td>
      <td>Batch Name</td>
      <td>Created Date </td>
      <td>Select </td>
    </tr><tr class="tr-blank"></tr>';
   $i=0;   
   while( ($newsRecord = $Record->getNextRecord()) !== false )
    { 
	$batchrecord = $student->getdata('batch.batch_code,course.course_name,course.course_section_name',"batch,course","batch.batch_id='$fee_cat_batch' and batch.batch_course_code=course.course_code","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	
	$i++;  
    
     if(i%2==0) echo '<tr class="tr-odd">';
	 else echo'<tr class="tr-even">';
       echo' <td class="col-5">'.$i.'</td>
        <td class="col-1"><a href="?page=fee_master_particular&catid='.$newsRecord[fee_id].'"  title="'.$newsRecord[fee_category_description].'">'.$newsRecord[fee_master_name].'</a>
        </td>
        <td class="col-7">   '.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
        <td class="col-1">'.date(("d-M-Y"),strtotime($newsRecord[fees_created_date])).'</td>
        <td class="col-1">
          <div class="options">
		  <span class="small"> <a href="#&catid='.$newsRecord[fee_id].'" onclick="">Delete</a></span>
            
            <span class="small"> <a href="?page=edit_ master_fees&fee_id='.$newsRecord[fee_id].'">Edit</a></span>
          </div> 
        </td>
      </tr>';
	}  
}
echo '  </tbody></table>

</div>';
}
//**************************************** Fee Discount ****************************************
$discountbatch=$_GET[discountbatch];
if($discountbatch!="")
{
$newsRecord = $student->getdata('*',"fee_master_discount","fee_discount_batch = '$discountbatch'","fee_discount_name ASC", "");

 echo '
<table id="listing">
  <tbody><tr class="tr-head">
  <td>SL.No</td>
    <td>Name</td>
    <td>Student Category</td>
    <td>Student Adm No</td>
    <td>Discount(%)</td>
    
      <td>Option</td>
    
  </tr>';
   $i=0;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
		$stcat=$record['fee_discount_student_cat'];
		$catRecordSet = $student->getdata('*',"category","cat_id='$stcat'","category_description ASC", "50"); //category
		$catrecord = $catRecordSet->getNextRecord();
	$i++;  
	  echo '
    <tr class="tr-odd ">
	   <td class="col-3">'.$i.'</td>
      <td class="col-1">'.$record[fee_discount_name].'</td>
      
        <td class="col-3">'.$catrecord[category_description].'</td>
        <td class="col-1">'.$record[fee_discount_adm_no].'</td>      
      <td class="col-1">'.$record[fee_discount_per].'</td>
      
      <td class="col-3">
       <a href="?page=edit_fee_discount&fee_discount_id='.$record[fee_discount_id].'" onClick="">Edit</a> | 
<a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) return false;">Delete</a>
      </td>
        
    </tr>';
	}  
  echo '</ul>';      
   
}
// ****************************************fee collection batch ****************************************
$feecollbatch=$_GET[feecollbatch];
if($feecollbatch!="")
{
$newsRecord = $student->getdata('*',"fee_collection_date","fee_coll_batch_id = '$feecollbatch'","fee_coll_name ASC", "");

 echo '
<table id="listing">
  <tbody><tr class="tr-head">
    <td  class="col-4">Name</td>
    <td class="col-3">Start Date</td>
    <td class="col-3">End Date</td>
    <td class="col-3">Due Date</td>
    <td class="col-3">Option</td>
  </tr>';
   $i=0;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	$i++;  
 	  echo '<tr class="tr-odd ">
      <td class="col-4"><a href="?page=collection_details_view&fee_col_id='.$record[fee_coll_id].'">'.$record[fee_coll_name].'</a></td>
      <td class="col-3">'.date(("d-M-Y"),strtotime($record[fee_coll_start_date])).'</td>
      <td class="col-3">'.date(("d-M-Y"),strtotime($record[fee_coll_end_date])).'</td>
      <td class="col-3">'.date(("d-M-Y"),strtotime($record[fee_coll_due_date])).'</td>
      <td class="col-3"> 
  <a href="?page=edit_fee_collection_view&fee_coll_id='.$record[fee_coll_id].'" onClick="">Edit</a>|
   <a href="page?page=fee_collection_date&del&subjectid='.$record[fee_coll_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;))">Delete</a>
        
      </td>
   </tr>';
	}  
	echo '</tbody></table>';
}

//**************************************** fees student structure **************************************** 
$stfeestructure=$_GET[stfeestructure]; // fee structure by student
if($stfeestructure!="") 
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_first_name like '$stfeestructure%'","std_first_name ASC", "");
}
$fee_structure_students_all_batch=$_GET[fee_structure_students_all_batch]; // fee structure by batch
if($fee_structure_students_all_batch!="")
{
$batch=$fee_structure_students_all_batch;
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");

}
if($stfeestructure!="" || $fee_structure_students_all_batch!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Adm-No.</td>
	<td>Name</td>
	<td>Course-Batch</td>
	<td> Option</td>
	
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	
	$batch=$record[std_batch_code];
	$batchrecord = $student->getdata('batch.batch_code,course.course_name,course.course_section_name',"batch,course","batch.batch_id='$batch' and batch.batch_course_code=course.course_code","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	$i++;	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.'</td>
	  <td class="col-3">'.$record[std_adm_no].'</td>
	  <td class="col-4"><a href="?page=fees_structure_student_one&id='.$record[id].'">'.$record[std_first_name].' '.$record[std_middle_name].' '.$record[std_last_name].'</a></td>
	  <td class="col-4">'.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
	  <td class="col-7"><a href="?page=fees_structure_student_one&id='.$record[id].'">View Fee</a></td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}

//************************* fees student structure ********************************************************************************* 

$fee_sub_structure=$_GET[fee_sub_structure];
$admno=$_GET[admno];
if($fee_sub_structure!="")
{
$i=1;
$newsRecord = $student->getdata('*',"fee_collection_date","fee_coll_id = '$fee_sub_structure'","", "");
$record = $newsRecord->getNextRecord();
$feecat_record_set = $student->getdata('fee_master_name',"fees_master_category","fee_id='$record[fee_coll_fee_cat]'","", "");
$feecat_record= $feecat_record_set->getNextRecord();
	echo '

<br />
<br />
<br />

<div class="info">
  <div class="name">Fee Collection Name</div><div class="val"><span>:</span>'.$record[fee_coll_name].'</div>
  <div class="name">Fee Category Name</div><div class="val"><span>:</span>'.$feecat_record[fee_master_name].'</div>
  <div class="name">Start Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_start_date])).'</div>
  <div class="name">End Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_end_date])).'</div>
  <div class="name">Due Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_due_date])).'</div>
  <div class="extender"></div>
</div>
  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Sl no.</td>
      <td>Particulars</td>
      <td>Amount(Rs.)</td>
    </tr>';
$fee_part_record_set = $student->getdata('*',"fee_master_particular","fee_category_batch='$record[fee_coll_fee_cat]'","", "");
 while( ($record_part = $fee_part_record_set->getNextRecord()) !== false )
    { 
		
	$StudentRecord = $student->getdata('std_category,std_adm_no',"student","id ='$admno'","", "");
	$strecord = $StudentRecord->getNextRecord();
	$std_category=$strecord['std_category'];
	$std_adm_no=$strecord['std_adm_no'];
	$particular_st_cat=$record_part['particular_st_cat']; if($particular_st_cat=="")  $std_category="";
	$particular_adm_no=$record_part['particular_adm_no']; if($particular_adm_no=="")  $std_adm_no="";
	$fee_particular_record_set = $student->getdata('*',"fee_master_particular","particular_id='$record_part[particular_id]' and particular_adm_no='$std_adm_no' and particular_st_cat='$std_category'","", "");
if( ($record_particular = $fee_particular_record_set->getNextRecord()) !== false )
{
	echo'
      <tr class="tr-blank"></tr>
      <tr class="tr-odd">
        <td class="col-1">'.$i.'</td>
        <td class="col-2">'.$record_particular[particular_name].'</td>
        <td class="col-6">'.$record_particular[particular_amt].'</td>
      </tr>';
	  $totfee=$totfee+$record_particular[particular_amt];
	    $i++;	
  } }
    echo '<tr class="tr-blank"></tr>
    <tr class="tr-blank"></tr>
    <tr class="tr-odd" cellpadding="1" cellspacing="1">
      <td class="col-8" colspan="2">Total Fee</td>
      <td class="col-6">'.number_format($totfee, 2).'</td>
    </tr>';
	//************************** fees student Discount*************
	echo'
      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-1"></td>
        <td class="col-1" colspan="2"><span>Discount</span></td>
      </tr>';
	  $i=0;
$fee_discount_record_set = $student->getdata('*',"fee_master_discount","fee_discount_fee_cat='$record[fee_coll_fee_cat]'","", "");
 while( ($record_discount = $fee_discount_record_set->getNextRecord()) !== false )
    { 
      $i++;
	// echo	$record[fee_coll_fee_cat].$record_discount['fee_discount_name']; 
	  $StudentRecord = $student->getdata('std_category,std_adm_no,std_batch_code',"student","id='$admno'","", "");
	$strecord = $StudentRecord->getNextRecord();
	$std_category=$strecord['std_category'];
	$std_adm_no=$strecord['std_adm_no'];
	$std_batch_code=$strecord['std_batch_code'];
	
 $fee_discount_student_cat=$record_discount['fee_discount_student_cat']; 
if($fee_discount_student_cat=="") print $std_category="";

	$fee_discount_adm_no=$record_discount['fee_discount_adm_no']; 
	if($fee_discount_adm_no=="")  print $std_adm_no="";
	
	$fee_discount_batch=$record_discount['fee_discount_batch'];
	 if($fee_discount_batch=="")  print $std_batch_code="";

	$fee_discount_record = $student->getdata('*',"fee_master_discount","fee_discount_id='$record_discount[fee_discount_id]' and fee_discount_student_cat='$std_category' and fee_discount_batch='$std_batch_code' and fee_discount_adm_no='$std_adm_no'","", "");
if( ($record_discount_par= $fee_discount_record->getNextRecord()) !== false )

{  
      echo'  <tr class="tr-odd">
          <td class="col-1">'.$i.'</td>
          <td class="col-2">'.$record_discount_par[fee_discount_name].'</td>
          <td class="col-6">'.number_format($record_discount_par[fee_discount_per],1).'%</td>
        </tr>';
		$totdiscount=$totdiscount+$record_discount_par[fee_discount_per];
		}
		}
		echo'
      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>

      <tr class="tr-odd" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Total Discount</td>
        <td class="col-6">('.number_format($totdiscount,1).'%) '.number_format(($totdisfee=$totfee*$totdiscount/100),2).'</td>
      </tr>
      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>
           <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Fee to be paid</td>
        <td class="col-6">'.number_format($Totalpayable=$totfee-$totdisfee,2).'</td>
      </tr>
   ';
   echo ' 
  </tbody></table>
<a href="?page=fee_pdf_report&id='.$admno.'&fee_id='.$record[fee_coll_id].'" class="user_button" target="blank">PDF Report</a>';
}

//************************* fees student Submision **************** ************************************************************** 

$fee_st_submission=$_GET[fee_st_submission];

$admno=$_GET[admno];
$totdiscount=0;
$totdisfee=0;
$totfee=0;
$totdisfee=0;
$totdisfee=0;
if($fee_st_submission!="")
{
$i=1;
$newsRecord = $student->getdata('*',"fee_collection_date","fee_coll_id = '$fee_st_submission'","", "");
$record = $newsRecord->getNextRecord();
$feecat_record_set = $student->getdata('fee_master_name',"fees_master_category","fee_id='$record[fee_coll_fee_cat]'","", "");
$feecat_record= $feecat_record_set->getNextRecord();
	echo '

<br />
<br />
<br />
<input name="fee_st_submission" type="hidden" value="'.$fee_st_submission.'" />
<input name="fee_coll_id" type="hidden" value="'.$record[fee_coll_id].'" />
<div class="info">
  <div class="name">Fee Collection Name</div><div class="val"><span>:</span>'.$record[fee_coll_name].'</div>
  <div class="name">Fee Category Name</div><div class="val"><span>:</span>'.$feecat_record[fee_master_name].'</div>
  <div class="name">Start Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_start_date])).'</div>
  <div class="name">End Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_end_date])).'</div>
  <div class="name">Due Date</div><div class="val"><span>:</span>'.date(("d-M-Y"),strtotime($record[fee_coll_due_date])).'</div>
  <div class="extender"></div>
</div>

<div id="fee_submission">';


  

  echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Sl no.</td>
      <td>Particulars</td>
      <td>Amount(Rs.)</td>
    </tr>';
$fee_part_record_set = $student->getdata('*',"fee_master_particular","fee_category_batch='$record[fee_coll_fee_cat]'","", "");
 while( ($record_part = $fee_part_record_set->getNextRecord()) !== false )
    { 
		
	$StudentRecord = $student->getdata('std_category,std_adm_no',"student","id ='$admno'","", "");
	$strecord = $StudentRecord->getNextRecord();
	$std_category=$strecord['std_category'];
	$std_adm_no=$strecord['std_adm_no'];

	$particular_st_cat=$record_part['particular_st_cat']; if($particular_st_cat=="")  $std_category="";
	$particular_adm_no=$record_part['particular_adm_no']; if($particular_adm_no=="")  $std_adm_no="";
	
	$fee_particular_record_set = $student->getdata('*',"fee_master_particular","particular_id='$record_part[particular_id]' and particular_adm_no='$std_adm_no' and particular_st_cat='$std_category'","", "");
if( ($record_particular = $fee_particular_record_set->getNextRecord()) !== false )
{
	echo'	
	
      <tr class="tr-blank"></tr>
    
      <tr class="tr-odd">
        <td class="col-1">'.$i.'</td>
        <td class="col-2">'.$record_particular[particular_name].'</td>
        <td class="col-6">'.$record_particular[particular_amt].'</td>
      </tr>';
	  $totfee=$totfee+$record_particular[particular_amt];
	    $i++;	
  } }
    echo '<tr class="tr-blank"></tr>
    <tr class="tr-blank"></tr>

    <tr class="tr-odd" cellpadding="1" cellspacing="1">
      <td class="col-8" colspan="2">Total Fee</td>
      <td class="col-6">'.number_format($totfee, 2).'</td>
    </tr>';
	//************************** fees student Discount************************************************************** 

	echo'<tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-1"></td>
        <td class="col-1" colspan="2"><span>Discount</span></td>
      </tr>';
	  $i=0;
$fee_discount_record_set = $student->getdata('*',"fee_master_discount","fee_discount_fee_cat='$record[fee_coll_fee_cat]'","", "");
 while( ($record_discount = $fee_discount_record_set->getNextRecord()) !== false )
    { 
      $i++;
	// echo	$record[fee_coll_fee_cat].$record_discount['fee_discount_name']; 
	  $StudentRecord = $student->getdata('std_category,std_adm_no,std_batch_code',"student","id='$admno'","", "");
	$strecord = $StudentRecord->getNextRecord();
	$std_category=$strecord['std_category'];
	$std_adm_no=$strecord['std_adm_no'];
	$std_batch_code=$strecord['std_batch_code'];
	
 $fee_discount_student_cat=$record_discount['fee_discount_student_cat']; 
if($fee_discount_student_cat=="") print $std_category="";

	$fee_discount_adm_no=$record_discount['fee_discount_adm_no']; 
	if($fee_discount_adm_no=="")  print $std_adm_no="";
	
	$fee_discount_batch=$record_discount['fee_discount_batch'];
	 if($fee_discount_batch=="")  print $std_batch_code="";

	$fee_discount_record = $student->getdata('*',"fee_master_discount","fee_discount_id='$record_discount[fee_discount_id]' and fee_discount_student_cat='$std_category' and fee_discount_batch='$std_batch_code' and fee_discount_adm_no='$std_adm_no'","", "");
if( ($record_discount_par= $fee_discount_record->getNextRecord()) !== false )

{	  
      echo'  <tr class="tr-odd">
          <td class="col-1">'.$i.'</td>
          <td class="col-2">'.$record_discount_par[fee_discount_name].'</td>
          <td class="col-6">'.number_format($record_discount_par[fee_discount_per],1).'%</td>
        </tr>';
		$totdiscount=$totdiscount+$record_discount_par[fee_discount_per];
		}
		}
		echo'        
      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>

      <tr class="tr-odd" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Total Discount</td>
        <td class="col-6">('.number_format($totdiscount,1).'%) '.number_format(($totdisfee=$totfee*$totdiscount/100),2).'</td>
      </tr>

      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>      
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Fee to be paid</td>
 <td class="col-6">'.number_format($Totalpayable=$totfee-$totdisfee,2).'
</td>
      </tr> <tr class="tr-blank"></tr>    ';

	 $Studentfeepaid = $student->getdata('SUM(fee_pay_fine) as fee_fine',"student_fee_payment","fee_pay_coll_id='$fee_st_submission' and fee_pay_student_no='$admno'","", "");

$strowfine=$stfeepayrecord = $Studentfeepaid->getNextRecord();
$fee_pay_fine=$strowfine['fee_fine'];

 if($fee_pay_fine>0) 
	{
	echo'     
		  <tr class="tr-even" cellpadding="1" cellspacing="1">
			<td class="col-8" colspan="2">  <span>  Fine Amount </span></td>
	 <td class="col-6" align="right"> <span>      
 '.number_format($fee_pay_fine,2).'</span>
	
			</td>
		  </tr>
		    <tr class="tr-blank"></tr>
		    <tr class="tr-odd" cellpadding="1" cellspacing="1">
			<td class="col-8" colspan="2">  <strong>Total Payable  Amount</strong> </td>
	 <td class="col-6" align="right">       
 '.number_format($Totalpayable+$fee_pay_fine,2).'
	
			</td>
		  </tr>
		    <tr class="tr-blank"></tr>
		  ';
	}	  


	 $Studentfeepaid = $student->getdata('*',"student_fee_payment","fee_pay_coll_id='$fee_st_submission' and fee_pay_student_no='$admno' ","", "");
	 	$fee_coll_due_date=$record[fee_coll_due_date];
$currdate=date("Y-m-d");

	while(($stfeepayrecord = $Studentfeepaid->getNextRecord()) !== false )
{
	 $fee_pay_id=$stfeepayrecord['fee_pay_id'];
	$fee_tot_amt=$stfeepayrecord['fee_tot_amt'];

	$fee_pay_payable=$fee_pay_payable+$stfeepayrecord['fee_pay_payable'];
	$payment_date=$stfeepayrecord['payment_date'];
	
	$totamtpayable=$fee_tot_amt+$fee_pay_fine;
	

 if($fee_pay_payable < $totamtpayable and $fee_pay_payable>0) 
 {
		$topay=$Totalpayable-$fee_pay_payable;
			echo' 
		     
      <tr class="tr-odd" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Fee Paid on  Date : '.date(("d-M-Y H:i"),strtotime($payment_date)).'</td>
 <td class="col-6">'.number_format($stfeepayrecord[fee_pay_payable],2).'
</td>
      </tr>';
	  }

// $day=round(abs(strtotime($currdate) - strtotime($fee_coll_due_date)))/86400;
 if($fee_pay_payable >= $totamtpayable and $fee_pay_payable>0) 
 {
 

		   echo' 
		      
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Fee Paid on  Date : '.date(("d-M-Y H:i"),strtotime($payment_date)).'</td>
 <td class="col-6">'.number_format($stfeepayrecord[fee_pay_payable],2).'
</td>
      </tr>';
	 }	
	 
	  
	 
}
// $day=round(abs(strtotime($currdate) - strtotime($fee_coll_due_date)))/86400;
 if($fee_pay_payable >= $totamtpayable and $fee_pay_payable>0) 
 {

	  
		   echo '<tr class="tr-odd">
        <td colspan="3">
		   <div class="label-field-pair2" align="right"> 
                <label> Total Paid Amount :</label>
                <label style="color:#000000; text-align:right">'.number_format($fee_pay_payable,2).' </label>
            
                  <div class="label-field-pair2" align="left">   Date : '.date(("d-M-Y H:i"),strtotime($payment_date)).'</div>
            
              
          </div>
        </td>
      </tr>
	  
   ';
   	
}
else
{

	  
	   if($fee_pay_payable <= $totamtpayable and $fee_pay_payable>0) 
 {
		$topay=$Totalpayable-$fee_pay_payable;
			 echo' <tr class="tr-odd">
        <td colspan="3">
              <div class="label-field-pair2" align="right"> 
                <label style="color:#000000; text-align:right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Total Paid Amount :</label>
                <label style="color:#000000; text-align:right">'.number_format($fee_pay_payable,2).' </label>
                <div class="label-field-pair2" align="left">  </div>
              </div>
        </td>
      </tr>';
	  }
	  	  if($fee_coll_due_date < $currdate)
{ 

 echo' <tr class="tr-blank"></tr>      
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">  <label style="color:#FF3333">  Due date has been exceeded. Please collect fine amount:</label>  Fine Amount </td>
 <td class="col-6" align="right">          <div class="label-field-pair2" align="right">
 <div class="text-input-bg1" align="right"> 
 <input id="fine_fee" name="fine_fee" size="30" onkeyup=\'subtot()\' type="text" value="">
        </div></div></td>
      </tr>';
	  } 
   if($fee_pay_payable <= $totamtpayable and $fee_pay_payable>0) 
 {
	  echo'<tr>
        <td colspan="3">
          <div class="pay_fees">            
              <div class="label-field-pair2" align="right">
			  <label>Dues Amount :</label>
                <div class="text-input-bg2">
				 <input name="txttotamt" id="txttotamt" type="hidden" value="'.$Totalpayable.'" />
				 <input name="txttotpay" id="txttotpay" type="hidden" value="'.$topay.'" />
				<input id="total_fees" name="total_fees" size="30" type="text" value="'.$topay.'"/>
			   </div>
              </div>
              <div class="pay_fees_buttons">
              <input class="submit_button" name="bt_submit" type="submit" value=" Pay Fees">
			  </div>
          </div>
        </td>
      </tr>
   ';
 }
 else
 {
 
	 echo' <tr>
        <td colspan="3">
          <div class="pay_fees">            
              <div class="label-field-pair2" align="right">
			  <label>Amount :</label>
                <div class="text-input-bg2">
				 <input name="txttotamt" id="txttotamt" type="hidden" value="'.$Totalpayable.'" />
				 <input name="txttotpay" id="txttotpay" type="hidden" value="'.$Totalpayable.'" />
				<input id="total_fees" name="total_fees" size="30" type="text" value="'.$Totalpayable.'"/>
			   </div>
              </div>
              <div class="pay_fees_buttons">
              <input class="submit_button" name="bt_submit" type="submit" value=" Pay Fees">
			  </div>
          </div>
        </td>
      </tr>

   ';
   }
	}
 
  echo ' 
  </tbody></table>
  <input name="fee_st_submission" type="hidden" value="'.$fee_st_submission.'" />
<a href="?page=fee_pdf&feecollid='.$fee_st_submission.'&id='.$strecord[id].'" class="user_button" target="blank">PDF Report</a>';
}

// 

//*************************  Batch Dues Collection date  **************************************************** 

 $dues_fee_student_batch=$_GET[dues_fee_student_batch];

if($dues_fee_student_batch!="")
{
echo '  <select id="fees_dues_coll_date" name="fees_dues_coll_date" onChange=\'show_fee_dues_student(this.value)\' />
       <option value="">Select Fee Collection </option>';
	   
$newsRecord = $student->getdata('*',"fee_collection_date","fee_coll_batch_id = '$dues_fee_student_batch'","", "");
	while(($record = $newsRecord->getNextRecord()) !== false )
{
	echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
     
echo '<option value="'.$record[fee_coll_id].'"> '.$record[fee_coll_name].' - '.date(("d-M-Y"),strtotime($record[fee_coll_due_date])).'</option>';
 }
echo '</select> ';
}

//*************************  Dues Student List   **************************************************** 

 $dues_fee_coll_id=$_GET[dues_fee_coll_id];

if($dues_fee_coll_id!="")
{

$newsRecord = $student->getdata('fee_coll_batch_id,fee_coll_fee_cat',"fee_collection_date","fee_coll_id = '$dues_fee_coll_id'","", "");
	if(($record = $newsRecord->getNextRecord()) !== false )
	{
	  $batch=$record['fee_coll_batch_id'];
	   $fee_cat=$record['fee_coll_fee_cat'];
	  $feeparticularRecord = $student->getdata('SUM(particular_amt) as fee_par_amt',"fee_master_particular","fee_category_batch = '$fee_cat'","", "");
	if(($feeparrecord = $feeparticularRecord->getNextRecord()) !== false )
	{
	 $fee_par_amt=$feeparrecord[fee_par_amt];
	} 
	 if($fee_par_amt >0)
	 {
		 $newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");
	echo '  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
		<tbody><tr class="tr-head">
		  <td>Sl  no.</td>
		  <td>Admission no</td>
		  <td>Students Name</td>
		  <td></td>
		</tr>
		';
		$i=0;
	
	 while( ($strecord = $newsRecord->getNextRecord()) !== false )
		{ 
		$i++;
		$dues=$fee_par_amt;
		 $batch=$strecord[std_batch_code];		
		 $Studentfeepaid = $student->getdata('fee_tot_amt as fee_tot_amt1,SUM(fee_pay_fine) as fee_pay_fine1,SUM(fee_pay_payable) as fee_pay_payable1',"student_fee_payment","fee_pay_coll_id='$dues_fee_coll_id' and fee_pay_student_no='$strecord[id]' GROUP BY fee_pay_coll_id ","", "");
		if(($feepaidrecord = $Studentfeepaid->getNextRecord()) !== false )
	{
	$dues=0;
		 $totamt = $feepaidrecord[fee_tot_amt1]+$feepaidrecord[fee_pay_fine1];	
		$totpay= $feepaidrecord[fee_pay_payable1];
		
		 $dues=$totamt-$totpay;
	}
	 	if($dues >0)
		{			
		echo'<tr class="tr-odd">
			  <td class="col-5">'.$i.'</td>
			  <td class="col-1">'.$strecord[std_adm_no].'</td>
			  <td class="col-7">'.$strecord[std_first_name].' '.$strecord[std_middle_name].' '.$strecord[std_last_name].'</td>
			  <td class="col-1"><a href="?page=pay_fees_dues_one&feecollid='.$dues_fee_coll_id.'&id='.$strecord[id].'" class="user_button"> Pay Fees</a></td>
			</tr>';
		}
		}
		echo '</tbody></table>
	  <a href="?page=fee_defaulters_pdf&batch_id=14&date=8" class="user_button" target="_blank">  PDF Report</a>'
	  ;
	  
	}
 }
}

//*************************Sumit Implement      *******   News Deatils   **************************************//
$news = new Main(); 
$n=$_GET[n];
if($n!="")
{
$newsRecord = $news->getdata('*',"news","news_title like '$n%'","news_title ASC", "");

 echo '
<table id="listing">
  <tbody><tr class="tr-head">
    <td  class="col-4">Sl  no.</td>
    <td class="col-3">Title</td>
    <td class="col-3">Author</td>
    <td class="col-3">Comments</td>
    <td class="col-3">Posted</td>
  </tr>';
   $i=0;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	$i++;  
 	  echo '<tr class="tr-odd ">
      <td class="col-4"><a href="?page=news-view&news_id='.$record[news_id].'">'.$record[news_title].'</a></td>
      <td class="col-3">'.$record[news_id].'</td>
      <td class="col-3">'.$record[news_desc].'</td>
      <td class="col-3">'.$record[news_id].'</td>
      <td class="col-3"> 
 
        
      </td>
   </tr>';
	}  
	echo '</tbody></table>';
}

//************************************End of News Details **********************************************************//

// **************************************** emp department payslip ************8,9,10,21 nov 2012*****************************
$emp_dept = new Main(); 
$e=$_GET[emp_dept_payslip];
if($e!="")
{
$newsRecord = $emp_dept->getdata('*',"emp_dept,emp","dept_desc= '$e' and emp.emp_dept_code=emp_dept.dept_desc","dept_desc ASC", "");
 echo '<br><br><br>';
 echo '<div class="add_sub">

  </div><ul id="category-list">';
   $i=1;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	
	
	$i++;
	  
	
      	echo '<li id="subject-1" class="listeven">
        <div class="">'.'<a href=?page=create_monthly_payslip&id='.$record[emp_no].'>'.$record[emp_first_name]."(".$record[emp_no].")".'</a>'.'</div>
      
      
		   </div>
		  </li>';
	}  
  echo '</ul>';
}
// ****************************************End of  emp department payslip ************8,9,10 nov 2012*****************************
// **************************************** emp view all  ************28 nov 2012*****************************
$emp_dept = new Main(); 
$e=$_GET[emp_dept_employee];
if($e!="")
{
$newsRecord = $emp_dept->getdata('*',"emp_dept,emp","dept_desc= '$e' and emp.emp_dept_code=emp_dept.dept_desc","dept_desc ASC", "");
 echo '<br><br><br><br>
<table id="listing" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td  class="col-2">Name</td>
    <td class="col-4">Employee Numbar</td>
    <td class="col-2">Department</td>
    
  </tr>';
   $i=0;   
   while( ($record = $newsRecord->getNextRecord()) !== false )
    { 
	$i++;  
 	  echo '<tr class="tr-odd ">
      <td class="col-2"><a href="?page=employee-profile&id='.$record[emp_no].'">'.$record[emp_first_name].'</a></td>
      <td class="col-4">'.$record[emp_no].'</td>
      <td class="col-2">'.$record[emp_dept_code].'</td>
     
 
        
      </td>
   </tr>';
	}  
	echo '</tbody></table>';
}

// ****************************************End of  emp view all ************28 nov 2012*****************************
//*************************  EMPLOYEE SUBJECT ASSOCIATE 28 NOV 2012 PART 1************************************************** 
$subject = new Main();
$dues_fee_student_batch1=$_GET[dues_fee_student_batch1];

if($dues_fee_student_batch1!="")
{
echo '  <select id="fees_dues_coll_date" name="fees_dues_coll_date" onChange=\'show_fee_dues_student(this.value)\' />
       <option value="">Select Subject </option>';
	   
$newsRecord = $subject->getdata('*',"subject","subject_batch_code='$dues_fee_student_batch1'","", "");
	while(($record = $newsRecord->getNextRecord()) !== false )
{
	//echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
   echo $a= $record[subject_name];
echo '<option value="'.$record[subject_batch_code].'"> '.$record[subject_name].'  </option>';
 }
echo '</select> ';
}
//************************* PART 2 EMPLOYEE Student List   **************************************************** 

$dues_fee_coll_id1=$_GET[dues_fee_coll_id1];

if($dues_fee_coll_id1!="")
{
	$newsRecord1 = $subject->getdata('*',"subject,emp_dept","subject.subject_name='$a'","", "");
	echo '  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
		<tbody><tr class="tr-head">
		  <td>Name</td>
		  <td>Subject</td>
		 </tr>
		';
		$i=0;
	
	 while( ($strecord = $newsRecord1->getNextRecord()) !== false )
		{ 
		$i++;
		//$dues=$fee_par_amt;
		// $batch=$strecord[std_batch_code];		
					
		echo'<tr class="tr-odd">
			  <td class="col-5">'.$i.'</td>
			  <td class="col-1">'.$strecord[dept_desc].'</td>
			  </tr>';
		echo '</tbody></table>';
	  }
}

//
// ****************************************End of  emp view all ************28 nov 2012*****************************
//*************************  EMPLOYEE DEPARMNET AND DATE PAYSLIP  29 NOV 2012 PART 1*******************************
$subject = new Main();
$dues_fee_student_batch2=$_GET[dues_fee_student_batch2];

if($dues_fee_student_batch2!="")
{
echo '  <select id="fees_dues_coll_date" name="fees_dues_coll_date" onChange=\'show_fee_dues_student(this.value)\' />
       <option value="">Select Subject </option>';
	   
$newsRecord = $subject->getdata('*',"subject","subject_batch_code='$dues_fee_student_batch1'","", "");
	while(($record = $newsRecord->getNextRecord()) !== false )
{
	//echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
   echo $a= $record[subject_name];
echo '<option value="'.$record[subject_batch_code].'"> '.$record[subject_name].'  </option>';
 }
echo '</select> ';
}
//************************* PART 2 EMPLOYEE DEPARMNET AND DATE PAYSLIP********************************************* 

$dues_fee_coll_id2=$_GET[dues_fee_coll_id2];

if($dues_fee_coll_id2!="")
{
	$newsRecord1 = $subject->getdata('*',"subject,emp_dept","subject.subject_name='$a'","", "");
	echo '  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
		<tbody><tr class="tr-head">
		  <td>Name</td>
		  <td>Subject</td>
		 </tr>
		';
		$i=0;
	
	 while( ($strecord = $newsRecord1->getNextRecord()) !== false )
		{ 
		$i++;
		//$dues=$fee_par_amt;
		// $batch=$strecord[std_batch_code];		
					
		echo'<tr class="tr-odd">
			  <td class="col-5">'.$i.'</td>
			  <td class="col-1">'.$strecord[dept_desc].'</td>
			  </tr>';
		echo '</tbody></table>';
	  }
}


//




?>
