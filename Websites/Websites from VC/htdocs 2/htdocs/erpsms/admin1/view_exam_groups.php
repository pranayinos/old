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
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>View Exam Groups</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      
        <li><a href="#" onClick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/publish/8?status=result&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;)}); return false;">Publish Exam Result</a></li>
      
    
    
      <li><a href="?page=exam_exam_new">New</a></li>
    
  </ul>
</div>
<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Course</a> »
      <a href="#">B.COM COMMERCE FIRST SEMESTER</a> »
      <a href="#">Batch 2011-12</a> »
      <a href="#">Exams</a> »
      Exam1
    </div>

    <div class="update_msg">
      
        <h4><span class="in_place_editor_field" id="exam_group_name_8_in_place_editor" title="Click to edit">Exam1</span><script type="text/javascript">
//<![CDATA[
new Ajax.InPlaceEditor('exam_group_name_8_in_place_editor', '/exam_groups/set_exam_group_name/8', {callback:function(form) { return Form.serialize(form) + '&authenticity_token=' + encodeURIComponent('EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=') }})
//]]>
</script></h4>
      

      <h4><span class="flash_color" id="publish-notice-8"><img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;"></span></h4></div>
    
    
    
    
      <table id="listing" width="100%">
        <tbody><tr class="tr-head">
          <td>Subject</td>
          
            <td>Manage</td>
          
        </tr>
        
          
            <tr class="tr-odd">
              
              <td class="col-3"><a href="?page=exam_result_entry1">Financial Accounting</a></td>
              
                <td class="col-1">
                  <small><a href="?page=exam_edit1">Edit</a></small>
                  
                    <small><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></small>
                  
                </td>
              
            </tr>
          
        
          
            <tr class="tr-even">
              
              <td class="col-3"><a href="#">Quantitative Techaniques for Business decisions</a></td>
              
                <td class="col-1">
                  <small><a href="#">Edit</a></small>
                  
                    <small><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></small>
                  
                </td>
              
            </tr>
          
        
          
            <tr class="tr-odd">
              
              <td class="col-3"><a href="#">Reading on Indian Constitution,Secularism and enviroment</a></td>
              
                <td class="col-1">
                  <small><a href="#">Edit</a></small>
                  
                    <small><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></small>
                  
                </td>
              
            </tr>
          
        
          
            <tr class="tr-even">
              
              <td class="col-3"><a href="#">Reading literature in English</a></td>
              
                <td class="col-1">
                  <small><a href="#">Edit</a></small>
                  
                    <small><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></small>
                  
                </td>
              
            </tr>
          
        
      </tbody></table>
    

    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>