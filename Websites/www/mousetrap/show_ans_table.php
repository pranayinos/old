<body><center><div style="font: xx-small;"><?php
    $link=mysql_connect("localhost","root","");
    echo "link value is : ".$link."<br>";
    if(!$link)
    {
        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        echo "Connected to My Sql....."."<br>";       
    }
    if(!mysql_select_db("inos"))
    {
        echo "Cannot conect to database....";
    }
    else
    {
        echo "Conected to database....";
        $qr="select * from ans";
        $execute=mysql_query($qr);
?></div>

        
        <hr />
        <center><h1 style="color: olive">Showing Login Table</h1>
        <hr />
        <br />
        <br />
        <table border="1"   style="table-layout: auto"  align="center">
        <tr><td>Roll No.</td><td>Name</td><td>Ans 1</td><td>Ans 2</td><td>Ans 3</td><td>Ans 4</td>
        <td>Ans 5</td><td>Ans 6</td><td>Ans 7</td><td>Ans 8</td><td>Ans 9</td><td>Ans 10</td>
        <td>Ans 11</td><td>Ans 12</td><td>Ans 13</td><td>Ans 14</td><td>Ans 15</td></tr>
<?php
        while($row=mysql_fetch_row($execute))
        {
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
            <td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td>
            <td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td><td>$row[16]</td></tr>";
        }
        
?>
        </table></center>
<?php
}
    mysql_close($link);
?>
</center></body>