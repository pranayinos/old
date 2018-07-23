<?php    $feecollection = new Main(); // create a new news object
   // fee collection details 
$id=$_GET[fee_col_id];
$newsRecordfeedate = $feecollection->getdata('*',"fee_collection_date","fee_coll_id = '$id'","fee_coll_name ASC", "");
 if( ($record = $newsRecordfeedate->getNextRecord()) !== false )
 {
$fee_coll_name=$record[fee_coll_name];
$fee_coll_fee_cat=$record[fee_coll_fee_cat];
$fee_coll_batch_id=$record[fee_coll_batch_id];
$fee_coll_start_date=$record[fee_coll_start_date];
$fee_coll_end_date=$record[fee_coll_end_date];
$fee_coll_due_date=$record[fee_coll_due_date];
 }
   // fee category 
	$feecategory = $feecollection->getdata('*',"fees_master_category","fee_id='$fee_coll_fee_cat'","","");// batch
	 if( ($record = $feecategory->getNextRecord()) !== false )
 {
 $fee_master_name=$record[fee_master_name];
 }
 // fee category 
	$feeparticular= $feecollection->getdata('*',"fee_master_particular","fee_category_batch='$fee_coll_fee_cat'","","");// batch


	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/collection_details_view.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
    </head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
       <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
    <h1>Fees Submission</h1>
  <h3>ANAND   T</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">

  <div class="info">
    <div class="name">Fee Collection Name</div><div class="val"><span>:</span><?php echo $fee_coll_name?></div>
    <div class="name">Fee Category Name</div><div class="val"><span>:</span><?php echo $fee_master_name?></div>
    <div class="name">Start Date</div><div class="val"><span>:</span><?php echo date(("d-M-Y"),strtotime($fee_coll_start_date))?></div>
    <div class="name">End Date</div><div class="val"><span>:</span><?php echo date(("d-M-Y"),strtotime($fee_coll_end_date))?></div>
    <div class="name">Due Date</div><div class="val"><span>:</span><?php echo date(("d-M-Y"),strtotime($fee_coll_due_date))?></div>
    <div class="extender"></div>
  </div>


  

    <div class="particulars">
        <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
        <tbody><tr class="tr-head">
          <td>Sl  no.</td>
          <td>Particulars</td>
          <td>Student Category</td>
          <td>Student Name</td>
          <td> Amount  <br />( Rs. )</td>
          <td>Created Date</td>
        </tr>
        <tr class="tr-blank"></tr>

    <?php 
	$i=0;
	 while( ($record = $feeparticular->getNextRecord()) !== false )
 {
  $fee_category_batch=$record[fee_category_batch];;
 $batchRecordSet = $feecollection->getdata('*',"course,batch","course.course_code = batch.batch_course_code and batch.batch_id='$fee_coll_batch_id'","course_name ASC","");
 $batchrecord = $batchRecordSet->getNextRecord();
 $i++;
  $particular_name=$record[particular_name];
?>
  
        
          <tr class="tr-odd">
            <td class="col-5"><?=$i?> </td>
            <td class="col-4"><?=$record['particular_name'].' for '.$batchrecord['course_name'].'-'.$batchrecord['course_section_name'].' '.$batchrecord['batch_code'].' Students'?> </td>
            <td class="col-3">  <?php 
				$catRecordSet = $feecollection->getdata('*',"category","cat_id='$record[particular_st_cat]'","cat_id DESC", "50");
	$catrecord = $catRecordSet->getNextRecord();
	echo  $catrecord['category_description'];
			?>        </td>
            <td class="col-3">       <?=$record['particular_adm_no']?>           </td>
            <td class="col-3">   <?=$record['particular_amt']?>     </td>
            <td class="col-3">   <?=date(("d-M-Y"),strtotime($record['created_date']))?>     </td>

          </tr>
        
<?php 
 }
 ?>

      </tbody></table>
    </div>
  


  

</div>


 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           