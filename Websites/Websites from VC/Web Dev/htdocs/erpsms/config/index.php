<?php
    require_once 'query_function.php'; // Make sure we include the news class file
    $news = new Main(); // create a new news object
    $newsRecordSet = $news->getNews(); // set newsRecordSet to a MysqlRecordSet
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
</style></head>
<?php
// Here you can create your self any sort of table to display your news article.
?>
<body>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="center" valign="middle" bgcolor="#000000"><span class="style1">News</span></td>
  </tr>
  <?php
      // This while will loop through all of the records as long as there is another record left. 
      if( ($record = $newsRecordSet->getNextRecord()) !== false )
    { // Basically as long as $record isn't false, we'll keep looping.
      // You'll see below here the short hand for echoing php strings.
      // <?=$record[key] - will display the value for that array.
    ?>
      <tr>
      <td colspan="3" align="left" valign="top">
        <?=$record['page_id']?>
    </td>
  </tr>
  <tr>
    <td colspan="2">
        <strong><?=$record['page_name']?></strong>
    </td>
    <td width="36" align="center" valign="top">
    <a href="editNews.php?id=<?=$record['lname']?>">Edit</a>    </td>
  </tr>

  <tr>
      <td colspan="3" align="left" valign="top">
        <?=$record['country']?>
    </td>
  </tr>
  <?php
      }
  ?>
</table>

<a href="addNews.php">Add News</a>
</body>
</html>