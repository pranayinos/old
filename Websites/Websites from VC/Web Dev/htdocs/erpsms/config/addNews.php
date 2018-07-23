<?php
    require_once 'News.php'; // Include The News Class
    $news = new New(); // Create a new News Object

    if(isset($_POST['addNews'])) // If the submit button was clicked
    {
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
        if($news->addNews($post))
        {
            echo 'The News was Added Succesfully'; // if adding was successful display this message
        }
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
<a href="index.php">Index<a>
<form id="form1" name="form1" method="post" action="addNews.php">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center" valign="top" bgcolor="#000000"><span class="style1">Add News</span></td>
    </tr>
    <tr>
      <td width="92">News Title :</td>
      <td><label>
        <input type="text" name="newsTitle" id="newsTitle" />
      </label></td>
    </tr>
    <tr>
      <td>News Article :</td>
      <td><label>
        <textarea name="newsArticle" cols="50" id="newsArticle"></textarea>
      </label></td>
    </tr>
    <tr>
        <td colspan="2" align="center" valign="top"><label>
          <input type="submit" name="addNews" id="addNews" value="Add News" />
        </label></td>
    </tr>
  </table>
</form>
</body>
</html>