<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/observation_groups_1_show.css" media="screen" rel="stylesheet" type="text/css">

<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#observation_groups-1-new_popup').colorbox({opacity:0.3});
		
    });
	$(function()
    {
        $('#observation_groups-1-edit_popup').colorbox({opacity:0.3});
		
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
  <h3>Co Scholastic Criterias</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/observation_groups/1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='observation_groups-1-new_popup.php' id='observation_groups-1-new_popup' >New</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div class="bread_crumb">
    <a href="http://demo.fedena.org/observation_groups">Observation Groups</a> »
    Observation Group:  observation group
  </div>
  <div class="title">
    Name
    <div class="description">:&nbsp;&nbsp;&nbsp;observation group</div>
  </div>
  <div class="title">Header
    <div class="description">:&nbsp;&nbsp;&nbsp;demo</div>
  </div>
  <div class="title">Description
    <div class="description">:&nbsp;&nbsp;&nbsp;description</div>
  </div>
  <div class="title">Grade set
    <div class="description">:&nbsp;&nbsp;&nbsp;Scholastic Grade Set 1</div>
  </div>
  <div id="observations">
    
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Observations</td>
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
          <a href="?page=observations-1-descriptive_indicators">First Criteria</a>
        </td>
        <td class="col-2">
          <a href="?page=observations-1-descriptive_indicators">desc</a>
        </td>
        <td class="col-3">
          <div class="category-edit">
<a href='observation_groups-1-edit_popup.php' id='observation_groups-1-edit_popup'>Edit</a>  |
            <a href="http://demo.fedena.org/observation_groups/1#" onClick="if (confirm(&#39;Delete Co-scholastic criteria First Criteria?&#39;)) { new Ajax.Request(&#39;/observation_groups/1/destroy_observation&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
            
              &nbsp;
              &nbsp;
            
            
              &nbsp;
              &nbsp;
            
          </div>
        </td>
      </tr>
    

  </tbody></table>

  </div>
  <div id="modal-box" style="display:none;"><div id="page-yield">
  <div class="box">
    <form action="http://demo.fedena.org/observation_groups/1/update_observation" method="post" onSubmit="new Ajax.Request(&#39;/observation_groups/1/update_observation&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_name" name="observation[name]" size="30" type="text" value="First Criteria"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_desc" name="observation[desc]" size="30" type="text" value="desc"></div>
      </div>
      <input id="observation_observation_group_id" name="observation[observation_group_id]" type="hidden" value="1">
      <input class="submit_button" id="observation_submit" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?> 