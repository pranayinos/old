<?php
        require "db.php";
		$odd_q="SELECT COUNT( * ) FROM posts WHERE (ID %2) <> 0 AND approved=1 ";
		$even_q="SELECT * FROM posts WHERE (ID %2) = 0 AND approved=1 ";

		$odd_Res=mysql_query($odd_q, $res);
		$even_Res=mysql_query($even_q, $res);
		
		$odd_R=mysql_fetch_row($odd_Res);
		$even_Rows=mysql_num_rows($even_Res);
		
		
		$odd_Rows=$odd_R[0];
		echo $odd_Rows;
		echo "<br>";
		echo $even_Rows;
		if($odd_Rows == $even_Rows)
		{
			$L1=$L2=$odd_Rows-2;
			//echo $L1."  ".$L2;
		}
		else
		{
			if($odd_Rows > $even_Rows)
			{
				$L1=$odd_Rows-3;
				$L2=$even_Rows-1;
			}
			else
			{
				$L1=$odd_Rows-1;
				$L2=$even_Rows-3;
			}
		}
		echo "<BR>".$L1."  ".$L2;
		$odd_Sel="SELECT * FROM posts WHERE (ID %2) <> 0 AND approved=1 LIMIT $L1 ";
		$even_Sel="SELECT * FROM posts WHERE (ID %2) = 0 AND approved=1 LIMIT $L2 ";
		
		$odd=mysql_query($odd_Sel, $res);
		$even=mysql_query($even_Sel, $res);
		
		
		$even_1=mysql_fetch_row($even);
		
		while($odd_1=mysql_fetch_row($odd))
        {
            ?> <div style="margin-left:60px" id="comment">
        Message :<br>
        <textarea wrap="hard" cols="28" rows="4"><?php echo $odd_1[4]; ?></textarea>
        <div style="float:left" id="app<?php echo $odd_1[0];?>"></div>
        <div style="float:right"></div> 
        </div><br>
<?php        }

while($odd_1=mysql_fetch_row($odd))
        {
            ?> <div style="margin-left:60px" id="comment">
        Message :<br>
        <textarea wrap="hard" cols="28" rows="4"><?php echo $odd_1[4]; ?></textarea>
        <div style="float:left" id="app<?php echo $odd_1[0];?>"></div>
        <div style="float:right"></div> 
        </div><br>
<?php        }
        
?>