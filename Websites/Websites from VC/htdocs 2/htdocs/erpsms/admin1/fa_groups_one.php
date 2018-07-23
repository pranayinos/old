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
        $('#fa_groups-1-new_popup').colorbox({opacity:0.3});
		
    });
	

	
</script>
 <script type="text/javascript">
    $(function()
    {
        $('#fa_groups-1-edit_popup').colorbox({opacity:0.3});
		
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
  <h1>Formative Assessment</h1>
  <h3>Assessment Criterias</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/fa_groups/1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='fa_groups-1-new_popup.php' id='fa_groups-1-new_popup'>New</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div class="bread_crumb">
    <a href="?page=fa_groups">FA Groups</a> »
    GA Group 1
  </div>
  <div class="title">
    Name
    <div class="description">:&nbsp;&nbsp;&nbsp;GA Group 1</div>
  </div>
  <div class="title">
    Description
    <div class="description">:&nbsp;&nbsp;&nbsp;Desc</div>
  </div>
  <div class="title">
    CCE Exam category
    <div class="description">:&nbsp;&nbsp;&nbsp;Term I</div>
  </div>
  <div id="fa_criterias">
    
  <div class="box">
    <table align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>FA Criterias</td>
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
            <a href="?page=fa_criterias-1-descriptive_indicators">Assignment</a>
          </td>
          <td class="col-1">
            <a href="?page=fa_criterias-1-descriptive_indicators">desc</a>
          </td>
          <td class="col-3">
            <div class="category-edit">
<a href='fa_groups-1-edit_popup.php' id='fa_groups-1-edit_popup'>Edit</a>  |
              <a href="http://demo.fedena.org/fa_groups/1#" onClick="if (confirm(&#39;Delete criteria Assignment?&#39;)) { new Ajax.Request(&#39;/fa_groups/destroy_fa_criteria/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
              
                &nbsp;
                &nbsp;
              
              
                &nbsp;
                &nbsp;
              
            </div>
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