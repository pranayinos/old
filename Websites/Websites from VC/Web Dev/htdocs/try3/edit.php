<?php
session_start();
?>
<style>
input
{background:#CCF
}
select
{
	background:#CCF
}
</style>
<?php
if(isset($_SESSION['id']))
{
?>
<?php
	if($_POST['sub'])
	{
		$id=$_POST['email'];
		require "db.php";
		$qry="select * from data where id='$id'";
		$result=mysql_query($qry,$res);
		$row=mysql_fetch_row($result);
?>
<form action="edited.php"  enctype="multipart/form-data" method="post" name="form1" id="form1" class="form1" >
  <table border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
    <td width="96">Email</td>
    <td width="150"><input type="text"  value="<?php echo $row[8]?>" name="id" /></label>
    </tr>

    <tr>
    <td>Salutation</td>
    <td><select name="st" >
    <?php
    switch($row[0])
	{
		case "Mr." :
		?><option selected="selected"> Mr.</option>
        <option> Ms.</option> 
        <option> Mrs.</option>
    <?php 
		break;
		case "Ms.":
		?><option> Mr.</option>
        <option selected="selected"> Ms.</option> 
        <option> Mrs.</option>
	<?php 
		break;
		case "Mrs.":
		?><option> Mr.</option>
        <option> Ms.</option> 
        <option selected="selected"> Mrs.</option>
    <?php break;
	}?>
		</select>				
        	
    </td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name_1" type="text" maxlength="16" value="<?php echo $row[1]; ?>"  ></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name_2" type="text" maxlength="16" value="<?php echo $row[2]; ?>" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name_3" type="text" maxlength="16" value="<?php echo $row[3]; ?>" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="addr" type="text" maxlength="64" value="<?php echo $row[4]; ?>"></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text" maxlength="24" value="<?php echo $row[5];?>"></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="state" type="text" maxlength="24" value="<?php echo $row[6];?>"></td>
  </tr>
  <tr >
  	<td>Ph. No.</td>   
  	<td ><input name="ph_no" type="text" maxlength="11"  value="<?php echo $row[7];?>"> </td> 	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td><input type="text" name="pic" id="pic" value="<?php echo $row[11];?>" disabled="disabled" />
    </tr>
  <tr >
    <td  align="center" colspan="2"><input name="submit" type="submit" value="Done" style="background:#9999FF">  
       &nbsp; &nbsp;
    </tr>
</table>
</form>
<?php
	}
	else
	{	?>
	<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="as" >
<table width="274" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="42">Email</td>
    <td width="197"><input name="email" type="text" maxlength="20"  class="required email"> &nbsp;&nbsp;<input name="sub" type="submit" value="go"></td>
</table>
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="frm1" >
<table border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
    <td>Salutation</td>
    <td><select name="st"><option selected="selected">  </option><option> Mr.</option><option> Ms.</option> <option> Mrs.</option></select></td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name1" type="text" maxlength="16"  ></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name2" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name3" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="add" type="text" maxlength="64" ></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="cty" type="text" maxlength="24" ></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="stst" type="text" maxlength="24" ></td>
  </tr>
  <tr >
  	<td>Ph. No.&nbsp; &nbsp;    
  	<td  align=><input name="ph_n" type="text" maxlength="11">  	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td  align=><input type="text" name="pi" id="pi">
    </tr>
 </table>
</form>
<?php
	}
?>
<?php
}
else
{
	echo "<script> location='index.php' </script>";
}
