<html>

<head>
<script language="JavaScript" type="Text/JavaScript">
var initColor;var iddd;var interv;var count;var LinkColor="red";
function OverCl1(){if (count%2==0)document.getElementById(iddd).style.color=LinkColor; else document.getElementById(iddd).style.color=initColor;count++;}
function Over(idd){if (document.getElementById){count=1;iddd=idd;initColor=document.getElementById(iddd).style.color;document.getElementById(iddd).style.color=LinkColor;interv=setInterval("OverCl1()",500);}}
function Out(idd){if (document.getElementById){clearInterval(interv);document.getElementById(idd).style.color=initColor;}}
</script>
</head>
<body bgcolor="##FBBF6B"></body>
<hr  style="color: olive;"/>
<center>
<h1 style="color: navy;">Login...!!!!</h1>
</center>
<hr  style="color: olive;"/>
<form method="get" action="profile.php">
<div style="background-color: yellow;border: 10px;margin-left:38%;margin-top: 30px;width: 230px;height: 110px;border-bottom-color: black;">
<table align="center">
<tr >
<td colspan="2">Insert your Login Id and Password
</td></tr>
<tr>
<td>User Name</td>
<td align="center"><input type='text' name="user_name" /></td>
</tr>
<tr><td></td></tr>
<tr>
<td>Password</td>
<td align="center"><input type='password' name="password"/></td>
</tr>
<tr>
<td><input  type="reset"/></td>
<td><input type="submit" value="Login.. :)" style="width: ;"/></td>
</tr>
</table>
</div>
<center>
<a href= style="color: red;"></a>
<a href="forgot_password.php" id="YourId" onMouseOver="Over(this.id)" onMouseOut="Out(this.id)">Forgot Password..!!?  click here</a>
</center>
</form>
</html>