<?php 
$student = new Main(); // create a new news object
echo $a=$_GET[batch_id];
$field = $student->getdata('*',"student","id='$a'","", "");// set newsRecordSet to a 

?>
 <h1><center>
     FEE DUES SCHOOL
  </center></h1>
  <h3><center>
    Fee Student details
  </center></h3>
  <div id="app-back-button">
   <!-- <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>-->
   <center> <input name="print" type="button" value="Print" onClick="window.print()" /></center> </div>
</div><center>
<table width="450" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="row">&nbsp;Sl No:</th>
    <td>&nbsp;1</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;Particulars</th>
    <td>&nbsp;cc</td>
  </tr>
  
  <tr>
    <th scope="row">&nbsp;Amount</th>
    <td>&nbsp;cc</td>
  </tr>
</table>
