<?php

$hostel = new Main();
$newsRecord = $hostel->getdata('*',"hostel","active=1","hostel_name ASC", "");

$room=new Main();

	   $newsid= $_GET['d'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($room->updateData($post,"room","room_id='$newsid'"))
				{
				$msg="Room Record is  Succesfully Deleted";
				header("location:?page=room_details&newsid=$d&msg=$msg");		
				}		
				else
				{
				$msg="Error : Room Record is not deleted, Please check Values";
				header("location:?page=room_details&newsid=$d&error=$msg");	
				}	
	}		 
	 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/room_ index.css" media="screen" rel="stylesheet" type="text/css">


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
xmlhttp.open("GET","?page=user_view_div&hostel="+str,true);
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
      <div id="fullcontent"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Room details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/room_details#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=room_details-new">Add Room</a></li>
  </ul>
</div>


    <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/books/sort_by&#39;, {asynchronous:true, 

evalScripts:true, parameters:Form.serialize(this)}); return false;">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

<div id="page-yield">

  

  <div class="label-field-pair">
    <label>Select a Hostel:</label>
    <div class="text-input-bg">
    
      <select id="hostel_id" name="hostel_id" onChange="showroom(this.value)">
     <!-- <select id="hostel_id" name="hostel_id" onChange="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;room-list&#39;, &#39;/room_details/update_room_list&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;hostel_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})">-->
      <option value="">Select a Hostel</option>
      <?php
	   while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	  ?>
<option value="<?=$record['hostel_id'];?>"><?=$record['hostel_name'];?></option>

<?php
}
?>
</select>
 <div id="load" style="display:none">  
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    </div>
    
    <div id="rooms"> 
  </div>
  
</div></form>
  
 <!--     
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td>
      Sl  no.
    </td>
    <td>
      Room number
    </td>
    <td>
      Students per room
    </td>
    <td>
      Availability
    </td>
    <td>
      Rent
    </td>
    <td>

    </td>
  </tr>
  <tr class="tr-blank"></tr>
  
    

    <tr class="tr-odd">
      <td class="col-2">
        1
      </td>
      <td class="col-7">
        <a href="?page=hostels-1">001</a>
      </td>
      <td class="col-7">
        2
      </td>
      <td class="col-7">
        0
      </td>
      <td class="col-5">
        200.0
      </td>
      <td class="col-4">
        <small>
          <a href="?page=room_details-1-edit">Edit</a>
          |
          <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/room_details/1&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)}); }; return false;">Delete</a>
          </small>
      </td>
    </tr>
  
    

   
  

</tbody></table>-->
</div>


</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>