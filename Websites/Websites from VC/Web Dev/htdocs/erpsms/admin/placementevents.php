<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/placementevents_ index.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
       <div id="fullcontent"> <div id="content-header">
  <img alt="Placement" src="../images/placement/placement.png">
  <h1>Placements</h1>
  <h3>All Placements</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/placementevents#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

  <div id="inner-tab-menu">
    <ul>
      <li>     <a href="?page=placementevents-archive">Archived placements</a>
      </li>
    </ul>
  </div>

<div id="fullpage-yield">
  

  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  
    <tbody><tr class="tr-head">    <td>Title</td>  <td>Company</td>  <td>Date</td>
      
        <td>Actions</td>
      
    </tr>
    <tr class="tr-blank"></tr>
    
      <tr class="tr-odd">
        <td class="col-2">
          <a href="http://demo.fedena.com/placementevents/14">Foradian Placement</a>
        </td>
        <td class="col-2">
          Foradian Technologies
        </td>
        <td class="col-4">
          Wednesday, 04 April, 2012
        </td>
        
          <td class="col-4">
            <a href="?page=placementevents-edit">Edit</a>
            <a href="http://demo.fedena.com/placementevents/14" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-even">
        <td class="col-2">
          <a href="http://demo.fedena.com/placementevents/16">Google is comming for 2012 batch</a>
        </td>
        <td class="col-2">
          Google inc.
        </td>
        <td class="col-4">
          Saturday, 07 April, 2012
        </td>
        
          <td class="col-4">
            <a href="">Edit</a>
            <a href="" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
  

</tbody></table>





  <div id="new-placement-button">
    
      <a href="?page=placementevents-new1" class="submit-button">► Announce new placement</a>
    
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>
   <!-- footer -->
  <?php include("include/footer.php")?>