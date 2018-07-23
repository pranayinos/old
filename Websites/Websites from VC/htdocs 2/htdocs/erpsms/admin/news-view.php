<?php
//$news = new Main(); 
$news = new Main();
$newsid=$_GET[id];	
$field = $news->getdata('*',"news","news_id='$newsid'", "",""); // News
 //<!---DELETE CODE IMPLEMENT  the code of the delete news 16 AUG 2012------------------------------------------------->
$newsid= $_GET['did'];

    if($newsid!="")  
    {

		if($news->deleteData("news","news_id='$newsid'"))
		{
		$msg="News Deleted Succesfully";
		header("location:?page=news-view&id=$id&msg=$msg");			
		}		
		else
		{
			$msg="Error :  News not deleted, Please check Values";
			header("location:?page=news-view&id=$id&error=$msg");
		}	
			
		
	}	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/view1.css" media="screen" rel="stylesheet" type="text/css">
<!------------------------ Start head ------------------------------------>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_news_logo" src="../images/show_news/show_news_logo.png">
  <h1>News</h1>
  <h3>Read news</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  
<?php if( ($record = $field->getNextRecord()) !== false )
    {
	?>
    <div id="news_title">
    <?=$record['news_title']?>
    </div>
    <div id="create_date">
    
<?php       
 
 $today = date(",j F Y");

?>
Posted on:<?php $dw = date( "D", $timestamp); echo $dw;?> <?=$today?>

  
    <br />
     
    </div>
    <div id="news_content">
      <p><!--<img src="../images/application/app_fedena_logo.jpg">-->

<?=$record['news_desc'] ?>
<?php } ?>

      </p>
    </div>

  
    
      <a href="?page=news-edit&id=<?=$record['news_id'] ?>" class="edit_button">► Edit News</a>
    
  <div id="">

    
    
      <a href="?page=news-view&did=<?=$record['news_id'] ?>" class="delete_button" onClick="return confirm(&#39;Are You Sure?&#39;);">► Delete News</a>
    <!--  <form method="post"><input type="submit" name="deleteNews" class="delete_button"  value="► Delete News"/></form>-->
  <!---END OF DELETE code implement----------------------->
      
      
      

     
    </div>
  <div class="extender"></div>
  

 <!-- <h3 id="comments-heading">Comments</h3>-->

  
   <!--   <span id="comments-count"></span>-->
    

 <!-- <ul id="comments-list">-->
    
      



<!--  <li id="comment-item-1">-->
   <!-- <div class="comment-details">
      <div class="commenter">sudhakar</div>
      
        <div class="delete-comment"><a href="#" onClick="new Ajax.Request(&#39;/news/delete_comment/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw=&#39;)}); return false;">Delete</a></div>
      
      <div class="comment-posted-at">Posted 6 days ago</div>
    </div>-->
   <!-- <div class="comment-content">Cool, I like it</div>-->
  </li>

    
  </ul>

 <!-- <h4 id="leave-a-comment">Leave a comment</h4>-->

 <!-- <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/news/add_comment&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw="></div>
  <div class="comment-content"> <textarea cols="40" id="comment_content" name="comment[content]" rows="20"></textarea> </div>
    <input id="comment_news_id" name="comment[news_id]" type="hidden" value="14">
    <div id="submit-button"><input name="commit" type="submit" value="► Submit"></div>
  </form>-->

</div> </div>

      <div class="extender"></div>
    </div>

   
 
         <!-- footer -->
  <?php include("include/footer.php")?>