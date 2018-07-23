<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="hpeduction" />
    <link  rel="icon" type="image/png" href = "dice.png"/>
	<title>Mousetrap - Task 8 </title>
<script type="text/javascript" src="j_validate.js">
</script>
<style type="text/css">
a:hover{
    background-color: #ECFECB;
    
}
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
if(isset($_GET['sub']))

{   /*
    if(isset($_COOKIE['roll']))
    {
    //echo $_GET['num'];
    //echo "fuck ya!!";
    $ans = $_GET['num'];
    $roll=$_COOKIE['roll'];
    
    //echo "<br>"."<br>"."Session id : " .$_COOKIE['roll']."<br>";
    $link=mysql_connect("localhost","root","");
    //echo "<br>"."<br>"."link value is : ".$link."<br>";
    if(!$link)
    {
      //  echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        //echo "<br>".""."Connected to My Sql....."."<br>";       
    
        if(!mysql_select_db("inos"))
        {
          //  echo "Cannot conect to database....";
        }
        else
        {
            //echo "<br>"."Conected to database....";
            $qr="UPDATE ans SET a5='$_GET[num]' WHERE roll='$roll'";
            $execute=mysql_query($qr,$link);
            if($execute)
            {
                ?>
                <hr />
                <?Php
              //  echo "<br>"."Values succesfully <b>Inserted</b>";
            }
        }
    }
    }
    else {header('location:home.php');}
*/    
?>    
<div style="height: 125px; width:1024; background-repeat: no-repeat;">
<img src= "head.jpg"/>
<div align="center" style="border: black; border-style: groove; height: 200px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #008000"></br>Your Answer Has Been Submitted Now Go <a href="task_9.php">Back</a> and Try Next Question</h1>
<hr />
</div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="2" direction="right" > <font size="36"> Cyber Creed - MouseTrap </font></marquee></div>
<div style="margin-top: 10px; background-color: #AAFB31; color:#000000; font-size: x-small;width: 1024px;">
<u>Designed By : Pranay Soni & Ankit Kumar at BIT Deoghar</u> 
<br/>Best viewed on  Mozilla Firefox 8 and higher<br/>At 1366 &times; 768 resolution</center></div>    
<?php 
}
else
{
 
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
<div style="background-color:#AAFB31; height: 19px; width: 1030px;" align="center">
  <!--<a href=".\home.php">|Home |</a>-->
 <a href="task_1.php">| Task 1  |</a>
 <a href="task_2.php">| Task 2 |</a>
 <a href="task_3.php">| Task 3 |</a>
 <a href="task_4.php">| Task 4 |</a>
 <a href="task_5.php">| Task 5 |</a>
 <a href="task_6.php">| Task 6 |</a>
 <a href="task_7.php">| Task 7 |</a>
 <a href="task_8.php">| Task 8 |</a>
 <a href="task_9.php">| Task 9 |</a>
 <a href="task_10.php">| Task 10 |</a>
 <a href="task_11.php">| Task 11 |</a>
 <a href="task_12.php">| Task 12 |</a>
 <a href="task_13.php">| Task 13 |</a>
 <a href="task_14.php">| Task 14 |</a>
 <a href="task_15.php">| Task 15 |</a>

 </div> 
<div align="center" style="border: black; border-style: groove; height: 200px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #008000">Task 8</h1>
<hr  width="80%"/>
<b></b>
Copy the file "task6.txt" on desktop to a folder named "task8" in "c: drive"

</br></br>Best of luck...  :-)
</div>
<div style="margin-top: 10px; margin-left: 120px;width: 1024px;"> <marquee scrollamount="2" direction="right" > <font size="36"> Cyber Creed - MouseTrap </font></marquee></div>
<div style="margin-top: 10px; background-color: #AAFB31; color:#000000; font-size: x-small;width: 1024px;">
<u>Designed By : Pranay Soni & Ankit Kumar at BIT Mesra</u> 
<br/>Best viewed on  Mozilla Firefox 8 and higher<br/>At 1366 &times; 768 resolution</center></div>
<?php } ?>
</center>
</body>
</html>