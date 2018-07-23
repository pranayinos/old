<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>


<link href="css/show.css" media="screen" rel="stylesheet" type="text/css">

 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <div id="content"> <div id="content-header">
   <img src="../images/assignment/assignment.png">
  <h1>Assignments</h1>
  <h3>Introductory Economics lI</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div id="assignment_title">
    <p>Test Assignment   </p>  <p id="assignment_due">Due in 7 days    <small>(Monday, 30 July, 2012)</small></p>
  </div>


  <div id="assignment_content">
    <p>
      Please submit on time
    </p>
      <div id="attachment"> <a href="#">Sakai_Doc.docx</a></div>
  </div>


  
    <div id="employee-options">
      <div id="action_buttons">
        <div class="submit_button">
          <a href="?page=emp_assignments_edit" class="edit_button">► Edit</a>
        </div>
        <div class="submit_button">
          <a href="#" class="delete_button" onclick="if (confirm(&#39;Are you sure you want to delete this assignment?This will also delete all the answers submitted to this assignment.&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg=&#39;); f.appendChild(s);f.submit(); };return false;">► Delete Assignment</a>
        </div>
      </div>
      <div id="student-list-bg">
        <div id="loaderbox"><img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;"> </div>
        <div id="quickinfo">  <h5><a href="#" onclick="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;assigned_students&#39;, &#39;/assignments/assignment_student_list/17?status=assigned&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg=&#39;)}); return false;">Assigned (21)</a></h5>
          <h5> <a href="#" onclick="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;assigned_students&#39;, &#39;/assignments/assignment_student_list/17?status=answered&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg=&#39;)}); return false;">Answered (0)</a></h5>
          <h5> <a href="#" onclick="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;assigned_students&#39;, &#39;/assignments/assignment_student_list/17?status=pending&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg=&#39;)}); return false;">Pending (21)</a></h5>

        </div>


        <div id="student_list"></div>
      </div>
    </div>
    <div class="extender"></div>

  
  </div>
</div> </div>

      <div class="extender"></div>
    

       <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>