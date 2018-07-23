<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="./css/show.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Courses</h1>
  <h3>Batches</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    
      <li><a href="#">Exams</a> </li>
    

    <li><a href="#">Edit</a></li>
    <li><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;1NyPXo/f3Zr/AUOtYo9PnxZNEu/4xZ3Bfpn5EMNSzuc=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></li>


    <li>
      <a href="#" class="drops" id="link_one">Manage ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="#">Subject</a></li>
        <li><a href="#">Electives</a></li>
        <li><a href="#">Assign Tutor</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="page-yield">

  

  

  

  

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Courses</a> »
      <a href="#">IT 1</a> »
      Batch 2012-2013
    </div>


    <table id="listing" width="100%">
      <tbody><tr class="tr-head">
        <td>Sl  no.</td>
        <td>Name</td>
        <td>Admission number</td>
      </tr>
      
      
    </tbody></table>

    <div id="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

   

<!-- footer -->
  <?php include("include/footer.php")?>
           