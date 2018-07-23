<?php
session_start();
if(isset($_SESSION['alogin']))
{
require("../database.php");
include("header.php");

$sel_sql="select * from `mst_subject`";
$sel_exe=mysql_query($sel_sql);

?>
<br />
<script>
function funupdate(Studid)
{
location='update_q.php?id1='+Studid
}
function fundel(Sid)
{
location='delete_q.php?id1='+Sid
}
</script>
<style>
th{
color:#FF0000;
}
table{
border-color:#FFFF66;
}
</style>
<script>
function showCustomer(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax_ed_q2.php?q="+str,true);
xmlhttp.send(null);
}
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
xmlhttp.open("GET","ajax_ed_q1.php?q="+str,true);
xmlhttp.send(null);
}
</script>
<body>
<div align="center">
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
        </select></td></tr></table>
        <div id="testdiv">
        <table width="80%"  border="0" align="center">
		<tr >
      	<td width="24%" height="26" valign="top"><div align="left"><strong>Select Test Name </strong></div></td>
      	<td>&nbsp;</td>
      	<td >
      	<select name="test" id="test" style="width:520px" onChange="showCustomer(this.value)" disabled>
      	<option>--Wait--</option>
      	<option></option>
	    </select></td></tr></table>
</div>
</form>
</div>
<br>
</body>

<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>