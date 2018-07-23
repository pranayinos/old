<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">

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
      <div id="fullcontent"> 
<div id="content-header">
<img alt="Manage_news_logo" src="../images/manage_news/manage_news_logo.png">

  <h1>School News</h1>
  <h3>Latest announcements</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/news/all#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
  </ul>
</div>

<div id="page-yield">

  

  <div id="all_news">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>
          Sl  no.
        </td>
        <td>
         Title
        </td>
        <td>
          Author
        </td>
        <td>
          Comments
        </td>
        <td>
         Posted
        </td>
      </tr>
      <tr class="tr-blank"></tr>
      
        
        
        <tr class="tr-odd">
          <td class="col-1">
            1
          </td>
          <td class="col-3">
            <a href="#">Fedena 2.1 released </a>
          </td>
          <td class="col-3">
            
              Fedena - admin
            
          </td>
          <td class="col-1">
            0
          </td>
          <td class="col-3">
            11 months ago
          </td>
        </tr>
      

    </tbody></table>
    
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

           <!-- footer -->
  <?php include("include/footer.php")?>

</body></html>