<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
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
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Courses</h1>
  <h3>Batches</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    
      <li><a href="#/batches/164/exam_groups">Exams</a> </li>
    

    <li><a href="#/courses/105/batches/164/edit">Edit</a></li>
    <li><a href="file:///C|/Documents and Settings/Administrator/Desktop/courses_batches_files/courses_batches.htm" onclick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;7cX66LPCv5YM1HDtFkN/ZrOOHKtk8C6/RF5VrOx9TOM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></li>


    <li>
      <a href="#/courses/105/batches/164#" class="drops" id="link_one">Manage ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="#/batch_transfers/subject_transfer/164">Subject</a></li>
        <li><a href="#/batches/164/electives">Elective Groups</a></li>
        <li><a href="#/batches/assign_tutor/164">Assign Tutor</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="page-yield">
<div class="box">
    <div class="bread_crumb">
      <a href="#/courses">Courses</a> »
      <a href="#/courses/105">00COURSE STD 01 </a> »
      Batch 2012-2013
    </div>


    <table id="listing" width="100%">
      <tbody><tr class="tr-head">
        <td>Sl  no.</td>
        <td>Name</td>
        <td>Admission number</td>
      </tr>
      
      
        
        <tr class="tr-odd">
          <td class="col-1">1</td>
          <td class="col-2"><a href="#/student/profile/572">SILNA  </a></td>
          <td class="col-3">HH01 </td>
        </tr>
      
        
        <tr class="tr-even">
          <td class="col-1">2</td>
          <td class="col-2"><a href="#/student/profile/573">Ahalya  </a></td>
          <td class="col-3">HH02 </td>
        </tr>
      
        
        <tr class="tr-odd">
          <td class="col-1">3</td>
          <td class="col-2"><a href="#/student/profile/582">Milana  </a></td>
          <td class="col-3">HH04 </td>
        </tr>
      
        
        <tr class="tr-even">
          <td class="col-1">4</td>
          <td class="col-2"><a href="#/student/profile/583">Malini  </a></td>
          <td class="col-3">HH05 </td>
        </tr>
      
        
        <tr class="tr-odd">
          <td class="col-1">5</td>
          <td class="col-2"><a href="#/student/profile/761">Ahlaam  SALMAN</a></td>
          <td class="col-3">1159 </td>
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