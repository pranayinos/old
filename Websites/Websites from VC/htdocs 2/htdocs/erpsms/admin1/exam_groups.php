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
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Exam Groups</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      
        <li><a href="?page=new_exam">New</a></li>
      
    
    
      <li><a href="?page=exam_grouping">Connect Exams</a></li>
    
  </ul>
</div>
<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Course</a> »
      <a href="#">B.COM COMMERCE FIRST SEMESTER</a> »
      <a href="#">Batch 2011-12</a> »
      Exams
    </div>


    <table id="listing" width="100%">
      <tbody><tr class="tr-head">
        <td>Exam Name</td>
        
          <td> Actions <img align="absmiddle" alt="Loader" border="0" id="loader" src="./exam_groups_files/loader.gif" style="display: none;"></td>
        
      </tr>
      
      
        <tr class="tr-odd">
          <td class="col-2">

            <a href="?page=view_exam_groups">Exam1</a>
            
              <span><small>
                  <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
                  <s></s>
                </small></span>
            
          </td>
          
            <td class="col-2"><small>
                
                  
                    Schedule Published
                    <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/publish/8?status=result&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;)}); }; return false;">Publish Exam Result</a>
                  
                

                <span id="publish-notice-8"></span>

              </small> </td>
          
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