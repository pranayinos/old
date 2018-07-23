<?php   $fees = new Main(); // create a new news object
	$batchRecordSet = $fees->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// batch
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#link_content').colorbox({opacity:0.3});
    });
	 $(function()
    {
        $('#link_Create_paticular').colorbox({opacity:0.3});
    });
	

function showfeecat(str)
{

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;

   document.getElementById("modal-box").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&fee_cat_batch="+str,true);
xmlhttp.send();
//alert(batch_id);
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
  <h1>Master Category</h1>
  <h3>Finance Management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;">
    <img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div id="flash_box">
  </div>
  
  <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div>

  <div class="box">

    <div class="fee-link">

      <div class="link-box">
        <div class="link-heading">
        <a href='?page=create_cat' id='link_content' >  Create Category</a>
        </div>
        <div class="link-descr"> Create Master Category</div>
      </div>

      <div class="link-box">
        <div class="link-heading">
            <a href='?page=create_particular' id='link_Create_paticular' >Create Particulars</a>
        </div>
        <div class="link-descr"> Create Particulars</div>
      </div>

      <div class="link-box">
        <div class="link-heading">
          <a href="?page=fees_discount">Create discount</a>
        </div>
        <div class="link-descr">Create Fee Discounts</div>
      </div>
    </div>
    
    
    <div id="batch">
      <div class="label-field-pair"><label>Select a Batch : </label>
        <div class="text-input-bg">  <select id="course_id" name="course_id" onChange="showfeecat(this.value)" >
   
        <option value="">Select a Course-Batch</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?></select> </div>
 <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
      </div>
    </div>
    <div id="fee_collection_dates"></div>
      
   <div id="modal-box">




</div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           