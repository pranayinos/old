<?php
session_start();
if(isset($_SESSION['alogin']))
{
require("../database.php");
include("header.php");

$sel_sql="select * from `mst_subject`";
$sel_exe=mysql_query($sel_sql);

?>
<head>
<title> Edit Test</title>
<script>
function funupdate(id)
{
location='updatetest.php?id='+id
}
function fundel(id)
{
location='deletetest.php?id='+id
}
</script>
<script>
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
xmlhttp.open("GET","test_tbl.php?q="+str,true);
xmlhttp.send(null);
}
</script>
</head>
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
        <div id="testdiv" align="center">
        <p> Tests will be listed here</p> 
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