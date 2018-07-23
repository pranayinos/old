<?php
    require_once 'News.php'; // Include The News Class
    $news = new News(); // Create a new News Object
    $id = $_GET['id']; // This is an unsafe way to get the information. But its the easiest in our case.
    if(isset($_POST['editNews'])) // If the submit button was clicked
    {
        $post['newsId'] = $id;
        // add the news Id
        $post['newsTitle'] = $_POST['newsTitle'];
        // add the news title to the $post array
        $post['newsArticle'] = $_POST['newsArticle'];
        // add the news article to the $post array
        $post['postDateTime'] = date("Y-m-d H:i:s", time());
        // add the current time and date to the $post array
        $post['userId'] = 1;
        // You can ignore userId, unless you have mutilple users
        $post['currentStatus'] = 'Enabled';
        // This will make sure its displayed
        if($news->editNews($post))
        {
            echo 'The News was Edited Succesfully'; // if adding was successful display this message
        }
    }
    if(isset($_POST['deleteNews']) and $news->deleteNews($id)) // This if statement says that if the user
                                                               // clicked the Delete button, we'll delete
                                                               // the news and return to the index page.
    {
        header("Location: index.php"); // This php function is used to redirect the user to the index page.
    }
    $newsRecordSet = $news->getNewsById($id); // get the record set for this Id.
    $record = NULL; // This will make sure that we dont have the same record when we refresh the page.
    if($newsRecordSet->getRecordCount() == 1)
    {
        $record = $newsRecordSet->getNextRecord();
    }
?>    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<a href="index.php">Index</a>
<form id="form1" name="form1" method="post" action="editNews.php?id=<?=$record['newsId']?>">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center" valign="top" bgcolor="#000000"><span class="style1">Edit News</span></td>
    </tr>
    <tr>
      <td width="92">News Title :</td>
      <td><label>
        <input type="text" name="newsTitle" id="newsTitle" value="<?=$record['newsTitle']?>"/>
      </label></td>
    </tr>
    <tr>
      <td>News Article :</td>
      <td><label>
        <textarea name="newsArticle" cols="50" id="newsArticle"><?=$record['newsArticle']?></textarea>
      </label></td>
    </tr>
    <tr>
        <td colspan="2" align="center" valign="top"><label>
          <input type="submit" name="editNews" id="editNews" value="Edit News" /> - 
          <input type="submit" name="deleteNews" id="deleteNews" value="Delete" />
        </label></td>
    </tr>
  </table>
</form>
</body>
</html>