<?php
$student=new Main();
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/set_class_timing_ index.css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#set_class').colorbox({opacity:0.3});
		
    });
	
	
	
</script>

<!--------- Start head ---------------->

<script type="text/javascript">
	
// <!-- Ajax select data -->
function showtime(str)
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
   document.getElementById("time").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=timetable_view_div&batch_id="+str,true);
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
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>Set class timings</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<form action="#" method="post">
<div id="page-yield">
<div id="flash_box"></div>
<div class="label-field-pair">
<label>Select a Batch:</label>
<div class="text-input-bg">
<select id="std_batch_code" name="std_batch_code"  class="validate[required]" onChange="showtime(this.value)">
        
<option value="">---Select---</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
          </select>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
</div></div>
<div id="class-timings-list">

<!--<div class="linker">
   <a href='set_class.php' id='set_class' >  
Add grades</a>
</div>-->
<div class="linker">
   <a href='?page=add_class_time_table'  >  
Add Class Timing</a>
</div>
<div id="time">
<!--
<table id="class-timings-list" width="100%">
  <tbody><tr class="tr-head">
    <td>Name</td>
    <td>Start Time</td>
    <td>End Time</td>
    <td>Operations</td>
  </tr>
  
    
    <tr id="class-timing-1" class="tr-odd">
      <td class="col-1">1</td>
      <td class="col-3">09:30 AM</td>
      <td class="col-3">10:30 AM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/1/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
    
    <tr id="class-timing-2" class="tr-even">
      <td class="col-1">2</td>
      <td class="col-3">10:30 AM</td>
      <td class="col-3">11:30 AM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/2/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
    
    <tr id="class-timing-3" class="tr-odd">
      <td class="col-1">3</td>
      <td class="col-3">11:30 AM</td>
      <td class="col-3">12:30 PM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/3/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
    
    <tr id="class-timing-4" class="tr-even">
      <td class="col-1">break</td>
      <td class="col-3">12:30 PM</td>
      <td class="col-3">01:30 PM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/4/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
    <a href="http://demo.projectfedena.org/class_timings#" onClick="if (confirm(&#39;This will delete all timetable entried assosciated with this class timing , proceed with deletion?&#39;)) { new Ajax.Updater(&#39;class-timing-4&#39;, &#39;/class_timings/4&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a>
              </small></td>
    </tr>
  
    
    <tr id="class-timing-12" class="tr-odd">
      <td class="col-1">4</td>
      <td class="col-3">01:30 PM</td>
      <td class="col-3">02:00 PM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/12/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
    
    <tr id="class-timing-13" class="tr-even">
      <td class="col-1">5</td>
      <td class="col-3">02:30 PM</td>
      <td class="col-3">03:30 PM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/13/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
    
    <tr id="class-timing-14" class="tr-odd">
      <td class="col-1">6</td>
      <td class="col-3">03:30 PM</td>
      <td class="col-3">04:30 PM</td>
      <td class="col-3"><small><a href="http://demo.projectfedena.org/class_timings#" onClick="new Ajax.Request(&#39;/class_timings/14/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a> |
    
  
          <s>Delete</s>
        </small></td>
    </tr>
  
</tbody></table>-->

</div>
<div id="modal-box" style="display:none;"></div>
<div class="extender"></div>
</div>
&nbsp;
&nbsp;
</div>
<div class="extender"></div>
</div>
</form>
<!-- footer -->
  <?php include("include/footer.php")?>