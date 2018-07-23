<?php 
 $co_id=$_GET[id];
$co_scholasic_group = new Main(); // create a new news object
$newsRecordSet = $co_scholasic_group->getdata('*',"co_scholasic_group","co_scholastic_id='$co_id'","","");
$coscholastic_criteria= new Main(); 
$newsRecordSet1 = $coscholastic_criteria->getdata('*',"coscholastic_criteria","co_scholastic_id='$co_id'","","");

?>
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
    <a href="/observation_groups/1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul> <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
    <li><a href='?page=observation_groups-1-new_popup&id=<?=$record['co_scholastic_id']?>' id='observation_groups-1-new_popup' >New</a></li>
  </ul>
</div>

<div id="page-yield">
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div id="flash-box">
    
  </div>
  <div class="bread_crumb">
    <a href="?page=observation_groups">Observation Groups</a> »
    Observation Group:  observation group
  </div>
 
  <div class="title">
    Name
    <div class="description">:&nbsp;&nbsp;&nbsp;<?=$record['name']?></div>
  </div>
  <div class="title">Header
    <div class="description">:&nbsp;&nbsp;&nbsp;<?=$record['co_header_name']?></div>
  </div>
  <div class="title">Description
    <div class="description">:&nbsp;&nbsp;&nbsp;<?=$record['co_description']?></div>
  </div>
  <div class="title">Grade set
    <div class="description">:&nbsp;&nbsp;&nbsp;Scholastic Grade Set 1</div>
  </div>
  <div id="observations">
   <?php } ?> 
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
    </tr>   <?php 
 while( ($record1 = $newsRecordSet1->getNextRecord()) !== false )
    { 
?>
    
      <tr class="tr-odd">
        <td class="col-1">
          <a href="?page=observations-1-descriptive_indicators&id=<?=$record1['id']?>"><?=$record1['name']?></a>
        </td>
        <td class="col-2">
          <a href="?page=observations-1-descriptive_indicators"><?=$record1['descr']?></a>
        </td>
        <td class="col-3">
          <div class="category-edit">
<a href='observation_groups-1-edit_popup.php' id='observation_groups-1-edit_popup'>Edit</a>  |
            <a href="/observation_groups/1#" onClick="if (confirm(&#39;Delete Co-scholastic criteria First Criteria?&#39;)) { new Ajax.Request(&#39;/observation_groups/1/destroy_observation&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a>
            
              &nbsp;
              &nbsp;
            
            
              &nbsp;
              &nbsp;
            
          </div>
        </td>
      </tr>
         <?php } ?> 

  </tbody></table>

  </div>
  <div id="modal-box" style="display:none;"><div id="page-yield">
  <div class="box">

    <form action="/observation_groups/1/update_observation" method="post" onSubmit="new Ajax.Request(&#39;/observation_groups/1/update_observation&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_name" name="observation[name]" size="30" type="text" value=""></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_desc" name="observation[desc]" size="30" type="text" value=""></div>
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