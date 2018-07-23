<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="hpeduction" />
    <link  rel="icon" type="image/png" href = "dice.png"/>
	<title>Mousetrap - Task 1 </title>
<script type="text/javascript" src="j_validate.js">
</script>
<style type="text/css">
a:hover{
    background-color: #ECFECB;
    
}0
a{
  color: #6F1702;
    
    text-decoration: none;
}
</style>
</head>
<body >
<center>
<?php 
include_once("db.php");


function check()
{
    
    
    if (isset($_['u_name'])&&isset($_post['u_pass']))
    {
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];
        $link=mysql_connect($SERVER,$USER,$PASSWORD);
    if(!$link)
    {
        return false;
    }
    if(!mysql_select_db($DATABASE))
    {
        return false;
    }
    $qr="Select * from sign_up where user_name='$uname' and password='$upass'";
    $result=mysql_query($qr,$link);
    if(mysql_affected_rows()>0)
    {
        return true;
        window.location (".\profile.php");
    }
    else
    {
        return false;
    }
    }    
    
    else 
    {
        echo "<a herf=home.html>Invalid user name or password</a>";
    }

    }

?>
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
<div style="height: 125px; width:1024; background-repeat: no-repeat;">
<img src= "head.jpg"/>
</div>
<div style="background-color: #FFBB77; height: 19px; width: 1024px;" align="center">
 <a href=".\task_1.php">|&nbsp; &nbsp; &nbsp;Task 1&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_2.php">|&nbsp; &nbsp; &nbsp;Task 2&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_3.php">|&nbsp; &nbsp; &nbsp;Task 3&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_4.php">|&nbsp; &nbsp; &nbsp;Task 4&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_5.php">|&nbsp; &nbsp; &nbsp;Task 5&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_6.php">|&nbsp; &nbsp; &nbsp;Task 6&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_7.php">|&nbsp; &nbsp; &nbsp;Task 7&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_8.php">|&nbsp; &nbsp; &nbsp;Task 8&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_9.php">|&nbsp; &nbsp; &nbsp;Task 9&nbsp; &nbsp;  &nbsp;|</a>
 <a href=".\task_10.php">|&nbsp; &nbsp; &nbsp;Task 10&nbsp; &nbsp;  &nbsp;|</a>
</div>
<div align="center" style="border: black; border-style: groove; height: 200px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #A50100;">About Mousetrap.....</h1>
<hr  width="80%"/>
<b>Welcome to event Mousetrap....</b>
<br />
We offer the best Job Offers offered by the companies...
<br />
Here most reputed company as you can see at the bottom post there job offers in this site.
<br />
So, you can avail to those offers just by submitting your resume and logging in..
<br />
Best of luck...  :-)
</div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="2" direction="right" > <img src="8628.jpg"> &nbsp; <img src="87291.gif"> &nbsp; <img src="52994.gif"> &nbsp; <img src="47412.jpg"> &nbsp; <img src="21016.gif"> </marquee></div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="5" direction="left"> <img src="75638.gif"> &nbsp; <img src="newhitachi_88x31.gif"> &nbsp; <img src="hdfc.gif" height="31" > &nbsp; <img src="Atkinslogo_88x31.jpg"> &nbsp; <img src="synechron.gif" height="31" > </marquee></div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="3"direction="right"> <img src="ericsonlogo_88x31.jpg"> &nbsp; <img src="ibm.gif" height="31"> &nbsp; <img src="infojan10new.gif" height="31" > &nbsp; <img src="HCL.jpg"> &nbsp; <img src="Juniper_88x31.gif" height="31" > </marquee></div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="4"direction="left"> <img src="L&TInfotec.gif"> &nbsp; <img src="LNT_88x31.gif"> &nbsp; <img src="mcafee.gif" height="31" > &nbsp; <img src="bc.jpg"> &nbsp; <img src="tcs.jpg" height="31" > </marquee></div>
<div style="margin-top: 10px; background-color: #F88216; color: #FFC993; font-size: xx-small;width: 1024px;">
<u>Designed By : Pranay Soni & Ankit Kumar (as hpes project)</u> 
<br/>Best viewed on  Mozilla Firefox 8 and higher<br/>At 1366 &times; 768 resolution</center></div>

</center>
</body>
</html>