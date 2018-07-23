<?php
$add_books = new Main(); 
$id=$_GET[id];
$newslist = $add_books->getdata('*',"add_books","book_id='$id'","", "");
$record = $newslist->getNextRecord();
$bnum=$record['book_number'];



$issue_books=new Main();

$newsRecord = $issue_books->getdata('*',"issue_books","book_number='$bnum'","", "");
$record1 = $newsRecord->getNextRecord();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/show6.css" media="screen" rel="stylesheet" type="text/css">

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
  <h3>View Books</h3>
  <div id="app-back-button">
      <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>

  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      
    
  </ul>
</div>
<div id="page-yield">
  
  <div class="detail_box">
    <span class="row_">
      <div class="name">Title</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record['book_title'];?></span></div>
    </span>
    <span class="row_">
      <div class="name">Author</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record['author'];?></span></div>
    </span>
    <span class="row_">
      <div class="name">Book Number</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record['book_number'];?></span></div>
    </span>
    <span class="row_">
      <div class="name">Book Status</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record['status'];?></span></div>
    </span>
    <!--</div>-->

    <!--<div class="borrowed">-->
    
      <span class="row_">
        <div class="name">borrower</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record1['name'];?>   </span></div>
      </span>
      <span class="row_">
        <div class="name">Issue date</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record1['issue_date'];?> </span></div>
      </span>
      <span class="row_">
        <div class="name">Due Date</div><div class="val"><span>:</span><span class="taglist themed_text"><?=$record1['due_date'];?> </span></div>
      </span>
    
    <span class="row_">
      <div class="name">Tag list</div><div class="val"><span>:</span><span class="taglist themed_text">Drama</span></div>
    </span>
  </div>
  <div class="links">
    
      
      
        
      
    
    <div class="extender"></div>
  </div>
  <div id="book_reserve">
    
      <span class="reserved-by-h">This book has been reserved by</span>
      <span id="reserved-by" class="themed_text">


        

          <p>

            
              
                test 
              
            
            <span class="reserved-time">
              &nbsp;&nbsp;on&nbsp;&nbsp;
             <?=$record1['issue_date'];?>
            </span>
          </p>
        
      </span>
    
  </div>

</div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>