<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
<img alt="Show_finance" src="./finance_categories_files/show_finance.png">
  <h1>Finance Management</h1>
  <h3>Categories</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="./finance_categories_files/back.png"></a>
  </div>
</div>


<div id="page-yield">
  <div id="flash_box"></div>
  
  <div class="box">
    <div class="link-heading">
      <a href="#" onClick="new Ajax.Request(&#39;/finance/categories_new&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)}); return false;">Create Finance Category</a>
    </div>
    <div class="link-descr"> Create Category</div>

    <div id="category-list">



  <div class="containerodd ">
    <div class="title"> Donation</div>
  </div>

  <div class="containereven ">
    <div class="title"> Fee</div>
  </div>

  <div class="containerodd ">
    <div class="title"> Salary</div>
  </div>


  <div class="containereven ">
    <div class="title"> Bob</div>
    <div class="options">
      <div class="edit"><a href="#" onClick="new Ajax.Request(&#39;/finance/category_edit/28&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)}); return false;">Edit</a></div>
      <div class="edit">
        
        
          <a href="#" onClick="if (confirm(&#39;Are you sure to delete this finance category?&#39;)) { new Ajax.Request(&#39;/finance/category_delete/28&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)}); }; return false;">Delete</a>
        
      </div>
    </div>
  </div>

<div id="modal-box" style="display:none;"><label class="head_label">Create new category<span></span></label>

<form action="#" method="post" onSubmit="new Ajax.Request(&#39;/finance/category_create&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo="></div>

  <div id="form-errors"></div>
  <div class="label-field-pair">
    <div class="label-container"><label>Category Name:</label> </div>
    <div class="input-container"><input id="finance_category_name" name="finance_category[name]" size="30" type="text"></div>
  </div>
  <div class="label-field-pair">
    <div class="label-container"><label>Description:</label> </div>
    <div class="input-container"><input id="finance_category_description" name="finance_category[description]" size="30" type="text"></div>
  </div>
  <div class="label-field-pair">
    <div class="label-container"><label>Is this under income?</label> </div>
    <div class="input-container"><input name="finance_category[is_income]" type="hidden" value="0"><input id="finance_category_is_income" name="finance_category[is_income]" type="checkbox" value="1"> </div>
  </div>

  <div id="modelbox-submit">
    <input class="submit_button" name="commit" type="submit" value="► Create">
  </div>
</form>
</div>
</div>
    <div id="modal-box" style="display:none;"></div>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

        <!-- footer -->
  <?php include("include/footer.php")?>