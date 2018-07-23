<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files -----------><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/cce_gradeset1_show(1).css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#cce_grade_sets-1-addgrades_popup').colorbox({opacity:0.3});
		
    });
	
    $(function()
    {
        $('#cce_grade_sets_1_editgrade_popup').colorbox({opacity:0.3});
		
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
  <h1>CCE Grade sets</h1>
  <h3>Grades</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='cce_grade_sets-1-addgrades_popup.php' id='cce_grade_sets-1-addgrades_popup' >Add Grade</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div class="bread_crumb">
    <a href="#">CCE Grade Set</a> »
    Grade Scholastic Grade Set 1
  </div>
  <div class="title">
    Name
    <div class="description">:&nbsp;&nbsp;&nbsp;Scholastic Grade Set 1</div>
  </div>
  <div id="grades">
    
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Grade</td>
      <td>Grade points</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          A1
        </td>
        <td class="col-2">
          10.0
        </td>
        <td class="col-3">
          <div class="category-edit"><a href='cce_grade_sets_1_editgrade_popup.php' id='cce_grade_sets_1_editgrade_popup' >Edit</a> | <a href="#" onClick="if (confirm(&#39;Delete Grade A1?&#39;)) { new Ajax.Request(&#39;/cce_grade_sets/1/destroy_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          A2
        </td>
        <td class="col-2">
          9.0
        </td>
        <td class="col-3">
          <div class="category-edit"><a href="#" onClick="new Ajax.Request(&#39;/cce_grade_sets/2/edit_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">Edit</a> | <a href="http://demo.fedena.org/cce_grade_sets/1#" onClick="if (confirm(&#39;Delete Grade A2?&#39;)) { new Ajax.Request(&#39;/cce_grade_sets/2/destroy_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          B1
        </td>
        <td class="col-2">
          8.0
        </td>
        <td class="col-3">
          <div class="category-edit"><a href="#" onClick="new Ajax.Request(&#39;/cce_grade_sets/3/edit_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">Edit</a> | <a href="http://demo.fedena.org/cce_grade_sets/1#" onClick="if (confirm(&#39;Delete Grade B1?&#39;)) { new Ajax.Request(&#39;/cce_grade_sets/3/destroy_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          B2
        </td>
        <td class="col-2">
          7.0
        </td>
        <td class="col-3">
          <div class="category-edit"><a href="#" onClick="new Ajax.Request(&#39;/cce_grade_sets/4/edit_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">Edit</a> | <a href="#" onClick="if (confirm(&#39;Delete Grade B2?&#39;)) { new Ajax.Request(&#39;/cce_grade_sets/4/destroy_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          E2
        </td>
        <td class="col-2">
          2.0
        </td>
        <td class="col-3">
          <div class="category-edit"><a href="#" onClick="new Ajax.Request(&#39;/cce_grade_sets/5/edit_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); return false;">Edit</a> | <a href="http://demo.fedena.org/cce_grade_sets/1#" onClick="if (confirm(&#39;Delete Grade E2?&#39;)) { new Ajax.Request(&#39;/cce_grade_sets/5/destroy_grade&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
  </tbody></table>


  </div>
  <div id="modal-box" style="display:none;"><div id="page-yield">
  <div class="box">
    <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/cce_grade_sets/1/update_grade&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="grade_name" name="grade[name]" size="30" type="text" value="A1"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Grade Points</label>
        <div class="text-input-bg"><input id="grade_grade_point" name="grade[grade_point]" size="30" type="text" value="10"></div>
      </div>
      <input id="grade_cce_grade_set_id" name="grade[cce_grade_set_id]" type="hidden" value="1">
      <input class="submit_button" id="grade_submit" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>