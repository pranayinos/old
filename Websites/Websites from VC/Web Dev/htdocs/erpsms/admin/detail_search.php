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
      <div id="content"> 


<div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Book search</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/library/detail_search#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
</ul></div>
<div id="page-yield">
  
  
  
    <div class="search_form">
      <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
        <div class="label-field-pair">
          <label for="title">Title </label>
          <div class="text-input-bg">
            <input id="search_title" name="search[title]" size="30" type="text">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="author">Author</label>
          <div class="text-input-bg">
            <input id="search_author" name="search[author]" size="30" type="text">
          </div>
        </div>
        <input class="submit_button" id="search_submit" name="commit" type="submit" value="Search">
      </form>
    </div>
  
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>