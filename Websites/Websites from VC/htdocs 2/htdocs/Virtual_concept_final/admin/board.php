<?php 
session_start();
if(isset($_SESSION['user_id']))
{
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Approval Panel</title>
<script>
function approve(id)
{
	var x;
	var r=confirm("Do you really want to approve!");
	if (r==true)
  	{
  	location='approve.php?'+id;
  	}
	else
  	{
	return(false);	
  	}
	
}
</script>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
	margin-left: 25px;
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
	background: #B0C0EA;
	background-position:center;
	background-attachment:fixed;
	alignment-adjust:central;
	border:#0000FF double thin solid;
	border-radius:5px;
	padding-left:35px;
	width:40%;
	float:left;
	padding-right: 35px;
}
#tb2
{
	background: #B0C0EA;
	background-position:center;
	background-attachment:fixed;
	alignment-adjust:central;
	border:#0000FF double thin solid;
	border-radius:2px;
	padding-left:35px;
	width:40%;
	float:right;
	padding-right: 35px;
}
#comment
{
	border:#0000FF inset ;
	width:249px;
	background: #9C9;
	margin-left:45px
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
    <h1 align="center">Admin approval panel</h1>
    <hr>
    <div class="Logout" align="right">
      <div align="center" style="width:20%"><a href="index.php">Logout</a></div>
    </div>
    <p>&nbsp;</p>
<?php
	require ("../db.php");
	$selqry1="SELECT * FROM posts WHERE (ID %2) <> 0 AND approved=0 ";
	$selqry2="SELECT * FROM posts WHERE (ID %2) = 0 AND approved=0";
	$result2=mysql_query($selqry1,$res);
	$result3=mysql_query($selqry2,$res);

	?><div id="tbl"><?php
	while ($row=mysql_fetch_row($result2))
	{
		?><BR> 
        <div id="box">
        <div align="left" style="float:left; width:40px">
        <img src="../upload/<?php echo $row['5'] ?>" width="60" height="80" />
        </div>
        <div  style="text-align:left; margin-left:62px">
        <font size="-2">posted by: <?php echo $row[1]; ?>
        </font>
        <font size="-3">(<?php echo $row[3]; ?>)
       	<br />email:<?php echo $row[2]; ?>
        </font>
        <br>
        </div>
        <div style="margin-left:60px" id="comment">
        Message :<br>
        <textarea wrap="hard" cols="28" rows="4"><?php echo $row[4]; ?></textarea>
        <div style="float:left" id="app<?php echo $row[0];?>"></div>
        <div style="float:right"> <input type="button" name="sub" value="Approve" onClick="approve('<?php echo $row[0];?>')"></div> 
        </div><br></div>
        
        <?php
	}?>
    <br>
	</div>
	<div id="tb2">
    <?php
    ?>
	<form action="approve.php" method="post" enctype="multipart/form-data">
	<?php
    while ($row=mysql_fetch_row($result3))
	{
		?><BR> 
        <div id="box">
        <div align="left" style="float:left; width:40px">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>" ><br>
        <img src="../upload/<?php echo $row['5'] ?>" width="60" height="80" />
        </div>
        <div  style="text-align:left; margin-left:62px">
        <font size="-2">posted by: <?php echo $row[1]; ?>
        </font>
        <font size="-3">(<?php echo $row[3]; ?>)
       	<br />email:<?php echo $row[2]; ?>
        </font>
        <br>
        </div>
        <div style="margin-left:60px" id="comment">
        Message :<br>
        
        <textarea wrap="hard" cols="28" rows="4"><?php echo $row[4]; ?></textarea>
        <div style="float:left" id="app<?php echo $row[0];?>"></div>
        <div style="float:right"> <input type="button" name="sub" value="Approve" onClick="approve('<?php echo $row[0];?>')"></div> 
        </div><br></div>
        <?php
	}?><br></div><?php 

}
else
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