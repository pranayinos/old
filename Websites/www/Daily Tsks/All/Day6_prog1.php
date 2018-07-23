<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

echo "<table>";
for($r=0;$r<256;$r+=20)
{
    echo "<tr>";
    for($g=0;$g<256;$g+=20)
    {
        echo "<td>";
        for($b=0;$b<256;$b+=20)
        {
            $code=$r.$g.$b;
            echo "<font color ='rgb($r,$g,$b)'> &nbsp;&nbsp;&reg;&copy;&copy;&copy;&copy;&reg;&nbsp;&nbsp;</font>";
        }
    }
}
echo "</table>";
?>
 