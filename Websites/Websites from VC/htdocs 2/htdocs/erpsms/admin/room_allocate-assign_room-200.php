<?php
$student=new Main();
$id=$_GET[id];

$newsRecord = $student->getdata('id,std_adm_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"student","id= '$id'","", "");
$record = $newsRecord->getNextRecord();
$hostel = new Main();
$newsRecord1 = $hostel->getdata('*',"hostel","active=1","hostel_name ASC", "");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->

<script type="text/javascript">
	
// <!-- Ajax select data -->
function showroom(str)
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
   document.getElementById("rooms").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=user_view_div&hostel1="+str,true);
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
      <div id="content"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Allocate room to the student</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  <div id="form_div">
    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg="></div>
      
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
      <div class="label-field-pair">
        <label for="vehicle_no">Student Name</label>
        <label for="vehicle_no"><?=$record['std_first_name'].' '.$record['std_middle_name'].' '.$record['std_last_name'];?>  </label>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Select a Hostel <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;"> </label>
        <div class="text-input-bg"> <select id="hostel_id" name="hostel_id" onChange="showroom(this.value)">
     <!-- <select id="hostel_id" name="hostel_id" onChange="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;room-list&#39;, &#39;/room_details/update_room_list&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;hostel_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})">-->
      <option value="">Select a Hostel</option>
      <?php
	   while( ($record1 = $newsRecord1->getNextRecord()) !== false )
    {
	  ?>
<option value="<?=$record1['hostel_id'];?>"><?=$record1['hostel_name'];?></option>

<?php
}
?>
</select>

<div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="rooms">

        </div>
      </div>

    </form>
  </div>
  <div class="label-field-pair" id="room_details">

  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>