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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Pin Group</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/pin_groups#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=pin_groups_new">New</a></li>
  </ul>
</div>

<div id="page-yield">
  

  <table id="listing" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td class="col-1">Name</td>
      <td class="col-1">Valid From</td>
      <td class="col-1">Valid till</td>
      <td class="col-1">Course names</td>
      <td class="col-1">Pin count</td>
      <td class="col-1">Active</td>
      <td class="col-1">Options</td>
    </tr>
    
  </tbody></table>
  
</div>

 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>