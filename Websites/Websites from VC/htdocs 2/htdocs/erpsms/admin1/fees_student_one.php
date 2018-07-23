<?php
    $feecollection = new Main(); // create a new news object
	$stid=$_GET[id];	
	
$newsRecordSet = $feecollection->getdata('std_batch_code,std_adm_no,std_first_name,std_middle_name,std_last_name',"student","id='$stid'","","");// student batch
		$strecord = $newsRecordSet->getNextRecord();
		$stbatch=$strecord['std_batch_code'];
 	// fee collection details 
	$newsRecordSet = $feecollection->getdata('*',"fee_collection_date","fee_coll_batch_id='$stbatch'","fee_coll_name ASC","");
	
	$bid=$_GET[bid];
	if($bid!="")
	{
	$feeRecordSet = $feecollection->getdata('*',"fee_collection_date","fee_coll_id='$bid'","fee_coll_name ASC","");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/fees_structure_dates.css" media="screen" rel="stylesheet" type="text/css">
        <link href="css/fees_student_dates.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
  <script type="text/javascript">
	
// <!-- Ajax select data -->
function fee_sub_structure(str,admno)
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
   document.getElementById("fees_structure").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&fee_st_submission="+str+"&admno="+admno,true);
xmlhttp.send();
}
function subtot()
{
var fine=0;
var txttotpay=0;
var totamount=0;
var fine= document.getElementById('fine_fee').value;
var txttotpay= document.getElementById('txttotpay').value;
var totamount=parseFloat(txttotpay)+parseFloat(fine);


var total_fees= document.getElementById("total_fees").value=totamount;
}
function validate()
{
var txttotpay= document.getElementById("txttotpay").value;
var tot=parseFloat(fine)+parseFloat(txttotpay);
var total_fees= document.getElementById("total_fees").value;
var totpay=parseFloat(txttotpay)-parseFloat(total_fees);
var fine= document.getElementById("fine_fee").value;
var txtadmno= document.getElementById("txtadmno").value;

if(fine=="" && totpay <= 0) 
{
alert("DUE DATE HAS BEEN EXCEEDED. PLEASE COLLECT FINE AMOUNT: ENTER FINE AMOUNT !");
return false;
}
else if(fine!="" && totpay > 0) 
{
alert("YOU ARE NOT PAYING TOTAL FEE, SO YOU CAN'T ADD FINE: YOU CAN ADD FINE IN LAST PAYMENT!");
document.getElementById("fine_fee").value="";
return false;
}
else  if (txtadmno=="") 
{
alert("PLEASE SELECT VALID STUDENT !");
return false;
}
else
return true;
}
</script>

    </head>
<?php if($bid!="")
{
?>
  <body onload="fee_sub_structure(document.getElementById('fees_submission_dates_id1').value,document.getElementById('txtadmno').value)">
<?php } else {?>
<body>
<?php }?>
    
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
   <h1>Fee Submission</h1>

  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
  <h3 align="center" style="color:#666666"><?php echo $strecord['std_first_name'].' '.$strecord['std_middle_name'].' '.$strecord['std_last_name'].' ( '.$strecord['std_adm_no'].')'?></h3>
   <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div>
<div id="page-yield">
  <div class="label-field-pair">
    <label>Select fee collection: </label>
  <div class="text-input-bg">
  <form action="" method="post" id="frmfee_structure" name="frmfee_structure">
  <input name="txtadmno" id="txtadmno" type="hidden" value="<?php echo $_GET[id]?>" />
  
  <?php 
if($bid!="")
	{
 if(($record = $feeRecordSet->getNextRecord()) !== false)
      { 
?>  
  
 <select id="fees_submission_dates_id1" name="fees_submission_dates_id" onfocus="fee_sub_structure(this.value,document.getElementById('txtadmno').value)"  onblur="fee_sub_structure(this.value,document.getElementById('txtadmno').value)" >

<option value="<?=$record['fee_coll_id']?>" selected="selected"> <?=$record['fee_coll_name']." - ".date(("d-M-Y"),strtotime($record['fee_coll_start_date']))?></option>
</select>

<?php }
}
else
{
?>  
 <select id="fees_submission_dates_id" name="fees_submission_dates_id" onChange="fee_sub_structure(this.value,document.getElementById('txtadmno').value)" >   
    <option value="">Select fee collection</option>
  <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>   
<option value="<?=$record['fee_coll_id']?>"> <?=$record['fee_coll_name']." - ".date(("d-M-Y"),strtotime($record['fee_coll_start_date']))?></option>

<?php }?>
</select>
<?php }?>
</form>
  </div>
  </div> 
  <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" >
  </div>  
  </div>
  <form action="?page=student_fee_submission" method="post" onsubmit="return validate()">
    <input name="txtadmno" id="txtadmno" type="hidden" value="<?php echo  $_GET[id]?>" />
    
<div id="fees_structure">
<!-- Free Structure List -->

</div>
</form>

<div id="modal-box" style="display:none;"></div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           