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
  <img src="../images/galleries_files/photo.png">
  <h1>Gallery</h1>
  <h3>Categories</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/galleries#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

  <div id="inner-tab-menu">
    <ul>
      
       <li><a href="?page=galleries_photo_add">Add photo</a> </li>
       
       
      <li><a href="?page=galleries-category-new">New</a> </li>
      
    </ul>
  </div>

<div id="page-yield">

  
  
    <p class="flash-msg">No Category</p>
  

</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>