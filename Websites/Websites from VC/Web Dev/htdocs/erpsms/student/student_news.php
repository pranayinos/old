<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_news- index.css" media="screen" rel="stylesheet" type="text/css">
 <!------------ Start head ---------------------------------------------------------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
     <div id="content_wrapper">
       <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           <!-- end of side bar -->
      
      <div id="content"> 
<div id="content-header">
  <img alt="Manage_news_logo" src="../images/manage_news/manage_news_logo.png">
  <h1>School News</h1>
  <h3>Latest announcements</h3>
  <div id="app-back-button">
  <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=student_news-all">View all</a></li>
    
  </ul>
</div>
<div id="search_add_news_area">

    <div class="news_search_add">
      <div id="news_bg">
        <form name="s1form" action="" style="display:inline;">
          <h2>Search News</h2>
          <input autocomplete="off" id="query" name="query" type="text">
          <div id="go"><input action="index" controller="news" name="commit" type="submit" value="Search"></div>
        </form>
        <div class="extender2"></div>
      </div>
    </div>
    <div class="extender"></div>
  </div>
<div id="page-yield">
 <div class="extender"></div>
</div> </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>



</body></html>