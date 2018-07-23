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
    <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Dashboard</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostels/hostel_dashboard#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">

      <div class="link-box">
        <div class="link-heading"><a href="?page=hostels">Hostel</a> </div>
        <div class="link-descr">View Hostel Details</div>
      </div>


      <div class="link-box">
        <div class="link-heading"><a href="?page=room_details">Rooms</a>  </div>
        <div class="link-descr">View room details</div>
      </div>

      <div class="link-box">
        <div class="link-heading"><a href="?page=room_allocate">Room Allocation</a></div>
        <div class="link-descr">Allocate rooms to the students</div>
      </div>

    <div class="link-box">
        <div class="link-heading"><a href="?page=hostel_fee_collection">Fee Collection</a></div>
        <div class="link-descr">Create hostel fee collection date</div>
      </div>
     <div class="link-box">
        <div class="link-heading"><a href="?page=hostel_fee_pay">Hostel fee pay</a></div>
        <div class="link-descr">Pay hostel fee</div>
      </div>

    <div class="link-box">
        <div class="link-heading"><a href="?page=hostel_fee_defaulters">Hostel fee defaulters</a></div>
        <div class="link-descr">View hostel fee defaulters</div>
      </div>
    <div class="link-box">
        <div class="link-heading"><a href="?page=hostel_fee">Pay student hostel fee</a></div>
        <div class="link-descr">Pay hostel fee student wise</div>
      </div>


    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>