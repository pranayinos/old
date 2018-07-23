<?php    $feediscount = new Main(); // create a new news object
	$feediscountcat = $feediscount->getdata('*',"fee_master_particular,fees_master_category","fees_master_category.fee_id=fee_master_particular.fee_category_batch","fee_master_name ASC","");// batch
		
		// batch
$batchRecordSet = $feediscount->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
<script type="text/javascript">
	
// <!-- Ajax select data -->
function showdiscount(str)
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
   document.getElementById("discount-box").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&discountbatch="+str,true);
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
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Fee Discounts</h1>
  <h3>Finance Management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>

        <li><a href="?page=fee_discount_new">Create Discount</a></li>
      </ul>

</div>
<!-- Insert the msg code -->
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
<div class="error" ><?php echo $_GET[error]?></div></div></div>
<!-- End of the msg code -->
<div id="page-yield">
 
  <div id="flash_box">
  </div>
  
 
 
 
  <div id="flash-notice"></div>
  


    <div id="batch">
      <div class="label-field-pair"><label>Select a Batch : </label>
        <div class="text-input-bg"> <select id="course-batch" name="course-batch" onChange="showdiscount(this.value)" >
      
<option value="">Select Course-Batch</option>
            <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
</select> </div>
 <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
      </div>
    </div>

    <div id="master-category-box">
<div id="batch">
  <div class="label-field-pair"><label>Select Fees Category : </label>
    <div class="text-input-bg"> <select id="fee_cat" name="fee_cat" onChange="#">
    <option value="">Select Fee Category</option>
      <?php 
 while( ($record = $feediscountcat->getNextRecord()) !== false )
    {
	?>
<option value="<?=$record['particular_id']?>"><?=$record['fee_master_name']." : ".$record['particular_name']?></option>
<?php }?>
</select> </div>
  </div>
</div></div>
<br>
    <div id="discount-box">


<!-- Discount List -->
    </div>

     <div id="modal-box" style="display:none;"></div>

    
    
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           