<?php
$expence1 = new Main(); // create a new news object
	
		$expencecatSet1 = $expence1->getdata('*',"fin_transaction","active=1","", "");
		$expcatrecord1 = $expencecatSet1->getNextRecord();


?>



<!--------- Start head ---------------->
  </head>
  <body>
        
   
      <div id="content" style="text-align:center" style="text-decoration:blink"> 
<div id="content-header">
  <h1>Transactions</h1>
  <h3>Monthly Transactions Reports</h3>
  <div id="app-back-button"></div>
</div>
<div id="inner-tab-menu">
  <ul>
    <input name="print" type="button" value="Print" onClick="window.print()" />
  </ul>
</div>
<div id="page-yield">
  <div class="box">
  
</div>
</div>


 </div>


<div id="page-yield">


 <table id="listing" align="center" width="80%" height="80%" cellpadding="1" cellspacing="1" border="1">
    
      <tbody><tr align="center" class="tr-head">
        <th>Sl  no.</th>
        <th>Particulars</th>
        <th>Expenses(Rs )</th>
        <th>Income(Rs )</th>
        <th>Date</th>
      </tr>
    <?php
	 
	$exp=new Main();
	  $income=new Main();
	$expence1 = new Main(); // create a new news object
	
		$expencecatSet1 = $expence1->getdata('*',"fin_transaction","active=1","", "");
		$expcatrecord1 = $expencecatSet1->getNextRecord();
        $tex=0;
		$tin=0;
	
    
      $month=$_GET['month'];
	
	  $year=$_GET['year'];
      
	 
 	
	$i=0;
	
	
	
	  while(($expcatrecord1 = $expencecatSet1->getNextRecord())!==false)
	  {
	  $i++;
	
	  $m=date("m", strtotime($expcatrecord1['tr_date']));
	  $y=date("y", strtotime($expcatrecord1['tr_date']));
	  
	   
		if($m==$month && $y==$year)
		{
		
		 
   	 	 $fid=$expcatrecord1['tr_id'];
	 	 $newsRecordSet = $income->getdata('tr_amt',"fin_transaction,finance_category","finance_category.income='1' and finance_category.finance_id=fin_transaction.tr_category and fin_transaction.tr_id='$fid' and fin_transaction.active=1","", "");
	  $in=$newsRecordSet->getNextRecord();
	
	  
	  
	   $newsRecordSet1 = $exp->getdata('tr_amt',"fin_transaction,finance_category","finance_category.income='0' and finance_category.finance_id=fin_transaction.tr_category and fin_transaction.tr_id='$fid' and fin_transaction.active=1","", "");
	  $ex=$newsRecordSet1->getNextRecord();
	 $tex=$tex+$ex['tr_amt'];
	  
	  $tin=$tin+$in['tr_amt'];
      ?> 
     
  <tr class="tr-blank"></tr>
  
        <tr align="center" class="tr-odd">
          <td class="col-1"><?=$i?></td>
          
            <td class="col-2">    <?=$expcatrecord1['tr_title'];?> </        td></td>
          
          <td class="col-3" ><?=$ex['tr_amt'];?></td>
          <td><?=$in['tr_amt'];?> </td>
          <td class="col-3"> <?=$expcatrecord1['tr_date'];?> </td>
        </tr>
 
      <?php
	  }
	  
	 
	  
	  }
	  
	  ?>
      <tr class="">
        <td></td>
        <th>Grand Total</th>
        <th><?=$tex;?>.(Rs)</th>
        <th><?=$tin;?>.(Rs )</th>
        <td></td>
      </tr>
	
	

     
   
  </tbody></table>

  <br>
  <br>
 
  

</div>
 </div>

      <div class="extender"></div>
    </div>
      <div class="extender"></div>
    </div>


<!-- footer -->
 
           