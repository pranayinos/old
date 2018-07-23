<?php    $fees = new Main(); // create a new news object
$feecat_id=$_GET[catid];

	$feeparticular = $fees->getdata('*',"fee_master_particular,fees_master_category,course,batch","course.course_code = batch.batch_course_code and fees_master_category.fee_batch_id=batch.batch_id and fee_master_particular.fee_category_batch='$feecat_id' and  fees_master_category.fee_id=fee_master_particular.fee_category_batch","course_name ASC","");// batch
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
    }
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
<div id="inner-tab-menu">
  <ul>
      <li>  <a href='?page=create_particular&catid=<?php echo $_GET[catid]?>' id='link_Create_paticular'>Create Particulars</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="flash_box"></div>

  <div id="message"></div>

  <div class="box">
  
  <div id="categories">

  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Sl  no.</td>
      <td>Category</td>
      <td>Student Category</td>
      <td>Admission number</td>
      <td>Amount<br> ( Rs. )</td>
      <td>Created Date</td>
      <td>Option</td>
    </tr>
    <tr class="tr-blank"></tr>
<?php 
$i=0;
 while( ($record = $feeparticular->getNextRecord()) !== false )
    {
	$i++; 
	$catid=$record['particular_st_cat'];
	$catRecordSet = $fees->getdata('*',"category","cat_id='$catid'","cat_id DESC", "50");
	$catrecord = $catRecordSet->getNextRecord();
?>
    
      <tr class="tr-odd">
        <td><?=$i?></td>
        <td class="col-4"><?=$record['fee_master_name']." - ".$record['particular_name']." : ".$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></td>
        <td class="col-3">   <?=$catrecord['category_description']?>    </td>
        <td class="col-3">   <?=$record['particular_adm_no']?>       </td>
        <td class="col-3"><?=$record['particular_amt']?>  </td>
        <td class="col-3"><?php echo date(("d-M-Y"), strtotime($record['created_date']))?>  </td>
        <td class="col-2">
          <span class="small"> <a href="#" onclick="">Edit</a></span>
    
          <span class="small"> <a href="#" >Delete</a></span>
    
    
    
    
    
    
        </td>
      </tr>
    <?php }?>


  </tbody></table>
  

<a href="#" class="user_button">Back</a>
</div>
</div>
  </div>
 </div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           