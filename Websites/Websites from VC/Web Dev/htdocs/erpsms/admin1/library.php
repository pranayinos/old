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
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Library management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  
  <div id="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=books">Manage Books</a> </div>
      <div class="link-descr">Manage library books</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=search_book">Search book</a> </div>
      <div class="link-descr">Search for a book here</div>
    </div>
    
      <div class="link-box">
        <div class="link-heading">  <a href="?page=book_movement-return_book">Return book</a> </div>
        <div class="link-descr">Manage book returns</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=book_movement-direct_issue_book">Issue books</a> </div>
        <div class="link-descr">Issue books here</div>
      </div>
    
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=library-card_setting">Library setting</a>  </div>
      <div class="link-descr">Initial library setting for courses</div>
    </div>
    
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=library-movement_log">Movement Log</a>  </div>
      <div class="link-descr">Issued/Renewed book status</div>
    </div>
    
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=book_movement-renewal">Book renewal</a>  </div>
      <div class="link-descr">Renew books here</div>
    </div>
    
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>