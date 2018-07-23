<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script src="Js/jquery-1.3.1.js"></script>
<script src="Js/jquery.validate.js"></script>
<script language="javascript"></script>
<script>
function fun1()
{
$("#formID").validate({errorClass:'abc'});
}
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="fun1()">
<?php
include("header.php");
?>
 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8">New User Signup</span></h1></td>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" id="formID">
       <table width="500" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid" id="lid" class="required"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass" id="pass" class="required"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass" equalTo="#pass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name" class="required"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea name="address" id="address" class="required"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input name="city" type="text" id="city" class="required"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone" class="required"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email" class="required email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>
