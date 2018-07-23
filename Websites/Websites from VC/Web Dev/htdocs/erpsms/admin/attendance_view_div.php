<?php
$student = new Main(); // create a new news object
$q=$_GET[q];
$batch=$_GET[batch];
$batch_subject=$_GET[batch_subject];
$_SESSION[course_batch_id]=$batch_subject;
//  **************************************** Student Details by batch  ****************************************
if($batch!="")
{
$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","std_batch_code = '$batch'","std_first_name ASC", "");

   echo '<div id="subjects"></div>
  <div id="register"><div class="header"><div class="prev"><a class="goto" batch_id="56" next="Sat Nov 03 2012 00:00:00 GMT+0530 (India Standard Time)"></a></div><div class="month">December 2012</div><div class="next"><a class="" batch_id="56" next="Thu Jan 03 2013 00:00:00 GMT+0530 (India Standard Time)"></a></div>';
  
  echo '<div class="extender"></div></div>';
  
  
  echo'<div class="box-1"><table id="register-table"><tbody><tr class="tr-head"><td class="head-td-name">Name</td><td class="head-td-date"><div class="day">Sat</div><div class="date">01</div></td><td class="head-td-date"><div class="day">Sun</div><div class="date">02</div></td><td class="head-td-date "><div class="day">Mon</div><div class="date">03</div></td><td class="head-td-date "><div class="day">Tue</div><div class="date">04</div></td><td class="head-td-date "><div class="day">Wed</div><div class="date">05</div></td><td class="head-td-date active"><div class="day">Thu</div><div class="date">06</div></td><td class="head-td-date"><div class="day">Fri</div><div class="date">07</div></td><td class="head-td-date"><div class="day">Sat</div><div class="date">08</div></td><td class="head-td-date"><div class="day">Sun</div><div class="date">09</div></td><td class="head-td-date"><div class="day">Mon</div><div class="date">10</div></td><td class="head-td-date"><div class="day">Tue</div><div class="date">11</div></td><td class="head-td-date"><div class="day">Wed</div><div class="date">12</div></td><td class="head-td-date"><div class="day">Thu</div><div class="date">13</div></td><td class="head-td-date"><div class="day">Fri</div><div class="date">14</div></td><td class="head-td-date"><div class="day">Sat</div><div class="date">15</div></td><td class="head-td-date"><div class="day">Sun</div><div class="date">16</div></td><td class="head-td-date"><div class="day">Mon</div><div class="date">17</div></td><td class="head-td-date"><div class="day">Tue</div><div class="date">18</div></td><td class="head-td-date"><div class="day">Wed</div><div class="date">19</div></td><td class="head-td-date"><div class="day">Thu</div><div class="date">20</div></td><td class="head-td-date"><div class="day">Fri</div><div class="date">21</div></td><td class="head-td-date"><div class="day">Sat</div><div class="date">22</div></td><td class="head-td-date"><div class="day">Sun</div><div class="date">23</div></td><td class="head-td-date"><div class="day">Mon</div><div class="date">24</div></td><td class="head-td-date"><div class="day">Wed</div><div class="date">26</div></td><td class="head-td-date"><div class="day">Thu</div><div class="date">27</div></td><td class="head-td-date"><div class="day">Fri</div><div class="date">28</div></td><td class="head-td-date"><div class="day">Sat</div><div class="date">29</div></td><td class="head-td-date"><div class="day">Sun</div><div class="date">30</div></td><td class="head-td-date"><div class="day">Mon</div><div class="date">31</div></td></tr><tr class="tr-odd td-odd">';
 
  
    while( ($record = $newsRecord->getNextRecord()) !== false )
    {  	
	echo '
		<td class="td-name">'.$record[std_first_name].' </td>
	  <td class="td-mark" id="student-670-date-01-12-2012">
	   
<div class="date"><span>Sat 01<div>'.$record[id].'</div></span></div></td>

<td class="td-mark" id="student-670-date-02-12-2012"><a class="present" id="670" date="2012-12-02">O</a>
<div class="date"><span>Sun 02<div>'.$record[id].' </div></span></div></td>
<td class="td-mark" id="student-670-date-03-12-2012"><a class="present" id="670" date="2012-12-03">O</a>
<div class="date"><span>Mon 03<div>'.$record[id].' </div></span></div></td>
<td class="td-mark " id="student-670-date-04-12-2012"><a class="present" id="670" date="2012-12-04">O</a>
<div class="date"><span>Tue 04<div>'.$record[id].' </div></span></div></td><td class="td-mark " id="student-670-date-05-12-2012"><a class="present" id="670" date="2012-12-05">O</a>
<div class="date"><span>Wed 05<div>'.$record[id].' </div></span></div></td>
<td class="td-mark active" id="student-670-date-06-12-2012"><a class="present" id="670" date="2012-12-06">O</a>
<div class="date"><span>Thu 06<div>'.$record[id].' </div></span></div></td>
<td class="td-mark" id="student-670-date-07-12-2012"><a class="present" id="670" date="2012-12-07">O</a>
<div class="date"><span>Fri 07<div>'.$record[id].' </div></span></div></td>
<td class="td-mark" id="student-670-date-08-12-2012"><a class="present" id="670" date="2012-12-08">O</a><div class="date"><span>Sat 08<div>'.$record[id].'</div></span></div></td><td class="td-mark" id="student-670-date-09-12-2012"><a class="present" id="670" date="2012-12-09">O</a></td><td class="td-mark" id="student-670-date-10-12-2012"><a class="present" id="670" date="2012-12-10">O</a><div class="date"><span>Mon 10<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-11-12-2012"><a class="present" id="670" date="2012-12-11">O</a><div class="date"><span>Tue 11<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-12-12-2012"><a class="present" id="670" date="2012-12-12">O</a><div class="date"><span>Wed 12<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-13-12-2012"><a class="present" id="670" date="2012-12-13">O</a></td><td class="td-mark" id="student-670-date-14-12-2012"><a class="present" id="670" date="2012-12-14">O</a><div class="date"><span>Fri 14<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-15-12-2012"><a class="present" id="670" date="2012-12-15">O</a><div class="date"><span>Sat 15<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-16-12-2012"><a class="present" id="670" date="2012-12-16">O</a><div class="date"><span>Sun 16<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-17-12-2012"><a class="present" id="670" date="2012-12-17">O</a><div class="date"><span>Mon 17<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-18-12-2012"><a class="present" id="670" date="2012-12-18">O</a></td><td class="td-mark" id="student-670-date-19-12-2012"><a class="present" id="670" date="2012-12-19">O</a><div class="date"><span>Wed 19<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-20-12-2012"><a class="present" id="670" date="2012-12-20">O</a></td><td class="td-mark" id="student-670-date-21-12-2012"><a class="present" id="670" date="2012-12-21">O</a></td><td class="td-mark" id="student-670-date-22-12-2012"><a class="present" id="670" date="2012-12-22">O</a><div class="date"><span>Sat 22<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-23-12-2012"><a class="present" id="670" date="2012-12-23">O</a><div class="date"><span>Sun 23<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-24-12-2012"><a class="present" id="670" date="2012-12-24">O</a><div class="date"><span>Mon 24<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-26-12-2012"><a class="present" id="670" date="2012-12-26">O</a><div class="date"><span>Wed 26<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-27-12-2012"><a class="present" id="670" date="2012-12-27">O</a><div class="date"><span>Thu 27<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-28-12-2012"><a class="present" id="670" date="2012-12-28">O</a><div class="date"><span>Fri 28<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-29-12-2012"><a class="present" id="670" date="2012-12-29">O</a><div class="date"><span>Sat 29<div>'.$record[id].' </div></span></div></td><td class="td-mark" id="student-670-date-30-12-2012"><a class="present" id="670" date="2012-12-30">O</a></td><td class="td-mark" id="student-670-date-31-12-2012"><a class="present" id="670" date="2012-12-31">O</a></td></tr><tr class="tr-odd td-odd">';
}
}
//}

echo '</tbody></table></form></div></div>
  <div id="modal-box" style="display:none;">
<label class="head_label">Attendance for <span>'.$record[id].'</span></label>

<div id="ajax-edit"></div>
</div>
</div> </div>';

?>



<?PHP // ********************  Insert the Data into  Database ************************************
		 $atttendance_register = new Main(); 
		if(isset($_POST['commit'])) // If the submit button was clicked
    	{
    	  // news entry 
			   $cols['day'] =$_POST['a'];
			   //$cols['news_desc'] =$_POST['news_desc'];
			   
	   		if($atttendance_register->Inserttable($cols,"atttendance_register"))
    	    {
				$msg="News Added Succesfully";
				header("location:?page=atttendance_register&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=atttendance_register&error=$msg");
			}		
			}

 		    echo '<form id="s" name="s" action="" method="post">
 		    	<input name="a" id="a" type="text">
	  		    <input  name="commit" type="submit" value="submit">
	  			</form>';
			// *************************** End the Insert code 	*****************************************<br />

?>
  