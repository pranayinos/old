<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/show(1).css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#fa_criterias-1-descriptive_indicators_new_popup').colorbox({opacity:0.3});
		
    });
	

	
</script>
 <script type="text/javascript">
    $(function()
    {
        $('#fa_criterias-1-descriptive_indicators_edit_popup').colorbox({opacity:0.3});
		
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
  <h1>Descriptive Indicators</h1>
  <h3>Descriptive Indicators</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li>
     
       <a href='fa_criterias-1-descriptive_indicators_new_popup.php' id='fa_criterias-1-descriptive_indicators_new_popup'>New indicator</a>
      
    </li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash-box">
    
  </div>
  
    <div class="bread_crumb">
      <a href="#">FA Groups</a> »
      <a href="#">GA Group 1</a> »
      Assignment
    </div>
    <div class="title">FA Name
      <div class="description">:&nbsp;&nbsp;&nbsp;Assignment</div>
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
          Legibility
        </td>
        <td class="col-2">
          desc
        </td>
        <td class="col-3">
          <div class="category-edit">
     <a href='fa_criterias-1-descriptive_indicators_edit_popup.php' id='fa_criterias-1-descriptive_indicators_edit_popup'>Edit</a>  |
            <a href="#" onClick="if (confirm(&#39;Delete descriptive indicator Legibility?&#39;)) { new Ajax.Request(&#39;/descriptive_indicators/destroy_indicator/3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
            
              &nbsp;
              &nbsp;
            
            
              <a href="#" onClick="new Ajax.Request(&#39;/descriptive_indicators/reorder/3?count=0&amp;direction=down&#39;, {asynchronous:true, evalScripts:true, method:&#39;post&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">▼</a>
            
          </div>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          Legibility
        </td>
        <td class="col-2">
          desc
        </td>
        <td class="col-3">
          <div class="category-edit">
            <a href="#" onClick="new Ajax.Request(&#39;/fa_criterias/1/descriptive_indicators/4/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">Edit</a>  |
            <a href="#" onClick="if (confirm(&#39;Delete descriptive indicator Legibility?&#39;)) { new Ajax.Request(&#39;/descriptive_indicators/destroy_indicator/4&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
            
              <a href="#" onClick="new Ajax.Request(&#39;/descriptive_indicators/reorder/4?count=1&amp;direction=up&#39;, {asynchronous:true, evalScripts:true, method:&#39;post&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">▲</a>
            
            
              &nbsp;
              &nbsp;
            
          </div>
        </td>
      </tr>
    
  </tbody></table>


  </div>
  <div id="modal-box" style="display:none;"><div id="page-yield">
  <div class="box">
    <form action="#" class="new_descriptive_indicator" id="new_descriptive_indicator" method="post" onSubmit="new Ajax.Request(&#39;/fa_criterias/1/descriptive_indicators&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="descriptive_indicator_name" name="descriptive_indicator[name]" size="30" type="text"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="descriptive_indicator_desc" name="descriptive_indicator[desc]" size="30" type="text"></div>
      </div>
      
        <input id="fa_criteria_id" name="fa_criteria_id" type="hidden" value="1">
      
      <input class="submit_button" id="descriptive_indicator_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <?php include("include/footer.php")?>  