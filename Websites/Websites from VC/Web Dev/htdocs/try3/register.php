<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User registration </title>
</head>
<style> 
.clas 
{color:red; } 
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds all other divs~~ */
.container {
	width: 960px;
	height:800px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
	overflow: hidden; /* this declaration makes the .container understand where the floated columns within ends and contain them */
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	height:800px;
	background: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 600px;
	height:800px;
	float: left;
}
.sidebar2 {
	float: left;
	width: 180px;
	height:800px;
	background: #EADCAE;
	padding: 10px 0;
	height:
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #ADB96E;
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>

<script src="jquery-1.3.2.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
function fun()
{
	$(".as").validate({errorClass:'clas'});
}
</script>
<?php 
if(isset($_POST['sub']))
{
	require "db.php";
	$id=$_POST[email];	
	$result=mysql_query("select id from data where id='$id'",$res);
	$row=mysql_fetch_array($result);
	if($row)
	{
		$found=true;
		unset($_POST['sub']);
	}
	else
	{
		if ($_FILES["pic"]["error"] > 0)
		{
		//echo "Error: " . $_FILES["pic"]["error"] . "<br>";
		}
		else
		{
			//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			if (($_FILES["pic"]["type"]=="image/jpeg") &&(($_FILES["pic"]["size"] / 1024) < 100))
			{
				if (file_exists("upload/" . $_FILES["pic"]["name"]))
				{
					//echo $_FILES["pic"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/" . $_FILES["pic"]["name"]);
					//echo " FIle successfully stored in: " . "upload/" . $_FILES["pic"]["name"];
					$tmpName ="upload/" . $_FILES["pic"]["name"];
					$pname=$_FILES["pic"]["name"];
					//echo "<br> $tmpName";
					$fp = fopen("$tmpName", 'r');
					$qry="insert into data values('$_POST[st]', '$_POST[name_1]','$_POST[name_2]','$_POST[name_3]','$_POST[addr]','$_POST[city]','$_POST[state]','$_POST[ph_no]','$_POST[email]','$_POST[pass1]','$fp','$pname')";
					$result=mysql_query($qry,$res);	
					if($result)
					{
					$_SESSION['id']=$_POST['email'];
					?>
     				<script>
					location='registered.php'
					</script>
					<?php
					}
					else
					{
					?> 
					<script> document.write("<h1 align=center>Some error occured try again</h1>")</script><?php
                    }
						
				
				}
			}
			else
			{
				$piclarge=true;
			}
		}
	
			
	}
}
//else
	//{
?>

<body onLoad="fun()">
<div class="container">
  <div class="sidebar1">
  </div>
<div class="content">
<h1><p align="center">

Registration Form 
<br>
</p> 
</h1>
<hr />
<br>
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="as" >
<table border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="113">Email</td>
    <td width="300"><input name="email" type="text" maxlength="20"  class="required email">
    <?php 
	if(isset($found))
	{
		echo "<font color=#FF0000>  user id is already taken</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="pass1" type="password" maxlength="16" id="pass" class="required"></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input name="pass2" type="password" maxlength="16"  equalTo="#pass"></td>
  </tr>
  <tr>
    <td>Salutation</td>
    <td><select name="st"><option> Mr.</option><option> Ms.</option> <option> Mrs.</option></select></td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name_1" type="text" maxlength="16"  class="required"></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name_2" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name_3" type="text" maxlength="16" class="required" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="addr" type="text" maxlength="64" class="required"></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text" maxlength="24" class="required"></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="state" type="text" maxlength="24" class="required"></td>
  </tr>
  <tr >
  	<td>Ph. No.&nbsp; &nbsp;    
  	<td  align=><input name="ph_no" type="text" maxlength="11">  	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td  align=><input type="file" name="pic" id="pic">
     <?php 
	if(isset($piclarge))
	{
		echo "<font color=#FF0000> image is too large</font>";
	}
	?>
    </tr>
  <tr >
    <td  align="center" colspan="2"><br><input name="sub" type="submit" value="submit">  
      <input name="reset" type="reset" value="Reset">
    </tr>
</table>
</form>
</div>
<div class="sidebar2">
</div>
<?php	
//}
?>