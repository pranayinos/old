<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/observation-1-descriptive-indicator_ show.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#observations-1-descriptive_indicators_new_popup').colorbox({opacity:0.3});
		
    });
	  $(function()
    {
        $('#observations-1-descriptive_indicators_edit_popup').colorbox({opacity:0.3});
		
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
  <link href="./observations-1-examination/show.css" media="screen" rel="stylesheet" type="text/css">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Descriptive Indicators</h1>
  <h3>Descriptive Indicators</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/observations/1/descriptive_indicators#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li>
      
     <a href='observations-1-descriptive_indicators_new_popup.php' id='observations-1-descriptive_indicators_new_popup' >New indicator</a>
      
    </li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash-box">
    
  </div>
  
    <div class="bread_crumb">
      <a href="#">Observation Groups</a> »
      <a href="#">observation group</a> »
      First Criteria
    </div>
    <div class="title">Name
      <div class="description">:&nbsp;&nbsp;&nbsp;First Criteria</div>
    </div>
    <div class="title">Description
      <div class="description">:&nbsp;&nbsp;&nbsp;desc</div>
    </div>
  
  <div id="descriptive_indicators">
    
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Descriptive Indicators</td>
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
          Indicator
        </td>
        <td class="col-2">
          desc
        </td>
        <td class="col-3">
          <div class="category-edit">
 <a href='observations-1-descriptive_indicators_edit_popup.php' id='observations-1-descriptive_indicators_edit_popup' >Edit</a>  |
            <a href="http://demo.fedena.org/observations/1/descriptive_indicators#" onClick="if (confirm(&#39;Delete descriptive indicator Indicator?&#39;)) { new Ajax.Request(&#39;/descriptive_indicators/destroy_indicator/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
            
              &nbsp;
              &nbsp;
            
            
              &nbsp;
              &nbsp;
            
          </div>
        </td>
      </tr>
    
  </tbody></table>


  </div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

      <?php include("include/footer.php")?>  