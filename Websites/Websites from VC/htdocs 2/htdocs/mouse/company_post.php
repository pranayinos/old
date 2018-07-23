<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="hpeduction" />
    <link  rel="icon" type="image/png" href = "dice.png"/>
	<title>Inos Jobs - Companies login </title>
<script type="text/javascript" src="j_validate.js">
</script>
<style type="text/css">
a:hover{
    background-color: orange;
    
}
a{
  color: #6F1702;
    
    text-decoration: none;
}
</style>
</head>
<body >

<script language='JavaScript' type='text/JavaScript'>
//Made by Pranay Soni
first3=24;
function fifteenth(sixteenth){seventeenth = document.body.scrollLeft+event.clientX;eighteenth = document.body.scrollTop+event.clientY;nineteenth = event.clientX;twentieth = event.clientY;first2(seventeenth,eighteenth)}document.onmousemove = fifteenth;
if (document.all){with (document){write('<div id="second2" style="position:absolute;top:0px;left:0px">');write('<div style="position:relative;width:2px;height:2px;background:#ffdfff;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:2px;height:2px;background:#f4f000;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:2px;height:2px;background:#ffa030;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:2px;height:2px;background:#ff50ff;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:2px;height:2px;background:#00fc00;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:2px;height:2px;background:#0f00ff;font-size:2px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#Fc0000;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#ff0fff;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#ffd000;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#f0a000;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#ff004f;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#003f00;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:3px;height:3px;background:#000cff;font-size:3px;visibility:visible"></div>');write('<div style="position:relative;width:4px;height:4px;background:#F00000;font-size:4px;visibility:visible"></div>');write('</div>');}}second3=first3+6; third3=first3+second3; fourth3=first3+second3+third3; fifth3=fourth3/third3*first3; sixth3=third3*first3/12*second3; seventh3=first3+second3/fifth3-16*fourth3; eighth3=sixth3*(first3-5)/third3+fourth3; ninth3=eighth3/seventh3+first3*third3-fourth3;tenth3=(ninth3+first3/third3*fourth3+second3*fifth3)/sixth3+eighth3-ninth3-1;eleventh3=Math.floor(tenth3)   ;twelfth3=eleventh3-58;var third2 = 300;var fourth2 = 300;var fifth2 = 10/25;var sixth2 = twelfth3;var fifteenth3 = twelfth3;var sixteenth3 = twelfth3;
function first2(seventeenth3,eighteenth3){fifteenth3 = seventeenth3;sixteenth3 = eighteenth3;}
function nineteenth3() {
if (document.all){ third2 = window.document.body.offsetHeight/6; fourth2 = window.document.body.offsetWidth/6;}
if (document.all){ var twentieth3; 
for ( twentieth3 = 0 ; twentieth3 < second2.all.length ; twentieth3++ ) {  second2.all[twentieth3].style.top = sixteenth3 + third2*Math.sin((sixth2 + twentieth3*4)/12)*Math.cos(400+sixth2/300);second2.all[twentieth3].style.left = fifteenth3 + fourth2*Math.sin((sixth2 + twentieth3*3)/10)*Math.sin(sixth2/200);}}sixth2+= fifth2;setTimeout('nineteenth3()', 11);}nineteenth3();
</script>
<div style="height: 125px; width:1024; background-repeat: no-repeat; margin-left: 120px;">
<img src= "head.jpg"/></div>
<div style="background-color: #FFBB77;margin-left: 120px;  height: 19px; width: 1024px;" align="center">
 <a href=".\home.php">|&nbsp; &nbsp; &nbsp; &nbsp; Home &nbsp; &nbsp; &nbsp; &nbsp;|</a>
 <a href=".\sign_up_form.php">|&nbsp; &nbsp; &nbsp;Submit Resume&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\company_post.php">|&nbsp; &nbsp; &nbsp; &nbsp; Company Corner &nbsp; &nbsp; &nbsp; &nbsp;|</a>
 <a href=".\help.htm">|&nbsp; &nbsp; &nbsp; &nbsp;  Help &nbsp; &nbsp; &nbsp; &nbsp;|</a>
 <a href=".\about_us.htm">|&nbsp; &nbsp; &nbsp; &nbsp; About Us &nbsp; &nbsp; &nbsp; &nbsp;|</a>
</div>
<?php
if(isset($_POST['sub']))
{
    
    $link=mysql_connect("localhost","root","");
    echo "<br>"."<br>"."link value is : ".$link."<br>";
    if(!$link)
    {
        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        echo "<br>"."<br>"."Connected to My Sql....."."<br>";       
    
        if(!mysql_select_db("ankit"))
        {
            echo "Cannot conect to database....";
        }
        else
        {
            echo "<br>"."Conected to database....";
            $qr="insert into company_post values ('$_POST[company_name]','$_POST[job_field]','$_POST[sal]')";
            $execute=mysql_query($qr,$link);
            if($execute)
            {
               
                echo "<br>"."Values succesfully <b>Inserted</b>";
               
            }
            else
            {
                echo "<br>"."opps...!!!"."<br>"."Values not inserted";
            }
        }
    }
    mysql_close($link);



}
else
{
?>

<body >
<div style= "margin-left: 120px; width: 1024px; align:center; background-color: #FFD6C1;">
<h1 align="center" style="color:#FF6600">Company Post</h1>
<hr  width="80%" align="center" style="height: 3px;color: red;" />
<br />
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
<table width="700" border="0" align="center">
<tr><td>Company Name:</td><td align="center"><input type="text" align="center" name="company_name"/></td></tr>
<tr><td>Select the field for job:</td><td align="center"><select name="job_field">
<option value="0">select</option>
<option value="software">software</option>
<option value="hardware">hardware</option>
<option value="manager">manager</option>
<option value="team leader">team leader</option>
</select></td></tr>
<tr><td>Name of Post:</td><td align="center"><input type="text" align="center" name="n3"/></td></tr>
<tr><td>Salary Offered(in Rs.):</td><td align="center"><input type="text" align="center" name="sal"/></td></tr>
<tr><td colspan="2" align="center"><input  type="submit" name="sub" value="Post.."/></td></tr>
</table>
</form>
</div>
</body>
<?php
}

?>
<div  align="center "style="margin-top: 10px; margin-left:120px;background-color: #F88216; color: #FFC993; font-size: xx-small;width: 1024px;">
<center><u>Designed By : Pranay Soni & Ankit Kumar (as hpes project)</u> 
<br/>Best viewed on  Mozilla Firefox 8 and higher<br/>At 1366 &times; 768 resolution</center></div>


</body>
</html>