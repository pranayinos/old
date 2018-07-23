<?php
session_start();
?>
<style>
td{
color:red;
background-color:yellow;
}
</style>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<?php

#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################


if(isset($_POST['submit'])) 
{
if(!empty($_POST['cust_name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['code'])) 
{
if($_POST['code'] == $_SESSION['code']) 
{
mysql_connect("localhost","root","");
mysql_select_db("shashi");

$name=$_POST['cust_name'];
$email=$_POST['email'];
$message=$_POST['message'];
$code=$_POST['code'];
//$file=$_POST['file1'];

$file = $_FILES ['file1'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 


if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/'.$name1))
{
$sqlstmt="insert into leave_comment(Name,Email_id,Message,Sec_code,Image)values('$name','$email','$message','$code','$name1')";
if(mysql_query($sqlstmt))
{
//$accept = "Thank you for your feedback.";
echo "Thank you for your feedback";
} 
}
}
else
{
echo $name."--".$email."--".$message."--".$code."--".$name1;
$sqlstmt="insert into leave_comment(Name,Email_id,Message,Sec_code)values('$name','$email','$message','$code')";
mysql_query($sqlstmt);
}
}

else
 {
//$error = "Please check that you have entered proper security code.";
echo "Please check that you have Not entered proper security code.";
}
}
 else 
{
//$error = "Please enter all details.";
echo "Please enter all details.";
}
}

?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("shashi");
$show=mysql_query("Select * from leave_comment order by Id desc limit 5");
 echo "<table>";
while($row=mysql_fetch_array($show))
{
echo "<tr>";

echo "<td>";
$image=$row ['Image'];

echo '<img src="image/'.$image.'" width="100" height="100">';
echo "</td>";
echo "<td>";
echo $row['Name']; echo "</td>";
echo "<td>";
echo $row['Message']; echo "</td>";
$dateformate=$row[Date];
$old_date = date($dateformate);              // returns Saturday, January 30 10 02:06:34
$old_date_timestamp = strtotime($old_date);
$dateformate = date('d-m-y H:i:s', $old_date_timestamp);

echo "<td>";
echo $dateformate; echo "</td>";

echo "</tr>";

       // echo "<li><b>$row[Name]</b> : $row[Message]</li>";
     }
	 echo "</table>";
?>




