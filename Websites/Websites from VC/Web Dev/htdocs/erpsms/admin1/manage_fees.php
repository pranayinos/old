<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#addcat').colorbox({opacity:0.3});
    });
	 $(function()
    {
        $('#addparticular').colorbox({opacity:0.3});
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
  <img alt="Show_finance" src="../images/show_finance.png">
  <h1>Instant Fees</h1>
  <h3>Manage Instant Fees</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href='create_instance_cat.php' id='addcat' > Add category</a></li>
    <li id="particular"><a href='add_instant_particular.php' id='addparticular' >Add Particular</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="flash_box">
  </div>
  
  <div id="list_categories">    
    <div class="extender"></div>
    
  <div class="extender"></div>
  <div id="information">
    <table class="sortable" id="listing" width="100%">
      <tbody><tr class="tr-head">
        <th class="col-sl">Sl  no.</th>
        <th class="col-2"> Category Name</th>
        <th class="col-2">Description</th>
        <th class="col-2">Select</th>
      </tr>
      <tr class="tr-blank"></tr>
      
        <tr class="tr-odd">
          <td class="col-sl">1</td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/2">Test Fees</a></td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/2">234</a></td>
          <td class="options"><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="if (confirm(&#39;Are you sure you want to delete this category?&#39;)) { new Ajax.Request(&#39;/instant_fees/delete_category/2&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); }; return false;">Delete</a><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="new Ajax.Request(&#39;/instant_fees/edit_category/2&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); return false;">Edit</a></td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-sl">2</td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/4">ghjhg hjhg</a></td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/4">hgjgh hgjg jghj </a></td>
          <td class="options"><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="if (confirm(&#39;Are you sure you want to delete this category?&#39;)) { new Ajax.Request(&#39;/instant_fees/delete_category/4&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); }; return false;">Delete</a><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="new Ajax.Request(&#39;/instant_fees/edit_category/4&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); return false;">Edit</a></td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-sl">3</td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/5">Category for Comp Science</a></td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/5">Computer Science category</a></td>
          <td class="options"><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="if (confirm(&#39;Are you sure you want to delete this category?&#39;)) { new Ajax.Request(&#39;/instant_fees/delete_category/5&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); }; return false;">Delete</a><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="new Ajax.Request(&#39;/instant_fees/edit_category/5&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); return false;">Edit</a></td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-sl">4</td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/6">my instant</a></td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/6">test 1</a></td>
          <td class="options"><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="if (confirm(&#39;Are you sure you want to delete this category?&#39;)) { new Ajax.Request(&#39;/instant_fees/delete_category/6&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); }; return false;">Delete</a><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="new Ajax.Request(&#39;/instant_fees/edit_category/6&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); return false;">Edit</a></td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-sl">5</td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/7">Temp charge</a></td>
          <td class="col-2"><a href="http://demo.fedena.com/instant_fees/list_particulars/7">chared to the temp</a></td>
          <td class="options"><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="if (confirm(&#39;Are you sure you want to delete this category?&#39;)) { new Ajax.Request(&#39;/instant_fees/delete_category/7&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); }; return false;">Delete</a><a href="http://demo.fedena.com/instant_fees/manage_fees#" onClick="new Ajax.Request(&#39;/instant_fees/edit_category/7&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=&#39;)}); return false;">Edit</a></td>
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
           