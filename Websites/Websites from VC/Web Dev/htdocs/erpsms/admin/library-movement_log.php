<?php
$issue_books=new Main();
$newsRecord = $issue_books->getdata('*',"issue_books","","", "");
   





?>


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
  <h3>Book movement log</h3>
  <div id="app-back-button">
    <a href="library/movement_log#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
  <div id="borrowers_list">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Book Number</td>
        <td>Borrowed by</td>
        <td>Status</td>
        <td>Issue date</td>
        <td>Due Date</td>
      </tr>
      <tr class="tr-blank"></tr>
      <?php
	  while(( $record = $newsRecord->getNextRecord())!==false)
	  {
	  ?>
        <tr class="tr-odd">
          <td class="col-4"><a href="?page=view_book"><?=$record['book_number']?></a></td>
          
            
            <td class="col-4"><a href="employee and studentprofile both links"><?=$record['name'];?></a></td>
          
          <td class="col-1"><?=$record['status'];?></td>
          <td class="col-1"><?=$record['issue_date'];?></td>

          <td class="col-1"><?=$record['due_date'];?></td>
        </tr>
<?php
}
?>
      
    </tbody></table>
    

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>