<?php
$hostel = new Main();
$newsRecord = $hostel->getdata('*',"hostel","active=1","hostel_name ASC", "");
$record = $newsRecord->getNextRecord();
$hid=$record[hostel_type];

$hostel_type = new Main();
$newsRecord1 = $hostel_type->getdata('hostel_type',"hostel_type","hostel_type_id='$hid'","", "");
$record1 = $newsRecord1->getNextRecord();



	   $newsid= $_GET['d'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($hostel->updateData($post,"hostel","hostel_id='$newsid'"))
				{
				$msg="Hotel Record is  Succesfully Deleted";
				header("location:?page=hostels&newsid=$d&msg=$msg");		
				}		
				else
				{
				$msg="Error : Hostel Record is not deleted, Please check Values";
				header("location:?page=hostels&newsid=$d&error=$msg");	
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
  <h3>Hostel Details</h3>
  <div id="app-back-button">
    <a href="/hostels#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostels-new">Add hostel</a></li>
  </ul>
</div>

<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

<div id="page-yield">
  
  
  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
    <tbody><tr class="tr-head"><td>Hostel Name</td><td>Type</td><td>Other Information</td><td></td></tr>
    <?php
	 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	$hid=$record[hostel_type];

$hostel_type = new Main();
$newsRecord1 = $hostel_type->getdata('hostel_type',"hostel_type","hostel_type_id='$hid'","", "");
$record1 = $newsRecord1->getNextRecord();
	?>
      <tr class="tr-odd">

        <td class="col-4"><?=$record['hostel_name']; ?></td>
        <td class="col-7"><?=$record1['hostel_type']; ?></td>
        <td class="col-3"><?=$record['other_info']; ?> </td>
        <td class="col-unique"><a href="?page=hostels-1&id=<?=$record['hostel_id'] ;?>">View</a>
          |
          <a href="?page=hostels-1-edit&id=<?=$record['hostel_id'] ?>">Edit</a>
          |
          <a href="?page=hostels&d=<?=$record['hostel_id'] ?>" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
      </tr>
    <?php
	}
	?>
  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>
 <!-- footer -->
  <?php include("include/footer.php")?>