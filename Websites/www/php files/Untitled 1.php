 <?php
include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
$query = "SELECT * FROM login";
$rs = mysql_query($query);
$int_Col = 1;
echo("<table>");
while($row = mysql_fetch_array($rs))
{
    if ($int_Col == 1) {
       echo("<tr>");
                        }

   foreach($con->query($qr) as $row)
    {
        echo "<option value='$row[0]'>$row[0]</option>";
    }
    $con=null;  

    if ($int_Col == 3) { 
        echo("</tr>");
        $int_Col = 1;
    } else {
      $int_Col++;
    }
}

if ($int_Col > 1) { 
   echo("<td colspan='". (3 - $int_Col) ."'>&nbsp;</td></tr>");
}
echo("</table>");
//?>