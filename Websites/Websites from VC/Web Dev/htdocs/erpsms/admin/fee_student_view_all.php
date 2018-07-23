<?php   $student = new Main(); // create a new news object
	$batchRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// batch
	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>

	<?php
//------------------- supportive files ----------->
include("include/support_file.php")?>
    <link href="css/stview_all.css" media="screen" rel="stylesheet" type="text/css">
    <!-- select batch --------->
 <script type="text/javascript">
	
// <!-- Ajax select data -->
function showstudent(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;
	//alert(a);
   document.getElementById("students").innerHTML=xmlhttp.responseText;
   	document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&fee_students_all_batch="+str,true);
xmlhttp.send();
}
</script>
<!--------- Start head ---------------->

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
 <img alt="Student_details_logo" src="../images/student_details/student_details_logo.jpg">
  <h1>Student Details </h1>
  <h3>View Details </h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<form action="" enctype="multipart/form-data" id"st_form" name="st_form">
<div id="page-yield">

  

  <div class="label-field-pair-select-class">
        <label for="student-detail-select-class">Select a Course-Batch of Students </label>
    <div class="text-input-bg">
    <select id="course_id" name="course_id" onChange="showstudent(this.value)" >
   
        <option value="">Select a Course-Batch</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?></select></div>

     <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  </div>
  
  <div id="students">

<div class="students-table">
 <!-- Student list -->
</div>
</div>

</div>

</form></div>

      <div class="extender"></div>
    </div>


  <?php include("include/footer.php")?>
           