<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="css/additional_fees_create_form.css" />
<!--------- Start head ---------------->
    </head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->


    <div id="content_wrapper">
      
         <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Fees</h1>
  <h3>Additional Fees</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div id="batch">
    <div class="label-field-pair"><label>Select a Batch : </label>
      <div class="text-input-bg"> <select id="id_id" name="id[id]" onChange="new Ajax.Request(&#39;/finance/show_additional_fees_list&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option></select> </div>
  </div>
  </div>
  <div id="particulars">


    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Sl  no.</td>
        <td>Fees Name</td>
        <td>Batch Name</td>
        <td>Created Date</td>
      </tr>
      <tr class="tr-blank"></tr>

      
        <tr class="tr-odd">
          <td class="col-1">1</td>
          <td class="col-2"><a href="#" onClick="new Ajax.Request(&#39;/finance/additional_particulars/43&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU=&#39;)}); return false;">test10</a>
            
              <span class="small"> <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/finance/additional_fees_delete/43&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU=&#39;)}); }; return false;">Delete</a></span>
            
            <span class="small"> <a href="#" onClick="new Ajax.Request(&#39;/finance/additional_fees_edit/43&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU=&#39;)}); return false;">Edit</a></span>
          </td>
          <td class="col-3">B.COM 1st SEM - ... </td>
          <td class="col-3">08-16-2011</td>
        </tr>
      
    </tbody></table>
  </div>
</div>
 <div id="modal-box" style="display:none;"></div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           