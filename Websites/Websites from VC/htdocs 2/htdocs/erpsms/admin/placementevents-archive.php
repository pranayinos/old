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
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
   <div id="fullcontent"> <div id="content-header">
  <img alt="Placement" src="../images/placement/placement.png">
  <h1>Placements</h1>
  <h3>Archived placements</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="fullpage-yield">
  

  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  
    <tbody><tr class="tr-head">    <td>Title</td>  <td>Company</td>  <td>Date</td>
      
        <td>Actions</td>
      
    </tr>
    <tr class="tr-blank"></tr>
    
      <tr class="tr-odd">
        <td class="col-2">
          <a href="?page=placementevents_plan">New Placement Plan</a>
        </td>
        <td class="col-2">
          Infosys
        </td>
        <td class="col-4">
          Friday, 09 March, 2012
        </td>
        
          <td class="col-4">
            <a href="?page=placementevents-edit">Edit</a>
            <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-even">
        <td class="col-2">
          <a href="#">campus interview</a>
        </td>
        <td class="col-2">
          CTS
        </td>
        <td class="col-4">
          Thursday, 16 February, 2012
        </td>
        
          <td class="col-4">
            <a href="#">Edit</a>
            <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2">
          <a href="#">pool campus</a>
        </td>
        <td class="col-2">
          tcs
        </td>
        <td class="col-4">
          Wednesday, 07 March, 2012
        </td>
        
          <td class="col-4">
            <a href="#">Edit</a>
            <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-even">
        <td class="col-2">
          <a href="#">New Placement Plan</a>
        </td>
        <td class="col-2">
          BEBO technology
        </td>
        <td class="col-4">
          Thursday, 23 February, 2012
        </td>
        
          <td class="col-4">
            <a href="#">Edit</a>
            <a href="http://demo.fedena.com/placementevents/6" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2">
          <a href="#">test</a>
        </td>
        <td class="col-2">
          test
        </td>
        <td class="col-4">
          Thursday, 08 March, 2012
        </td>
        
          <td class="col-4">
            <a href="#">Edit</a>
            <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
      <tr class="tr-even">
        <td class="col-2">
          <a href="#">Beautician</a>
        </td>
        <td class="col-2">
          Godrej
        </td>
        <td class="col-4">
          Wednesday, 14 March, 2012
        </td>
        
          <td class="col-4">
            <a href="#">Edit</a>
            <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
          </td>
        
      </tr>
    
  

</tbody></table>





</div>
 </div>

      <div class="extender"></div>
    </div>
  <!-- footer -->
  <?php include("include/footer.php")?>