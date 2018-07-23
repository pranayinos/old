<?php
$manage_users = new Main(); // create a new news object
$q=$_GET[q];
//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  ****************************************User Details by name ****************************************
if($q!="")
{

$newsRecord = $manage_users->getdata('user_id,user_name,first_name,last_name,email_id',"manage_users","first_name like '$q%' and active=1","first_name ASC", "");
}
//  ****************************************User Details by batch  ****************************************
if($q!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> User Name</td>
	<td>Name</td>
	<td> Email Id</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[user_name].'</td>
	  <td class="col-4"><a href="?page=user-profile&id='.$record[user_id].'">'.$record[first_name].' '.$record[last_name].' </a></td>
	  <td class="col-4">'.$record[email_id].' </td>
	 <!-- <td class="col-7"><a href="?page=user-profile&id='.$record[user_id].'">View Profile</a></td>-->
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';

//  Details Students

//************************************************Books Details**********************************************

$add_books = new Main(); // create a new news object
$book=$_GET[book];
//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  ****************************************User Details by name ****************************************
if($book!="")
{

$newsRecord = $add_books->getdata('book_id,book_number,book_title,author,custom_tag,status',"add_books","status='$book' and active=1","", "");
}
//  ****************************************User Details by batch  ****************************************
if($book!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td> Author</td>
	
	<td> Status</td>
		<td> Option1</td>
		<td> Option2</td>
		<td> Option3</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><!--<a href="?page=user-profile&id='.$record[book_id].'">-->'.$record[book_title].'<!-- </a>--></td>
	  <td class="col-4">'.$record[author].' </td>
	  <td class="col-4">'.$record[status].' </td>
	  
      <td class="col-7"><a href="?page=view_book&id='.$record[book_id].'">View</a></td>
	  <td class="col-7"><a href="?page=edit_book&id='.$record[book_id].'">Edit</a></td>
	  <td class="col-7"><a href="?page=books&d='.$record[book_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
	  	 
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';

//*******************************************Search Books**************************************

$add_books = new Main(); // create a new news object
$b=$_GET[b];

if($b!="")
{

$newsRecord = $add_books->getdata('book_id,book_number,book_title,author,custom_tag,status',"add_books","book_title like '$b%' ","book_title ASC", "");
}
//  ****************************************User Details by batch  ****************************************
if($b!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td> Author</td>
	
	<td> Status</td>
		<!--<td> Option</td>-->
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><a href="?page=view_book&id&id='.$record[book_id].'">'.$record[book_title].' </a></td>
	  <td class="col-4">'.$record[author].' </td>
	  <td class="col-4">'.$record[status].' </td>
	  
	<!--  <td class="col-7"><a href="?page=view_book&id='.$record[book_id].'">View</a></td>-->
	  	  
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';
  
  //*************************************************book Return details************************************
  
  $issue_books = new Main(); // create a new news object
$bo=$_GET[bo];

//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** ****************************************
if($bo!="")
{

$newsRecord = $issue_books->getdata('issue_book_id,book_number,book_title,name,std_adm_no,issue_date,due_date',"issue_books","book_number like '$bo%' and active=1","name ASC", "");
}
//  ****************************************  ****************************************
if($bo!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td>Book Holder</td>
	
	<td>Addmission Number</td>
	<td>Issue Date</td>
	<td>Due Date</td>
		<td>Option</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><a href="?page=lib_return_book&id='.$record[issue_book_id].'">'.$record[book_title].' </a></td>
	  <td class="col-4">'.$record[name].' </td>
	  <td class="col-4">'.$record[std_adm_no].' </td>
	   <td class="col-4">'.$record[issue_date].' </td>
	    <td class="col-4">'.$record[due_date].' </td>
		<td class="col-7"><a href="?page=book_movement-return_book&d='.$record[issue_book_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
	  
	  <!--<td class="col-7"><a href="?page=lib_return_book&id='.$record[book_id].'">View</a></td>-->
	  	  	</tr>
   ';
    } 
}  

  echo '</tbody></table>';
  
   
  //*************************************************book Issue details************************************
  
  $add_books = new Main(); // create a new news object
$issue=$_GET[issue];

//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** ****************************************
if($issue!="")
{

$newsRecord = $add_books->getdata('book_id,book_number,book_title,author,custom_tag,status',"add_books","book_title='$issue'","", "");
}
//  ****************************************  ****************************************
if($issue!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td> Author</td>
	
	<td> Status</td>
		<!--<td>Option</td>-->
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><a href="?page=book_movement_issue_book&id='.$record[book_id].'">'.$record[book_title].' </a></td>
	  <td class="col-4">'.$record[author].' </td>
	  <td class="col-4">'.$record[status].' </td>
	  
	<!--  <td class="col-7"><a href="?page=user-profile&id='.$record[book_id].'">View</a></td>-->
	  	  	</tr>
   ';
    } 
}  

  echo '</tbody></table>';


 //*************************************************book Renewal details************************************
  
   $issue_books = new Main(); // create a new news object
$re1=$_GET[re1];

//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** ****************************************
if($re1!="")
{

$newsRecord = $issue_books->getdata('issue_book_id,book_number,book_title,name,std_adm_no,issue_date,due_date',"issue_books","book_number like '$re1%' and active=1","name ASC", "");
}
//  ****************************************  ****************************************
if($re1!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td>Book Holder</td>
	
	<td>Addmission Number</td>
	<td>Issue Date</td>
	<td>Due Date</td>
		
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><a href="?page=books_renewal&id1='.$record[issue_book_id].'">'.$record[book_title].' </a></td>
	  <td class="col-4">'.$record[name].' </td>
	  <td class="col-4">'.$record[std_adm_no].' </td>
	   <td class="col-4">'.$record[issue_date].' </td>
	    <td class="col-4">'.$record[due_date].' </td>
		<!--<td class="col-7"><a href="?page=book_movement-return_book&id='.$record[issue_book_id].'">Delete</a></td>-->
	  
	  <!--<td class="col-7"><a href="?page=lib_return_book&id='.$record[book_id].'">View</a></td>-->
	  	  	</tr>
   ';
    } 
}  

  echo '</tbody></table>';


//******************************************Show Room Details*************************************************


 $room = new Main(); // create a new news object
$hostel=$_GET[hostel];
//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;

if($hostel!="")
{

$newsRecord = $room->getdata('room_id,room_number,student_per_room,rent,no_of_room',"room","hostel_id='$hostel' and active=1","", "");
}

if($hostel!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Room Number</td>
	<td>Student Per Room</td>
	<td>Availability</td>
	
	<td>Rent</td>
		<td> Option1</td>
			<td> Option2</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[room_number].'</td>
	  <td class="col-4">'.$record[student_per_room].'</td>
	  <td class="col-4">'.$record[no_of_room].' </td>
	  <td class="col-4">'.$record[rent].' </td>
	  
	  <td class="col-7"><a href="?page=room_details-1-edit&id='.$record[room_id].'">Edit</a></td>
	  	  <td class="col-7"><a href="?page=room_details&d='.$record[room_id].'" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></td>
	  	 
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';
  
  //***************************************************Students Details for room allocation******************************
  $student = new Main(); // create a new news object
$q1=$_GET[q1];
$batch=$_GET[batch];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** Students Details by name ****************************************
if($q1!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_first_name like '$q1%' and deactivate=0","std_first_name ASC", "");
}
//  **************************************** Student Details by batch  ****************************************
if($batch!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");
}
if($q1!="" || $batch!="")
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
	  <td class="col-4"><a href="?page=room_allocate-assign_room-200&id='.$record[id].'">'.$record[std_first_name].' '.$record[std_middle_name].' '.$record[std_last_name].'</a></td>
	  <td class="col-4">'.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
	  <td class="col-7"><a href="?page=student_profile&id='.$record[id].'">View Profile</a></td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}
//  Details Students


//**********************************************Student search for fee payment***********************************
  $student = new Main(); // create a new news object
$q2=$_GET[q2];
$batch=$_GET[batch];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** Students Details by name ****************************************
if($q2!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_first_name like '$q2%' and deactivate=0","std_first_name ASC", "");
}
//  **************************************** Student Details by batch  ****************************************
if($batch!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");
}
if($q2!="" || $batch!="")
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
	  <td class="col-4"><a href="?page=&id='.$record[id].'">'.$record[std_first_name].' '.$record[std_middle_name].' '.$record[std_last_name].'</a></td>
	  <td class="col-4">'.$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code].'</td>
	  <td class="col-7"><a href="?page=student_profile&id='.$record[id].'">View Profile</a></td>
	</tr>
   ';
    } 
  }
  echo '</tbody></table>';
}

//******************************************Show Room Details for allocation*************************************************


 $room = new Main(); // create a new news object
$hostel1=$_GET[hostel1];
//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;

if($hostel1!="")
{

$newsRecord = $room->getdata('room_id,room_number,student_per_room,rent,no_of_room',"room","hostel_id='$hostel1' and active=1","", "");
}

if($hostel1!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Room Number</td>
	<td>Student Per Room</td>
	<td>Availability</td>
	
	<td>Rent</td>
		<td> Option1</td>
			
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3"><a href="?page=room_details-1-edit&id='.$record[room_id].'">'.$record[room_number].'</a></td>
	  <td class="col-4">'.$record[student_per_room].'</td>
	  <td class="col-4">'.$record[no_of_room].' </td>
	  <td class="col-4">'.$record[rent].' </td>
	  
	  <td class="col-7"><a href="?page=room_details-1-edit&id='.$record[room_id].'">Edit</a></td>
	  	
	  	 
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';






//************************************************Book Issuable Period Details**********************************************

$add_books = new Main(); // create a new news object
$bi=$_GET[bi];
//$batch=$_GET[];
//$batch_subject=$_GET[batch_subject];
//$_SESSION[course_batch_id]=$batch_subject;
//  ****************************************User Details by name ****************************************
if($bill!="")
{

$newsRecord = $add_books->getdata('book_id,book_number,book_title,author,custom_tag,status',"add_books","status='$book' and active=1","", "");
}
//  ****************************************User Details by batch  ****************************************
if($book!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td> Author</td>
	
	<td> Status</td>
		<td> Option1</td>
		<td> Option2</td>
		<td> Option3</td>
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><!--<a href="?page=user-profile&id='.$record[book_id].'">-->'.$record[book_title].'<!-- </a>--></td>
	  <td class="col-4">'.$record[author].' </td>
	  <td class="col-4">'.$record[status].' </td>
	  
      <td class="col-7"><a href="?page=view_book&id='.$record[book_id].'">View</a></td>
	  <td class="col-7"><a href="?page=edit_book&id='.$record[book_id].'">Edit</a></td>
	  <td class="col-7"><a href="?page=books&d='.$record[book_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
	  	 
	</tr>
   ';
    } 
}  

  echo '</tbody></table>';


//************************************************library Setting*****************************


//$course = new Main(); 

$bi=$_GET[bi];

 $library_setting = new Main(); 



$newsRecord1 = $library_setting->getdata('*',"library_setting","course_name='$bi' and active=1","", "");
  $record1 = $newsRecord1->getNextRecord();
 
  $category=new Main();
  
 
  //$newsRecord2 = $course->getdata('course_name',"course","course_id=$bi","", "");
 //$record2 = $newsRecord2->getNextRecord();
//$n=$record2['course_name'];

if($bi!="")
{

$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Course</td>
	<td> Category</td>
	<td>  Books issuable</td>
	
	<td> Period<br>(In Days)</td>
		<td> Option1</td>
		<td> Option2</td>
		
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record1 = $newsRecord1->getNextRecord()) !== false )
    {
	 $cat=$record1['cat_id'];
	//$newsRecord2 = $course->getdata('course_name',"course","course_id=$bi","", "");
 //$record2 = $newsRecord2->getNextRecord();
 
  $newsRecord3 = $category->getdata('category_description',"category","cat_id=$cat","", "");
  $record3 = $newsRecord3->getNextRecord();
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record1[course_name].'</td>
	  <td class="col-4">'.$record3[category_description].'</td>
	  <td class="col-4">'.$record1[book_issuable].' </td>
	  <td class="col-4">'.$record1[days].' </td>
	  

	  <td class="col-7"><a href="?page=library-card_setting_edit-popup&id='.$record1[lib_setting_id].'">Edit</a></td>
	  <td class="col-7"><a href="?page=library-card_setting&d='.$record1[lib_setting_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = 

document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; 

f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); 

m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = 

document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, 

&#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); 

f.appendChild(s);f.submit(); };return false;">Delete</a></td>
	  	 
	</tr>
	
   ';
    } 
	
	
	echo' <tr class="add-new">
    <td class="col-4"></td>
    <td class="col-1"></td>
    <td class="col-1"></td>
    <td class="col-1"></td>
    <td class="col-1"><a class="add-link" href="?page=library-card_setting_popup&n='.$bi.'">Add new</a></td>
  </tr>';
}  

  echo '</tbody></table>';

?>

