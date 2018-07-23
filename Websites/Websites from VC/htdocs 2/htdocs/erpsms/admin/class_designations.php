<?php   $student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");

$exam_class_desination= new Main(); 

   $newsid= $_GET['did'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($exam_class_desination->updateData($post,"exam_class_desination","exam_class_desi_id='$newsid'"))
				{
				$msg=" Class Desination Record is  Succesfully Deleted";
				header("location:?page=class_designations&newsid=$did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Record is not deleted, Please check Values";
				header("location:?page=class_designations&newsid=$did&error=$msg");	
				}	
	}		 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/class_desination_ index.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />

<!--- AJAX ENDING OF CODE -->
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#class_designations_popup').colorbox({opacity:0.3});
		
    });
</script>


 <!-- AJAX ---->
<script type="text/javascript">
	
// <!-- Ajax Start Code  -->
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
xmlhttp.open("GET","?page=exam_view_div&exam_class_desi="+str,true);
xmlhttp.send();
}
</script>
<!--- AJAX ENDING OF CODE -->

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
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Class Designations</h1>
  <h3>Manage Class Designations</h3>
  <div id="app-back-button">
    <a href="/class_designations#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
 <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div class="course-select">
    <div class="label-field-pair">
      <label for="student_course">Select a course :</label>
      <div class="text-input-bg">
       <select id="std_batch_code" name="std_batch_code" onChange="showstudent(this.value)">
        
        <option value="">Select A Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select>
      <!--  <select id="class_designation_course_id" name="class_designation[course_id]" onChange="new Ajax.Request(&#39;/class_designations/load_class_designations&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option>
<option value="26">MBA International Marketing </option>
<option value="27">MCA Software </option>
<option value="28">MCA Protocol</option>
<option value="41">Standard 3 </option></select>--></div></div>
  </div>

  <div id="flash"></div>

  <div id="errors">
    
  </div>
   <!--- Insert the code of popup --------------->
   
    <div class="add_grade">  
	<a href="?page=class_designations_popup" id='class_designations_popup' >Add Class</a>
    </div>
<!-------End the code of the pop up ------------------>
<!--- Insert the code of class desination design yellow color ---------------- -->
  <!--<div id="course_class_designations"><div id="class_form">-->
  <div id="category-list">
  <ul class="category-list">
  <p class="flash-msg"> Class Designations found.</p>
  </ul>
<!--</div>-->
 <!--- End  the code of class desination design yellow color ---------------- -->
 
  <!--- Insert the code of ajax calling ---------------- -->
   <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="students">

<div class="students-table"></div></div>
 <!--------------------end ajax calling  Student list --------------------------------->
  
  
  
  
  
  
  
  
 <!-- <form action="http://demo.fedena.org/class_designations/create_class_designation?course_id=25" method="post" onSubmit="new Ajax.Request(&#39;/class_designations/create_class_designation?course_id=25&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>

    <div id="form-content">
      <div class="label-field-pair">
        <label for="name">Name</label>
        <div class="text-input-bg"><input id="class_designation_name" name="class_designation[name]" size="30" type="text"></div>
      </div>
      
        <div class="label-field-pair">
          <label for="marks">Marks</label>
          <div class="text-input-bg"><input id="class_designation_marks" name="class_designation[marks]" size="30" type="text"></div>
        </div>
      

      <div class="extender"></div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Create">
      </div>


    </div>
  </form>-->
</div>

</div>
</div> </div>

      <div class="extender"></div>
    </div>
  <?php include("include/footer.php")?> 