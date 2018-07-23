<?php
$student=new Main();
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");


if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // batch entry 
			     $id=$_POST['std_batch_code'];
			     
		     $newsRecordSet1 = $student->getdata('t_id,batch_id',"time_table_weekdays","batch_id='$id'","","");
			 echo $record1['t_id'];
			 $record1 = $newsRecordSet1->getNextRecord();	 
			 if($record1['t_id']!="")
			 {        
			         $tid=$record1['t_id'];
					
			   //$post['batch_id'] =$_POST['std_batch_code'];
			   $post['sun'] =$_POST['sun'];
			   $post['mon'] =$_POST['mon'];
			   $post['tue'] =$_POST['tue'];
			   $post['wed'] =$_POST['wed'];	
			   $post['thu'] =$_POST['thu'];
					   
			   $post['fri'] =$_POST['fri'];
			  
			   $post['sat'] =$_POST['sat'];
					 
					 
			      if($student->updateData($post,"time_table_weekdays","t_id='$tid'"))
                    {
		             $msg="Record Updated Succesfully";
				//header("location:?page=admission&msg=$msg");	
				     header("location:?page=create_weekdays&msg=$msg");			
		          }
		         else
		          {
			         $msg="Error :  Entry not done, Please check Values";
			         header("location:?page=create_weekdays&error=$msg");
			      }
			 }
			 else
			 {  
                   
			   $cols['batch_id'] =$_POST['std_batch_code'];
			   $cols['sun'] =$_POST['sun'];
			   $cols['mon'] =$_POST['mon'];
			   $cols['tue'] =$_POST['tue'];
			   $cols['wed'] =$_POST['wed'];	
			   $cols['thu'] =$_POST['thu'];
					   
			   $cols['fri'] =$_POST['fri'];
			  
			   $cols['sat'] =$_POST['sat'];
                 if($student->Inserttable($cols,"time_table_weekdays"))
                  {
				    $msg="Record Added Succesfully";
				//header("location:?page=admission&msg=$msg");	
				    header("location:?page=create_weekdays&msg=$msg");			
		          }
		         else
		          {
			        $msg="Error :  Entry not done, Please check Values";
			        header("location:?page=create_weekdays&error=$msg");
		          }		
            }
}






?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/weekday_ index.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->


  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>weekdays</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>


<div id="weekdays">
<form action="#" method="post">
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
<div class="error" ><?php echo $_GET[error]?></div></div></div>

<div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=">

</div>

<div id="page-yield">
<div class="box">
<div class="label-field-pair">
<label for="timetable_entry_course_id">Select a Batch:</label>
<div class="text-input-bg"><select id="std_batch_code" name="std_batch_code"  class="validate[required]" >
        
        <option value="">---Select---</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
          </select>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; "></div>
</div>
  <ul id="category-list">
    
    <input id="weekday_batch_id" name="weekday[batch_id]" type="hidden">
    
      <li class="listodd">
        
        <div class="category-name">Sunday</div>
        <div class="category-edit"><input  id="weekdays_" name="sun" type="checkbox" value="1"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Monday</div>
        <div class="category-edit"><input  id="weekdays_" name="mon" type="checkbox" value="2"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Tuesday</div>
        <div class="category-edit"><input  id="weekdays_" name="tue" type="checkbox" value="3"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Wednesday</div>
        <div class="category-edit"><input  id="weekdays_" name="wed" type="checkbox" value="4"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Thursday</div>
        <div class="category-edit"><input   id="weekdays_" name="thu" type="checkbox" value="5"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Friday</div>
        <div class="category-edit"><input   id="weekdays_" name="fri" type="checkbox" value="6"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Saturday</div>
        <div class="category-edit"><input  id="weekdays_" name="sat" type="checkbox" value="7"></div>
      </li>
    

  </ul>
  <input class="submit_button" name="commit"  type="submit" value="► Save">
</form>

</div>
<div id="modal-box" style="display:none;"></div>
<div class="extender"></div>
</div>
</div>
</div>

<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>