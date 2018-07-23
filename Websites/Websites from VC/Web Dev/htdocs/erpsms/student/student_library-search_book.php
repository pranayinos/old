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
  <?php /*?> <?php include("include/sidebar2.php")?><?php */?>
           
      <!-- end of side bar -->
      
      <div id="fullcontent"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Book search</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=student_library-detail_search">Detail search</a> </li>
  </ul>
</div>
<div id="page-yield">
  
  
  <div class="search_form">
    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>
      <div class="label-field-pair">
        <label for="search">Search </label>
        <div class="text-input-bg">
          <input id="search_name" name="search[name]" size="30" type="text">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="search_by">Search by</label>
        <div class="text-input-bg">
          <select id="search_search_by" name="search[search_by]"><option value="Book Number">Book Number</option>
<option value="title">Title</option>
<option value="tag">Tag</option>
<option value="author">Author</option></select>
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
    </body></html>