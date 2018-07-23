<?php
session_start();
require("../database.php");
include("header.php");
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Add Question </h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
$qry="SELECT * from mst_question WHERE test_id=$testid";
$qry2="SELECT total_que, test_name FROM mst_test";
$result_1=mysql_query($qry,$cn);
$result_2=mysql_query($qry2,$cn);

$t_no_of_ques=mysql_num_rows($result_1);
$c_no_of_ques=mysql_result($result_2,0);

/*echo $t_no_of_ques;
echo "<br>";
echo $c_no_of_ques;*/

if($t_no_of_ques < $c_no_of_ques)
{
	mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
}
else
{
	$test_name=mysql_result($result_2,0,'test_name');
	echo "<p align='center'>No more questions can be added to test : $test_name <br> Maximum no of questions = $t_no_of_ques</p>"; 
	unset($_POST);
}
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
  <table width="80%"  border="0" align="center">
    <tr>
      <td width="24%" height="32"><div align="left"><strong>Select Test Name </strong></div></td>
      <td width="1%" height="5">  
      <td width="75%" height="32">
      <select name="testid" id="testid" style=" width:520px">
<?php
$rs=mysql_query("Select * from mst_test order by test_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea name="addque" cols="60" rows="2" id="addque" style=" width:520px"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans1" type="text" id="ans1" style=" width:520px" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans2" type="text" id="ans2" style=" width:520px" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans3" type="text" id="ans3" style=" width:520px" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input name="ans4" type="text" id="ans4" style=" width:520px" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter correct option </strong></td>
      <td>&nbsp;</td>
      <td><select name="anstrue" style="width:520px"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option> </td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" style=" width:520px"></td>
    </tr>
  </table>
</form>

<p > &nbsp; </p>
