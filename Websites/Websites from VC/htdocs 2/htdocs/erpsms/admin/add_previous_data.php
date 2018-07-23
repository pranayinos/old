<?php 
//student table be used
$student = new Main(); 
$newsRecordSet = $student->getdata('*',"student","","id DESC", "1");
//gaurdian table be used
$stud_prev_data = new Main(); 
$newsRecordSet1=$stud_prev_data->getdata('*',"stud_prev_data","","id DESC", "50");

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee payslip implemented by 8 nov 2012
			    $cols['stud_id'] =$_POST['id'];
			    $cols['instuite_name'] =$_POST['student_previous_details_institution'];
			    $cols['course'] =$_POST['student_previous_details_course'];
			    $cols['year'] =$_POST['student_previous_details_year'];
			    $cols['total_mark'] =$_POST['student_previous_details_total_mark'];
				
			    
			   
			  
		  if($stud_prev_data->Inserttable($cols,"stud_prev_data"))
           {
				$msg="New  Prevous Data Added Succesfully";
				header("location:?page=student_view&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=student_view&error=$msg");
		   }		
	 }	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)/configuration/settings -->
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/previous_data.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
  
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
<?php 
$student_adm_id=$_GET[id];
?>           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Admission_page_logo" src="../images/admission/admission_page_logo.jpg">
  <h1>Admission</h1>
  <h3>Previous Details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/student/previous_data/17#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
  
  


  <form action="#" method="post"><div style="margin: 0px; padding: 0px; display: inline;"><input name="authenticity_token" type="hidden" value=""></div>
  

    <span class="span-sub-heading">Previous Educational Details</span>
    <hr class="sub-heading">
    <div id="form-contents">
    <?php  //GET THE STUDENT_ADMISSION_ID IN  STUDENT TABLE
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
       
       
        <input id="id" name="id" type="hidden" value="<?=$record['id']?>">
      </div>
      
      <?php }?>
      <input id="student_previous_details_student_id" name="student_previous_details[student_id]" type="hidden" value="17">
      <div class="label-field-pair">
        <label>Institution Name</label>
        <div class="text-input-bg"><input id="student_previous_details_institution" name="student_previous_details_institution" size="30" type="text"></div>
        <div class="extender"></div>
      </div>
      <div class="label-field-pair">
        <label>Course</label>
        <div class="text-input-bg"><input id="student_previous_details_course" name="student_previous_details_course" size="30" type="text"></div>
        <div class="extender"></div>
      </div>
      <div class="label-field-pair">
        <label>Year</label>
        <div class="text-input-bg"><input id="student_previous_details_year" name="student_previous_details_year" size="30" type="text"></div>
        <div class="extender"></div>
      </div>
      <div class="label-field-pair">
        <label>Total mark</label>
        <div class="text-input-bg"><input id="student_previous_details_total_mark" name="student_previous_details_total_mark" size="30" type="text"></div>
        <div class="extender"></div>
      </div>
      <div class="save-proceed-button">
     <!--   <a href="http://demo.fedena.com/student/admission4/17" class="skip">► Skip</a>-->

        <input name="commit" type="submit" value="►Done">

      </div>
    </div>
  </form>
  <div class="ajax-subject">
    <ul id="added-subjects">
      
        
      
    </ul>
    <!--<a href="http://demo.fedena.com/student/previous_data/17#" onclick="new Ajax.Request(&#39;/student/previous_subject/17&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Y3Q0c4FILbBnrv88Px+FHkjLMjeX8qj89d3PsAiY2TE=&#39;)}); return false;">Add Subject</a>-->
    <div id="subject">

    </div>
  </div>
</div>


 </div>

      <div class="extender"></div>
    </div>

            <!-- footer -->
  <?php include("include/footer.php")?>