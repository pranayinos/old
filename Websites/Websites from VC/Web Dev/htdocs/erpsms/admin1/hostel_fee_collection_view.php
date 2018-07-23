<?PHP
$hostel_fee_collection = new Main();
$newsRecord = $hostel_fee_collection->getdata('*',"hostel_fee_collection","active=1","hostel_fee_collection_name ASC", "");



	   $newsid= $_GET['d'];
	  
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($hostel_fee_collection->updateData($post,"hostel_fee_collection","hostel_fee_collection_id='$newsid'"))
				{
				$msg="Hotel Fee Collection  Record is  Succesfully Deleted";
				header("location:?page=hostel_fee_collection_view&newsid=$d&msg=$msg");		
				}		
				else
				{
				$msg="Error :Hotel Fee Collection Record is not deleted, Please check Values";
				header("location:?page=hostel_fee_collection_view&newsid=$d&error=$msg");	
				}	
	}		 
	 

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
  <h3>View fee collection dates</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostel_fee/hostel_fee_collection_view#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
 
 
<div id="fee-collection-edit">
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
     <td>SL-no.</td>
      <td>Name</td>
      <td>Batch</td>
      <td>Start Date</td>
      <td>End Date</td>
      <td>Due Date</td>
        <td>Option1</td>
          <td>Option2</td>
      <td></td>
    </tr>
     <?php
	$i=0;
     while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	$i++;
	?>
      <tr class="tr-odd">
        <td class="col-1"><?=$i;?></td>
        <td class="col-4"><?=$record['hostel_fee_collection_name'];?></td>
        <td class="col-4">
          
           <?=$record['batch'];?>
          
        </td>
        <td class="col-1"><?=$record['start_date'];?></td>
        <td class="col-1"><?=$record['end_date'];?></td>
        <td class="col-1"><?=$record['due_date'];?></td>
        <td class="col-3">
          <div class="edit"><a href="http://demo.fedena.org/hostel_fee/hostel_fee_collection_view#" onClick="new Ajax.Request(&#39;/hostel_fee/hostel_fee_collection_edit/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)}); return false;">Edit</a></div></td><td><div class="edit">
         <a href="?page=hostel_fee_collection_view&d=<?=$record['hostel_fee_collection_id'] ?>" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
       </div>
        </td>
      </tr>
    <?php
	}
	?>
  </tbody></table>
  </div>
 <div id="fee_collection_dates"></div>
<div id="modal-box" style="display:none;"></div>
</div>
 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>