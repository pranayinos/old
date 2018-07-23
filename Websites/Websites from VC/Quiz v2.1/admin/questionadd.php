<?php
session_start();

if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}

require("../database.php");
include("header.php");

$sel_sql="select * from `mst_subject`";
$sel_exe=mysql_query($sel_sql);

?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
extract($_POST);

echo "<BR>";
echo "<BR><h3 class=head1>Add Question </h3>";

if(isset($_POST['submit']))
{
	
extract($_POST);

$qry="SELECT * from mst_question WHERE test_id=$test AND set_id=$set";
$qry2="SELECT total_que, test_name FROM mst_test";
$qry3="SELECT * from mst_question WHERE test_id=$test and level=$level AND set_id=$set";
/*echo $qry."<br>";
echo $qry2."<br>";
echo $qry3."<br>";*/
$result_1=mysql_query($qry,$cn);
$result_2=mysql_query($qry2,$cn);
$result_3=mysql_query($qry3,$cn);
$c_no_of_ques=mysql_num_rows($result_1);
$t_no_of_ques=mysql_result($result_2,0);
$l_no_of_ques=mysql_num_rows($result_3);

/*echo $l_no_of_ques;
echo "<br>";
echo $c_no_of_ques;*/

if($t_no_of_ques > $c_no_of_ques)
{
	if($l_no_of_ques < 3)
	{
		$testid=$_POST['test'];
		$addque=$_POST['addque'];
		$ans1=$_POST['ans1'];
		$ans2=$_POST['ans2'];
		$ans3=$_POST['ans3'];
		$ans4=$_POST['ans4'];
		$anstrue=$_POST['anstrue'];
		$set_id=$_POST['set'];
		mysql_query("insert into mst_question(test_id,set_id,que_desc,ans1,ans2,ans3,ans4,true_ans,level) values ('$testid','$set_id','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue', '$level')",$cn) or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
	}
	else
	{
		$test_name=mysql_result($result_2,0,'test_name');
		echo "<p align='center'>No more questions can be added to test : $test_name  at level $level <br> Maximum no of questions = 3</p>";
	}
}
		
else
{
	$test_name=mysql_result($result_2,0,'test_name');
	echo "<p align='center'>No more questions can be added to test : $test_name in this set <br> Maximum no of questions = $t_no_of_ques</p>"; 
	unset($_POST);
}
}
?>
<script language="javascript">
function showHint(str)
{
var xmlhttp;
if (str.length==0)
{
document.getElementById("testdiv").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("testdiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","ajax.php?q="+str,true);
xmlhttp.send(null);
}
</script>
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
      <td width="24%" height="26"><div align="left"><strong>Select Test Subject </strong></div></td>
       <td>&nbsp;</td>
      <td >
<select name="subject" id="subject" onChange="showHint(this.value);" style="width:520px">
<option value="0">--Select--</option>
<?php while($sel_rows=mysql_fetch_array($sel_exe))
{
?>
<option value="<?php echo $sel_rows['sub_id']; ?>">
<?php echo $sel_rows['sub_name']; ?>
</option>
<?php  }   ?>
</select></td>
<tr>
      <td width="24%" height="26"><div align="left"><strong>Select Test Name </strong></div></td>
       <td>&nbsp;</td>
      <td ><div id="testdiv">
<select name="test" id="test" style="width:520px">
<option>--Select Test--</option>
<option></option>
</div>
      </select></td>
    <tr>
      <td height="26"><strong>Enter set no </strong></td>
      <td>&nbsp;</td>
      <td><select name="set" style="width:520px"><option value="0"> </option><option value="1">Set A</option><option value="2">Set B</option><option value="3">Set C</option><option value="4">Set D</option> </td>
    </tr>    
    
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
      <td height="26"><strong>Enter correct option no </strong></td>
      <td>&nbsp;</td>
      <td><select name="anstrue" style="width:520px"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option> </td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Question Level </strong></td>
      <td>&nbsp;</td>
      <td><select name="level" style="width:520px"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option> </td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" style=" width:520px"></td>
    </tr>
  </table>
</form>

<p >&nbsp;  </p>
