<?php
session_start();
$_SESSION[tim]=1;
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;

header("location:quiz2.php");
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

<?php
include("header.php");
?>
<script language ="javascript" >//CODE OF THE TIMER 
        var tim;
       
        var min = 0;
        var sec = 20;
        var f = new Date();
        function f1(a) {
            
			if(a==1)
			document.getElementById("starttime").innerHTML=<?php echo $_SESSION[tim];?>;
			{
				f2();
            document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + ":" + f.getMinutes();
			}
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is " + sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    /*if (parseInt(min) == 0) {*/
                        clearTimeout(tim);
						location.href = "timeout.php";
                    //}
				/*else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
						}*/
                }
               
            }
        }
    </script>
</head>

<body onLoad="f1(<?php $_SESSION[tim]; ?>)">
<form id="form1" runat="server" style="background-color:#000033">
    <div>
      <table width="20%" height="10%" align="center">
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
				
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	$_SESSION[trueans]=0;
	$_SESSION[wrongans]=0;
	$_SESSION[level]=1;
	$_SESSION[q_arr][0]=0;
	$_SESSION[tim]=1;
}
else
{	
//------------------------------------------------------------------------------------------------------------------------------------
		$q_in_level=3;				//change this to change no of questions in a level
//------------------------------------------------------------------------------------------------------------------------------------
		$q_i= $_SESSION[c_q];
		$queryy="SELECT true_ans FROM mst_question WHERE que_id=$q_i "; 
		$rs=mysql_query($queryy,$cn) or die(mysql_error());
		$c_ans=mysql_result($rs,0);

		if($submit=='Next Question' && isset($ans))
		{
				
				
				if($ans==$c_ans)
				{
					$_SESSION[trueans]=$_SESSION[trueans]+1;
					$_SESSION[qn]=$_SESSION[qn]+1;
					if(($_SESSION[qn]%$q_in_level)==0)
					{
						$_SESSION[level]=$_SESSION[level]+1;
					}
				}
				else
				{
					?><script>
					location= 'wrong.php';
					</script><?php
					$_SESSION[wrongans]=$_SESSION[wrongans]+1;
					$_SESSION[qn]=$_SESSION[qn]+1;
				}
				
				
				
		}
		else if($submit=='Get Result' && isset($ans))
		{
				
				if($ans==$c_ans)
				{
					$_SESSION[trueans]=$_SESSION[trueans]+1;
					$_SESSION[qn]=$_SESSION[qn]+1;
					/*if(($_SESSION[qn]%$q_in_level)==0)
					{
						$_SESSION[level]=$_SESSION[level]+1;
					}*/
					echo "<h1 class=head1> Result</h1>";
				
				echo "<Table align=center><tr class=tot><td>Total Questions<td> $_SESSION[qn]";
				echo "<tr class=tans><td>Correct Answers<td>".$_SESSION[trueans];
				//$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answers<td> ". $_SESSION[wrongans];
				echo "<tr class=fans><td>Maximum Level = <td>".$_SESSION[level]; 
				echo "</table>";
				$qrry= "SELECT test_name FROM mst_test WHERE test_id=$_SESSION[tid]";
				$test=mysql_query($qrry,$cn) or die(mysql_error());
				$test_n=mysql_result($test,0);
				$user=$_SESSION['user_id'];
				$query="INSERT INTO `exam`.`answer` (`user_id`, `level`, `c_ans`, `test_name`) VALUES ('$user', '$level', '$_SESSION[trueans]', '$test_n')"; 
				mysql_query($query,$cn) or die(mysql_error());
				
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				$_SESSION[tim]=0;
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				//unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				//unset($_SESSION['q_arr']);
				unset($_SESSION[level]);
				exit;
				}
				else
				{
					?>
					<script>
					location= 'wrong.php';
					</script><?php
					
					$_SESSION[wrongans]=$_SESSION[wrongans]+1;
					$_SESSION[qn]=$_SESSION[qn]+1;
				}
		}
				
				
		
}


//-------------------------------------- listing questions already displayed in "$srt" -----------------------------------------------				
				$str="(";
				$arrlength=count($_SESSION['q_arr']);
				for($x=0;$x<$arrlength;$x++)
 				 {
 				 $str=$str.$_SESSION['q_arr'][$x];
 				 if($x<($arrlength-1))
 					 {
  						$str=$str.", ";
 					 }
 				 }
 					$str=$str.")";
//------------------------------------------------- listing complete -----------------------------------------------------------------

//------------------------------------------------ making query string ---------------------------------------------------------------					
				$qry="SELECT * FROM mst_question WHERE test_id = $_SESSION[tid] AND level=$_SESSION[level] AND que_id NOT IN $str";    
				//echo $qry;
				$rs=mysql_query($qry,$cn) or die(mysql_error()); //executing
//------------------------------------------------------------------------------------------------------------------------------------

$q_a=$_SESSION[qn];
$q=mysql_num_rows($rs)-1;//$q stores number of rows returned by querry -1 for random number generation
$random= rand(0,$q);
mysql_data_seek($rs,$random);
$row= mysql_fetch_row($rs); 
$_SESSION['q_arr'][$q_a]=$row[0];
$_SESSION[c_q]=$row[0];
echo "<form name=myfm method=post action=quiz2.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

$qry2="SELECT * FROM mst_question WHERE test_id = $_SESSION[tid] AND que_id NOT IN $str";
$rss=mysql_query($qry2,$cn) or die(mysql_error());
if(mysql_num_rows($rss)>1)
echo "<tr><td><input type=submit name=submit value='Next Question' ></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>
<script>
function funcheck(qno)
{
alert(qno);
}
</script>