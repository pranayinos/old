<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Library management</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  
  <div id="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=student_lib_mange-books">Manage Books</a> </div>
      <div class="link-descr">Manage library books</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=student_library-search_book">Search book</a> </div>
      <div class="link-descr">Search for a book here</div>
    </div>
    
    
    
    
    
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>



</body></html>