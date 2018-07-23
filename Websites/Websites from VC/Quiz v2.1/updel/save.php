<?php
if(isset($_POST['sub']));
{
 $Stud_Id=$_POST['txtstudid'];
 $Name=$_POST['txtname'];
 $Address=$_POST['txtaddress'];
 $Phone=$_POST['txtcontact'];
 $Course=$_POST['txtcourse'];
 echo $Stud_Id.$Name.$Address.$Phone.$Course;
 mysql_connect("localhost","root","");
 mysql_select_db("student_db");
 $stmt="UPDATE tbl_studinfo SET  Name =  '$Name',Address='$Address',Phone='$Phone',Course='$Course'  
 WHERE Stud_Id =$Stud_Id";
 echo $stmt;
 if(mysql_query($stmt))
 {
 echo" data updated";
 }
 else
 {
  echo" data not updated ";
 }
 
 
}
?>
<a href="update.php"> go to updatepage </a>