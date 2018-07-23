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
<div id="page-yield">
<div id="flash_box"></div>
<div class="label-field-pair">
<label>Select a Batch:</label>
<div class="text-input-bg">
<select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/class_timings/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">common</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
</div></div>
<div id="class-timings-list">

<div class="linker">
   <a href='set_class.php' id='set_class' >  
Add grades</a>
</div>


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
  
</tbody></table>

</div>
<div id="modal-box" style="display:none;"></div>
<div class="extender"></div>
</div>
&nbsp;
&nbsp;
</div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>