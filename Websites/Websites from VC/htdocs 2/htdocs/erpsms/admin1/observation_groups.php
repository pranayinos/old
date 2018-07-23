<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/observation_ show.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/cce_weightages_show.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#observation_groups_new_popup').colorbox({opacity:0.3});
		
    });
	$(function()
    {
        $('#observation_groups_edit_popup').colorbox({opacity:0.3});
		
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
  <h1>Co Scholastic Group</h1>
  <h3>Index</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='observation_groups_new_popup.php' id='observation_groups_new_popup' >New</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div id="observation_groups">
  <div class="box">
    <table align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Observation Groups</td>
        <td>Description</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            <a href="?page=observation_groups_one">observation group</a>
          </td>
          <td class="col-2">
            <a href="?page=observation_groups_one">description</a>
          </td>
          <td class="col-3">
            <div class="category-edit"><a href='observation_groups_edit_popup.php' id='observation_groups_edit_popup' >Edit</a> | <a href="#" onClick="if (confirm(&#39;Delete Co-Scholastic Group observation group?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
          </td>
        </tr>
      
    </tbody></table>
  </div>
</div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

      <?php include("include/footer.php")?>  