<?php
$qs=$_SERVER['QUERY_STRING'];
//echo $qs;
mysql_connect("localhost","root","");
mysql_select_db("student_db");
$sqlstmt="select * from tbl_studinfo where Stud_Id='$qs'";
$data=mysql_query($sqlstmt);
$rec=mysql_fetch_row($data);
$str=<<<abc
<form method="post" action="save.php">
Stud Id:<input type="text" name="txtstudid" value=$rec[0] readonly style="background-color:gray"><br>
Name:<input type="text" name="txtname" value=$rec[1]><br>
Address:<input type="text" name="txtaddress" value=$rec[2]><br>
Phone:<input type="text" name="txtphone" value=$rec[3]><br>
Course:<input type= "text" name="txtcourse" value=$rec[4]><br>
<input type="submit" name="sub" value="Save">
</form>
abc;
echo $str;

?>