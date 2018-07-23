<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>board</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #4E5869;
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
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
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
#tbl
{
	background:#C9C;
	background-position:center;
	background-attachment:fixed;
	alignment-adjust:central;
	border:#0000FF double thin solid;
	border-radius:5px;
	padding-left:100px;
	width:40%;
	float:left
}
#tb2
{
	background: #CF3;
	background-position:center;
	background-attachment:fixed;
	alignment-adjust:central;
	border:#0000FF double thin solid;
	border-radius:2px;
	padding-left:100px;
	width:40%;
	float:right
}
#comment
{
	border:#0000FF inset ;
	width:250px;
	background: #9C9;
	margin-left:25px
}
#box
{
	border:#000000 solid thin
}
-->
</style></head>

<body>

<div class="container">
  <div class="content">
    <h1 align="center">Board</h1>
    <hr>
    <p>&nbsp;</p>
    <?php
	if(isset($_POST['button']))
	{
	require ("db.php");
	$name=$_POST['name'];
	$email=$_POST['txtmail'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	
	if ($_FILES["pic"]["error"] > 0)
   	{
	   echo $_FILES["pic"]["error"];
   	}
  	else
   	{
	   if (file_exists("upload/" . $_FILES['pic']['name']))
	   {
		   $image=$_FILES["pic"]["name"];
		   $qry1="INSERT INTO `post` (`id` ,`Name` ,`email` ,`phone` ,`msg`)
VALUES (NULL , '$name', '$email', '$phone', '$msg')";
			$result1=mysql_query($qry1,$res);
	   }
	   else
	   {
		   move_uploaded_file($_FILES['pic']['tmp_name'],"upload/".$_FILES['pic']['name']);
		   $image=$_FILES["pic"]["name"];
		   $qry1="INSERT INTO `post` (`id` ,`Name` ,`email` ,`phone` ,`msg`)
VALUES (NULL , '$name', '$email', '$phone', '$msg')";
			$result1=mysql_query($qry1,$res);
		     
	   }
   	}
	
	$qry1="INSERT INTO `post` (`id` ,`Name` ,`email` ,`phone` ,`msg`)
VALUES (NULL , '$name', '$email', '$phone', '$msg')";


	$selqry1="SELECT * FROM post WHERE (ID %2) <> 0 ";
	$selqry2="SELECT * FROM post WHERE (ID %2) = 0 ";
	$result2=mysql_query($selqry1,$res);
	$result3=mysql_query($selqry2,$res);
	if($result1)
	{
		echo "gdfdg";
	}
	?>
    
    <div id="tbl"><?php
	while ($row=mysql_fetch_row($result2))
	{
		?> 
        <div id="box"><img src="upload/<?php echo $row['6'] ?>" width="30" height="40" /><font size="-2">posted by: <?php echo $row[1]; ?></font><br><font size="-3"><?php echo $row[2]; ?></font><br>
        Comment :<br><div id="comment"><?php echo $row[4]; ?></div><br></div><BR>
        <?php
	}?>
	</div>
	<div id="tb2">
    <?php
    while ($row=mysql_fetch_row($result3))
	{
		?> 
        <div id="box"><img src="upload/<?php echo $row['6'] ?>" width="30" height="40" /><font size="-2">posted by: <?php echo $row[1]; ?></font><br><font size="-3"><?php echo $row[2]; ?></font><br>
        Comment :<br><div id="comment"><?php echo $row[4]; ?></div><br></div><BR>
        <?php
	}?></div><?php 
}else
{
	?>
<script>
location='index.php';
</script>
<?php
}
?>
    <!-- end .content --></div>
    
  <!-- end .container --></div>
</body>
</html>