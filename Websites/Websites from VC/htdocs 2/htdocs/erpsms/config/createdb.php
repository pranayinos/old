<?php
// TO save yourself some time you can use your mysql class to connect.
require_once 'Mysql.php';
$mysql = new Mysql();

// This is the create statement I used to create the database.

$sql = "
CREATE TABLE `cs_news` (
  `newsId` int(10) unsigned NOT NULL auto_increment,
  `companyId` int(10) unsigned NOT NULL,
  `userId` int(10) unsigned NOT NULL,
  `newsTitle` varchar(45) NOT NULL,
  `newsSummary` varchar(100) NOT NULL,
  `newsArticle` longtext NOT NULL,
  `postDateTime` datetime NOT NULL,
  `currentStatus` enum('Enabled','Disabled') collate latin1_general_ci NOT NULL default 'Disabled',
  PRIMARY KEY  USING BTREE (`newsId`)
) ENGINE=MyISAM AUTO_INCREMENT=7;
";

mysql_query( $sql ) or die( mysql_error() );
// If the page doesn't die we know the database got updated.
// If you want to make sure that it worked you can use the next bit of code to do that.

$sql = "
SHOW COLUMNS FROM cs_news
";
$rset = mysql_query( $sql );
$record = mysql_fetch_array( $rset );
?><pre><?php print_r( $record ); ?></pre><?php

?>