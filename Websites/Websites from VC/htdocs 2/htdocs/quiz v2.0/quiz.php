<?php
session_start();
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
 <script language ="javascript" >//CODE OF THE TIMER 
        var tim;
       
        var min = 1;
        var sec = 60;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + ":" + f.getMinutes();
             
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is :"+min+" Minutes ," + sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
							location.href = "timeout.php";
                    }
				else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
						}
                }
               
            }
        }
    </script>
</head>
</head>

<body onLoad="f1()">
<form id="form1" runat="server" style="background-color:#000033">
    <div>
      <table width="100%" height="10%" align="center">
        <tr>
          <td colspan="2">
           <!-- <h2>Showing Timer </h2>-->
          </td>
        </tr>
        <tr>
          <td align="right" style="color:#99FF00" style="font-family:Verdana, Arial, Helvetica, sans-serif">
            <div id="starttime"></div>
            <div id="endtime"></div>
            <div id="showtime"></div>
          </td>
        </tr>
        <tr>
          <td>
         
            </td>
        </tr>
      </table>
      <br>

 </div>
    </form>
<?php
include("header.php");


?>
</body>
</html>