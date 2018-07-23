<?php   $student = new Main(); // create a new news object
	$batchRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// batch
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/fees_defaulters.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
   <script type="text/javascript">
	
// <!-- select fee dates -->
function showfeestudent(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
   document.getElementById('student').style.display = "none";
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
   document.getElementById("fees_collection_dates").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
      document.getElementById('student').style.display = "none";
    }
	else
	document.getElementById('load').style.display = "block";
	 
  }
  
xmlhttp.open("GET","?page=student_view_div&dues_fee_student_batch="+str,true);
xmlhttp.send();
}


// <!--select fee date student -->
function show_fee_dues_student(str)
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
	document.getElementById('student').style.display = "block";
   document.getElementById("student").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
   
   
    }
	else
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&dues_fee_coll_id="+str,true);
xmlhttp.send();
}

</script>

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
<img alt="Show_finance" src="../images/show_finance.png">
   <h1>Fee Defaulters</h1>
   <h3>Students with fee dues</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <form action="" method="post">
    <div id="batchs1">
      <div class="label-field-pair">
        <label>Select batch: </label>
      <div class="text-input-bg">
       <select id="fees_defaulters_batch_id" name="fees_defaulters_batch_id" onChange="showfeestudent(this.value)" />
       <option value="">Select a Course-Batch</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
</select>  </div>
    </div>
<div class="label-field-pair">
  <label>fee collection date: </label>
    <div class="text-input-bg"> 
    <div id="fees_collection_dates">
<!-- fee Dues Date batch wise list--->

</div> </div>
</div><div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" >
  </div>  
    <div id="student">

<!-- fee Dues Studente list--->

</div>





</div></form>
</div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           