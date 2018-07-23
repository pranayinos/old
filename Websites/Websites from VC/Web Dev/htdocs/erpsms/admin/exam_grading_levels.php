<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">
 <link href="css/exam_grading_levels_index.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#add_grades').colorbox({opacity:0.3});
		
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
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
<h1>Exams</h1>
<h3>Grading Levels</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="inner-tab-menu">
</div>
<div id="page-yield">
<div id="flash_box">
</div>
<div class="box">
<div class="label-field-pair">
<label for="student_course">Batch
<img align="absmiddle" alt="Loader" border="0" id="loader" src="./exam_grading_levels_files/loader.gif" style="display: none;">
</label>
<div class="text-input-bg">
<select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/grading_levels/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">common</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
</div></div><br /><br /><br />
<div id="grading-levels">
<div class="add_grade">
 <a href='add_grades.php' id='add_grades' >  
Add grades</a></br>
</div>
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
<tbody><tr class="tr-head">
<td>Name</td>
<td>Min Score</td>
<td></td>
</tr>
<tr id="grading-level-1" class="tr-odd">
<td class="col-2">A</td>
<td class="col-2">90</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/1/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-1&#39;, &#39;/grading_levels/1&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
<tr id="grading-level-2" class="tr-even">
<td class="col-2">B</td>
<td class="col-2">80</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/2/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-2&#39;, &#39;/grading_levels/2&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
<tr id="grading-level-3" class="tr-odd">
<td class="col-2">C</td>
<td class="col-2">70</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/3/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-3&#39;, &#39;/grading_levels/3&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
<tr id="grading-level-4" class="tr-even">
<td class="col-2">D</td>
<td class="col-2">60</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/4/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-4&#39;, &#39;/grading_levels/4&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
<tr id="grading-level-5" class="tr-odd">
<td class="col-2">E</td>
<td class="col-2">50</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/5/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-5&#39;, &#39;/grading_levels/5&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
<tr id="grading-level-6" class="tr-even">
<td class="col-2">F</td>
<td class="col-2">0</td>
<td class="col-2"><small><a href="#" onClick="new Ajax.Request(&#39;/grading_levels/6/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">Edit</a>
| <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-6&#39;, &#39;/grading_levels/6&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); }; return false;">Delete</a></small></td>
</tr>
</tbody></table>
</div>
<div id="modal-box" style="display:none;"></div>
</div>
</div>
</div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>