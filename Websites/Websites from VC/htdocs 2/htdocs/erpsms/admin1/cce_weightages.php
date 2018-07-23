<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/cce_weightages_show.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#cce_weightages_new_popup').colorbox({opacity:0.3});
		
    });
	
    $(function()
    {
        $('#cce_weightages_edit_popup').colorbox({opacity:0.3});
		
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
  <h1>CCE Weightages</h1>
  <h3>Index</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/cce_weightages#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='cce_weightages_new_popup.php' id='cce_weightages_new_popup' >  New</a></li>
  </ul>
</div>
<div id="page-yield">
  
  <div id="flash-box">
    
  </div>
  <div id="weightages"><div class="box">
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Weightages</td>
      <td>CCE Exam category</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          <a href="?page=cce_weightages-1">10(FA)</a>
        </td>
        <td class="col-2">
          <a href="?page=cce_weightages-1">Term I</a>
        </td>
        <td class="col-3">
          <div class="category-edit"><a href='cce_weightages_edit_popup.php' id='cce_weightages_edit_popup' >Edit</a> |  <a href="http://demo.fedena.org/cce_weightages/1" onClick="if (confirm(&#39;Are you sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          <a href="#">30(SA)</a>
        </td>
        <td class="col-2">
          <a href="#">Term I</a>
        </td>
        <td class="col-3">
          <div class="category-edit"><a href="http://demo.fedena.org/cce_weightages#" onClick="new Ajax.Request(&#39;/cce_weightages/2/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a> |  <a href="http://demo.fedena.org/cce_weightages/2" onClick="if (confirm(&#39;Are you sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </td>
      </tr>
    
  </tbody></table>
</div></div>
  <div id="MB_modal-box" style="display:none;"><div id="MB_page-yield">
  <div class="box">
    <form action="http://demo.fedena.org/cce_weightages/1" class="edit_cce_weightage" id="MB_edit_cce_weightage_1" method="post" onSubmit="new Ajax.Request(&#39;/cce_weightages/1&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div id="MB_form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Weightage</label>
        <div class="text-input-bg"><input id="MB_cce_weightage_weightage" name="cce_weightage[weightage]" size="30" type="text" value="10"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Type</label>
        <div class="text-input-bg">
          <select id="MB_cce_weightage_criteria_type" name="cce_weightage[criteria_type]"><option value="FA" selected="selected">FA</option>
<option value="SA">SA</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Exam Category</label>
        <div class="text-input-bg">
          <select id="MB_cce_weightage_cce_exam_category_id" name="cce_weightage[cce_exam_category_id]"><option value="1" selected="selected">Term I</option></select>
        </div>
      </div>
      <input class="submit_button" id="MB_cce_weightage_submit" name="commit" type="submit" value="► Update">
    </form>
    <div class="extender"></div>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

   <?php include("include/footer.php")?> 