<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/show3.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      
      <div id="content"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Manage Wardens</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/wardens/1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostel_warden_add">Add Warden</a></li>
  </ul>
</div>
<div id="page-yield">
  <div class="name">Hostel</div><div class="val"><span>:</span>Himalaya</div>
  <table align="center" width="100%" cellpadding="1" cellspacing="0" id="listing">
    <!--<tr class="tr-head"><td>Warden</td><td></td> </tr>-->
    
      <tbody><tr class="tr-odd">

        <td class="col-1"> Admin  User</td>

        <td class="col-2">
          <a href="./hostel_wardens_files/hostel_wardens.htm" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw=&#39;); f.appendChild(s);f.submit(); };return false;">Remove</a></td>
      </tr>
    
  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>