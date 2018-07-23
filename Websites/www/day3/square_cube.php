

<table bgcolor="brown"cellpadding="12" cellspacing="2"border="6" align="center">
<tr>
<td colspan="3">Square and Cube Table </td>

</tr>

<tr>


<th bgcolor="silver" align="left">Number</th>
<th bgcolor="silver">Square</th>
<th bgcolor="silver">Cube</th>
</tr>
<?php
for($i=1;$i<=10;$i++)
{
    ?>
    
    <tr bgcolor="purple"align="right">
    <td><?php echo $i ?></td>
    <td><?php echo sq($i); ?></td>
    <td><?php echo cube($i); ?></td></tr>
 <?php   
    
}

?>
</table>
<?php


function sq($i)
{
    return(($i*$i));
}
function cube($j)
{
    return(($j*$j*$j));
}
?>