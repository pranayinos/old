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
</script>
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

<?php
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("exam",$cn)  or die("Could not connect to Database");
$sub_id = $_GET["q"];
$sql="SELECT * FROM `mst_test` WHERE `sub_id`='$sub_id'";
$result = mysql_query($sql);
?>
      <!--<td width="24%" height="26"><div align="left"><strong>Select Test Subject </strong></div></td>
      <td>&nbsp;</td>
      <td >
<select name="test" id="test" style="width:520px"  onChange="showCustomer(this.value)">
<option>--Select Test--</option>-->


		<table width="80%"  border="0" align="center">
		<tr >
      	<td width="24%" height="26" valign="top"><div align="left"><strong>Select Test Name </strong></div></td>
      	<td>&nbsp;</td>
      	<td >
      	<select name="test" id="test" style="width:520px" onChange="showCustomer(this.value)">
      	<option>--Select Test--</option>
      	<?php
		while($row=mysql_fetch_array($result))
		{
			$id=$row['test_id'];
			$test=$row['test_name'];
			echo '<option value="'.$id.'">'.$test.'</option>';
		}
		?>

	    </select>
        </td>
        </tr>
</table>
<br />
<div id="txtHint" align="center">Select test from drop down to view questions</div>
