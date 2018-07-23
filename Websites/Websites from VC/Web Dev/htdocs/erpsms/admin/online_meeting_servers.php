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
<img src="../images/examination/show_exam.png" alt="Exam">
  <h1>Listing BBB Servers</h1>
  <h3>All</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/online_meeting_servers#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li> <a href="?page=online_meeting_servers_new">New server</a></li>
  </ul>
</div>
<div id="page-yield">
  

  <div id="bbbrails_servers_links">

  </div>
  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">

    <tbody><tr class="tr-head">
      <td class="col-1">name</td>
      <td class="col-1">
        url
      </td>
      <td class="col-1">
        salt
      </td>
      <td class="col-1">
        Access
      </td>
    </tr>
    <tr class="tr-blank"></tr>


    
  </tbody></table>

</div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>