<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/show2.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="fullcontent"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>View room details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=room_details-1-edit">Edit room</a></li>
  </ul>
</div>
<div id="page-yield">
  
  
  <div class="detail_box">
    <div class="name">Hostel Name</div><div class="val"><span>:</span>Himalaya</div>
    <div class="name">Room number</div><div class="val"><span>:</span>001</div>
    <div class="name">Students per room</div><div class="val"><span>:</span>2</div>
    <div class="name">Rent</div><div class="val"><span>:</span>200.0</div>
  </div>
  <table id="listing" align="right" width="60%" cellpadding="1" cellspacing="1">
    
      <tbody><tr class="tr-head">
        <td>
          Sl  no.
        </td>
        <td>
          Name
        </td>
        <td>
          Batch
        </td>
        <td>

        </td>
      </tr>
      <tr class="tr-blank"></tr>
      


        <tr class="tr-odd">
          <td class="col-1">
            1
          </td>
          <td class="col-3">
            <a href="?page=profile">Raj Kumar Thapa</a>
          </td>
          <td class="col-3">
            1 - 1st Semester
          </td>
          <td class="col-3">
            <small>
              <a href="?page=room_allocate-assign_room-200">Change</a>
              |
              <a href="#" onClick="return confirm(&#39;Are you sure?&#39;);">Vacate</a>
            </small>
          </td>
        </tr>
      


        <tr class="tr-even">
          <td class="col-1">
            2
          </td>
          <td class="col-3">
            <a href="#">SACHIN RAMESH  TENDULKAR</a>
          </td>
          <td class="col-3">
            1 - 1st Semester
          </td>
          <td class="col-3">
            <small>
              <a href="#">Change</a>
              |
              <a href="#" onClick="return confirm(&#39;Are you sure?&#39;);">Vacate</a>
            </small>
          </td>
        </tr>
      
    
  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>