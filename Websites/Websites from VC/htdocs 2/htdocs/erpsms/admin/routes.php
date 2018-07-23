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
      <div id="content"> <div id="content-header">
  <img alt="Transport_small" src="../images/transport/transport_small.png">
  <h1>Transport</h1>
  <h3>Route Details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/routes#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=routes-new">Add Route</a></li>
  </ul>
</div>

<div id="page-yield">
  
    
  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
    <tbody><tr class="tr-head"><td>Destination</td>  <td>Cost</td>  <td>Main Route</td>  <td></td> </tr>
    
    <tr class="tr-odd">
     
      <td class="col-1">abc</td>
      <td class="col-2">50</td>
      <td class="col-3">abc</td>
      <td class="col-4"><a href="?page=routes-1-edit">Edit</a>
      <a href="http://demo.fedena.org/routes/1" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
    </tr>
    
    
  </tbody></table>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>