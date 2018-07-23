<?php $news = new Main(); 

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['news_title'] =$_POST['news_title'];
			   $cols['news_desc'] =$_POST['news_desc'];
			   
			   
			   
			      if($news->Inserttable($cols,"news"))
        {
				$msg="News Added Succesfully";
				header("location:?page=news-add&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=news-add&error=$msg");
		}		
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/fck_editor.css" media="screen" rel="stylesheet" type="text/css">

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
  <img alt="Manage_news_logo" src="../images/manage_news/manage_news_logo.png">
  <h1>Add News</h1>
  <h3>Publish School News</h3>
  <div id="app-back-button">
  
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw="></div>

    

    <div id="add_news_form">
      <div class="news_label_field">
      <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
        <label for="title">Title</label>
        <div id="news_title_text_field_bg"><input id="news_title" name="news_title" size="30" type="text"></div>
      </div>

      <div class="news_label_field">
        <label for="news_content">Content</label>
        <div id="news_content_text_field_bg">
        <textarea id="news__content_editor" name="news_desc" cols="75" rows="16" style="border:none"></textarea>
</div>
      </div>
    </div>

    <input class="news_publish_button" name="commit" type="submit" value="► Publish News">

  </form>

</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>