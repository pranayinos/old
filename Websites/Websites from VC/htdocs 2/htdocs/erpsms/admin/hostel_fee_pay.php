<?php
$student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");

$FeeDate=new Main();
$newsRecordSet1 = $FeeDate->getdata('due_date',"hostel_fee_collection","","due_date ASC","");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
<img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Pay hostel fee</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostel_fee/hostel_fee_pay#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostel_fee_defaulters">Defaulters</a></li>
  </ul>
</div>
<div id="page-yield">

      <div class="label-field-pair"><label>select a class</label>
        <div class="text-input-bg"> <select id="fee_submission_batch_id" name="fee_submission[batch_id]" onChange="new Ajax.Request(&#39;/hostel_fee/update_fee_collection_dates&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})">
        <option value="">Select Batch</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select> </div>
      </div>
      <div class="label-field-pair"><label>Select fee collection date</label>

        <div class="text-input-bg">
          <div id="hostel_fee_collection_dates"><select id="id_id" name="id[id]" onChange="new Ajax.Request(&#39;/hostel_fee/hostel_fee_collection_details&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;collection_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})">
          <option value="">Select collection dates</option>
           <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['due_date']?>"><?=$record['due_date']?> </option>
<?php }?>
</select></div>
        </div>
      </div>


  <div id="hostel_fee_collection_details"></div>
  <div id="modal-box" style="display:none;"></div>

</div> </div>

      <div class="extender"></div>
    </div>

 <!-- footer -->
  <?php include("include/footer.php")?>