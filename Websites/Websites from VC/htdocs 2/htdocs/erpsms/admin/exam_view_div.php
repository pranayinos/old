<?php  //EXAM MODULE:- 
//*********************  grading levels *********************************************
$student = new Main(); // create a new news object
$q=$_GET[q];
$exam_grade_pass=$_GET[exam_grade_pass];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;

//  ****************************************  grading levels  ****************************************
if($exam_grade_pass!="")
{
$newsRecord = $student->getdata('*',"exam_grade","batch = '$exam_grade_pass' and active=1","", "");
}
if($exam_grade_pass!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Name</td>
	<td> Min Score</td>
	<td>Credit Points</td>
	<td>Descriptions</td>
	<td> Option</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$record[grade_name].'</td>
	  <td class="col-3">'.$record[min_score].'</td>
	  <td class="col-4">'.$record[credit_points].'</td>
	  <td class="col-4">'.$record[description].'</td>
	  <td class="col-7"><a href="?page=edit_grading_levels_popup&id='.$record[exam_grade_id].'">Edit </a>|
	  <a href="?page=grading_levels&did='.$record[exam_grade_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;))">Delete</a></td>
	</tr>
   ';
    }       		 	
 // }
  echo '</tbody></table>';
}
//  End GRADING LEVELS

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//*********************  START  RANKING LEVELS*********************************************
$student = new Main(); // create a new news object
$q=$_GET[q];
$exam_ranking_levels=$_GET[exam_ranking_levels];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;

if($exam_ranking_levels!="")
{
$newsRecord = $student->getdata('*',"exam_ranking_levels","batch = '$exam_ranking_levels' and active=1","", "");
}
if($exam_ranking_levels!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	
	
	<td>Rank Name</td>
	
	<td> Option</td>
	<td> Option</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	
	echo'	
	<tr class="tr-odd">
	  
	
	  <td class="col-4">'.$record[rank_name].'</td>
	  
	  <td class="col-1"><a href="?page=edit_ranking_levels_popup&id='.$record[exam_ranking_id].'&batch_id='.$record[batch].'">Edit</a></td>
	   <td class="col-1"><a href="?page=ranking_levels&did='.$record[exam_ranking_id].'"> Delete</a></td><strong></strong>
	</tr>
   ';
    }       		 	
 // }
  echo '</tbody></table>';
}
//  End RANKING LEVELS

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//*********************  START  CLASS DESINATION*********************************************
$exam_class_desination = new Main(); // create a new news object
$q=$_GET[q];
$exam_class_desi=$_GET[exam_class_desi];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;

if($exam_class_desi!="")
{
$newsRecord = $student->getdata('*',"exam_class_desination","batch = '$exam_class_desi' and active=1","", "");
}
if($exam_class_desi!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	
	
	<td>Class Name</td>
	<td>Class Marks</td>
	<td> Option</td>
	<td> Option</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	
	echo'	
	<tr class="tr-odd">
	  
	
	  <td class="col-4">'.$record[class_name].'</td>
	  <td class="col-4">'.$record[class_marks].'</td>
	  <td class="col-1"><a href="?page=edit_class_designation&id='.$record[exam_class_desi_id].'&batch_id='.$record[batch].'">Edit</a></td>
	   <td class="col-1"><a href="?page=class_designations&did='.$record[exam_class_desi_id].'"> Delete</a></td><strong></strong>
	</tr>
   ';
    }       		 	
 // }
  echo '</tbody></table>';
}
//  End CLASS DESINATION

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//*********************  START  CCE WEIGHTAGE 11 dec 2012 *********************************************
$cce_weightages = new Main(); // create a new news object
$cce_weightage_div1=$_GET[cce_weightage_div];

if($cce_weightage_div1!="")
{
$newsRecord = $cce_weightages->getdata('*',"cce_weightages"," active=1","", "");
}
if($cce_weightage_div1!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	
	
	<td><h3>SELECT WEIGHTAGES</h3></td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	
	echo'	
	<tr class="tr-odd">
	  
	
	  <td class="col-4"><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$record[cce_weightages_criteria].'&nbsp;&nbsp;&nbsp;'.$record[cce_weightages_name].'</td>
	  
	  	
	 
	</tr>
   ';
    }       		 	
 // }
  echo '</tbody></table>';
}
//  End CCE WEIGHTAGE 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//*********************  CRETE A EXAM  *********************************************
$batch = new Main();
$exam_create_exam_id=$_GET[exam_create_exam_id];

if($exam_create_exam_id!="")
{
$newsRecord = $batch->getdata('*',"batch","batch_id = '$exam_create_exam_id'","", "");
}
if($exam_create_exam_id!="")
{
$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    { 	
	
	echo'	
	<tr class="tr-odd">
	  
	 <td class="col-1"><a href="?page=exam_groups&id='.$record[batch_id].'&batch_id='.$record[batch_id].'">'.$record[batch_course_code].'</a></td>
	  <td class="col-1">'.$record[batch_course_code].'</td>
	
	 
	   <strong></strong>
	</tr>
   ';
    }       		 	
 // }
  echo '</tbody></table>';
}
//  End CRETE EXAM

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





?>
