<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/show1.css" media="screen" rel="stylesheet" type="text/css">

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
    <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>View Hostel Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li class="lengthy"><a href="?page=hostel_wardens">Manage Wardens</a></li>
    <li><a href="?page=hostel_add_room">Add Room</a></li>
    <li><a href="http://demo.fedena.org/hostels/1/edit">Edit</a></li>
    <li><a href="./hostels-1_files/hostels-1.htm" class="delete_link" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></li>
  </ul>
</div>
<div id="page-yield">
    
   
   <div class="detail_box">
     <span class="row_">
       <div class="name">Hostel Name</div><div class="val"><span>:</span><span class="cont">Himalaya</span></div>
     </span>
     <span class="row_">
    <div class="name">Hostel Type</div><div class="val"><span>:</span><span class="cont">common</span></div>
    </span>
    <span class="row_">
    <div class="name">Other Information</div><div class="val"><span>:</span><span class="cont"></span></div>
    </span>
    <span class="row_">
    <div class="name">Total  no. of rooms</div><div class="val"><span>:</span><span class="cont">2</span></div>
    </span>
    <span class="row_">
    <div class="name">Warden</div><div class="val"><span>:</span><span class="cont">
    
      Admin  User 
    
    </span>
    </div>
   </span>
</div>
     <div class="extender"></div>
     <br>
   <div id="room-list">
   <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td>
      Sl  no.
    </td>
    <td>
      Room number
    </td>
    <td>
      Students per room
    </td>
    <td>
      Availability
    </td>
    <td>
      Rent
    </td>
    <td>

    </td>
  </tr>
  <tr class="tr-blank"></tr>
  
    

    <tr class="tr-odd">
      <td class="col-3">
        1
      </td>
      <td class="col-7">
        <a href="?page=view_room_details">001</a>
      </td>
      <td class="col-7">
        2
      </td>
      <td class="col-7">
        0
      </td>
      <td class="col-3">
        200.0
      </td>
      <td class="col-4">
        <small>
          <a href="?page=room_details-1-edit">Edit</a>
          |
          <a href="http://demo.fedena.org/hostels/1#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/room_details/1&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)}); }; return false;">Delete </a>
          </small>
      </td>
    </tr>
  
    

    <tr class="tr-even">
      <td class="col-3">
        2
      </td>
      <td class="col-7">
        <a href="http://demo.fedena.org/room_details/2">002</a>
      </td>
      <td class="col-7">
        2
      </td>
      <td class="col-7">
        2
      </td>
      <td class="col-3">
        300.0
      </td>
      <td class="col-4">
        <small>
          <a href="http://demo.fedena.org/room_details/2/edit">Edit</a>
          |
          <a href="http://demo.fedena.org/hostels/1#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/room_details/2&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)}); }; return false;">Delete</a>
          </small>
      </td>
    </tr>
  

</tbody></table>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>