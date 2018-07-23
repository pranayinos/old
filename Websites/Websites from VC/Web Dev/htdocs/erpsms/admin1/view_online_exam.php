<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/new_online_exam.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#view_online_exam_edit_popup').colorbox({opacity:0.3});
		
    });

	
	
</script>
<!--------- Start head ---------------->

</head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
     <!---- Side bar ---->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Online Exam</h1>
  <h3>View Online Exams</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>

    <li><a href="?page=new_online_exam">New</a></li>

  </ul>
</div>
<div id="page-yield">
  <div id="flash_box">
  </div>
  
  <div id="box">
  <div class="label-field-pair">
   <label for="student_course">Online Exam:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
   </label>
   <div class="text-input-bg">
  <select id="batch_id" name="batch[id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;exam-list&#39;, &#39;/online_exam/show_active_exam&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;pETlawbN3qM7axWlhooH9wT/l1nns3mrCea9udiE/gE=&#39;)})"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>
</div></div>
    <div id="exam-list">

  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>
        Name
      </td>
      <td>
        Start Date
      </td>
      <td>
        End Date
      </td>
      <td>
      </td>
      <td>
      </td>
    </tr>

    <tr class="tr-blank"></tr>
    
      <tr class="tr-odd">
        <td class="col-3"><a href="#">to</a></td>
        <td class="col-3">22-06-2012</td>
        <td class="col-1">22-06-2012</td>
        
          <td class="col-1"><a href="#" onclick="new Ajax.Request(&#39;/online_exam/publish_exam/7&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;pETlawbN3qM7axWlhooH9wT/l1nns3mrCea9udiE/gE=&#39;)}); return false;">Publish</a></td>
        
        <td class="col-1"><a href='view_online_exam_edit_popup.php' id='view_online_exam_edit_popup'>Edit</a> 
        <a href="#" onclick="if (confirm(&#39;Are you sure to delete this exam group&#39;)) { new Ajax.Request(&#39;/online_exam/delete_exam_group/7&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;pETlawbN3qM7axWlhooH9wT/l1nns3mrCea9udiE/gE=&#39;)}); }; return false;">| Delete</a> </td>
      </tr>
    
  </tbody></table>
  
</div>
  </div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>