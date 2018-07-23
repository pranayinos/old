<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php 
$time = new Main(); 
$batch=$_GET['batch'];
$newsRecord1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordsun = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordsun1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordmon = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordmon1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordtue = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordtue1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordwed = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordwed1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordthu = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordthu1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordfri = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordfri1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordsat = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordsat1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$day = new Main(); 

$newsRecord2 = $day->getdata('*',"time_table_weekdays","batch_id='$batch'", "","");
$record2 = $newsRecord2->getNextRecord();

$class= new Main();
$newsRecord3 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record3 = $newsRecord3->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $m  = $record3['mon'];
			  
               $pieces2 = explode(".", $m);
			   
	       $i=1;
		   $j=1;
		   $newsRecordmon = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($mon = $newsRecordmon->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $a[$k]=$record3['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}
		
		
		
		
$newsRecord4 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record4 = $newsRecord4->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $su  = $record3['sun'];
			  
               $pieces2 = explode(".", $su);
			   
	       $i=1;
		   $j=1;
		   $newsRecordsun = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($sun = $newsRecordsun->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $b[$k]=$record4['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		
		$newsRecord5 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record5 = $newsRecord5->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $tu  = $record5['tue'];
			  
               $pieces2 = explode(".", $tu);
			   
	       $i=1;
		   $j=1;
		   $newsRecordtue = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($tue = $newsRecordtue->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $c[$k]=$record5['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		
		$newsRecord6 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record6 = $newsRecord6->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $wed  = $record6['wed'];
			  
               $pieces2 = explode(".", $wed);
			   
	       $i=1;
		   $j=1;
		   $newsRecordwed = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($wed = $newsRecordwed->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $d[$k]=$record6['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		$newsRecord7 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record7 = $newsRecord7->getNextRecord())!==false)
		  {
		   // echo $record7['subject_name'];
			
			  $thu  = $record7['thu'];
			  
               $pieces2 = explode(".", $thu);
			   
	       $i=1;
		   $j=1;
		   $newsRecordthu = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($thu = $newsRecordthu->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $e[$k]=$record7['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		$newsRecord8 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record8 = $newsRecord8->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $fri  = $record8['fri'];
			  
               $pieces2 = explode(".", $fri);
			   
	       $i=1;
		   $j=1;
		   $newsRecordfri = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($fri = $newsRecordfri->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $f[$k]=$record8['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		$newsRecord9 = $class->getdata('*',"class_ruteen","batch_id='$batch'", "","");


while(($record9 = $newsRecord9->getNextRecord())!==false)
		  {
		   // echo $record3['subject_name'];
			
			  $sat  = $record9['sat'];
			  
               $pieces2 = explode(".", $sat);
			   
	       $i=1;
		   $j=1;
		   $newsRecordsat = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
		while(($sat = $newsRecordsat->getNextRecord())!==false)
	     {
             $k= $pieces2[$i]; 
			 $g[$k]=$record9['subject_name']; 
	               
			 $i++;
			 
			   // echo '...'.$m;
		}
		}		
		
		
		
     
		
		 
//$record3 = $newsRecord3->getNextRecord();
             
			
				  
               //  $su  = $record3['sun'];
				  
                 //$pieces1 = explode(".", $su);
				 
				 // $m  = $record3['mon'];
                 //$pieces2 = explode(".", $m);
				  
				 // $tu  = $record3['tue'];
				 
				 // $pieces3 = explode(".", $tu);
				  
				  //$wed  = $record3['wed'];
				  //$pieces4 = explode(".", $wed);
				  
				 // $thu  = $record3['thu'];
				  //$pieces5 = explode(".", $thu);
				  
				 // $fri  = $record3['fri'];
				 // $pieces6 = explode(".", $fri);
				  
				 // $sat  = $record3['sat'];
				  //$pieces7 = explode(".", $sat);
				 
				 
                 
				 
				
//echo $pieces[0]; 
//echo $pieces[1];
//echo $pieces[2];

?>

<div id="timetable">
 <h1><center>Timetable</center></h1>
  
<center> <input name="print" type="button" value="Print" onClick="window.print()" /></center>
<div id="fullbox">
  <table border="1" align="center" width="70%" id="table" cellspacing="0" >
    <tbody><tr>

      <td class="loader">
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
        &nbsp;</td><!--timetable_td_tl -->
      <td class="td-blank"></td>
      
  
	 <?php
	  
	  while(($record1 = $newsRecord1->getNextRecord())!==false)
	  {
	  if($record1['sl']=='Break')
	  {
	?>
     <td class="td"><div class="top"><?=$record1['sl']?></div></td>
      <?php
	  
	  }
	  else
	  {

	 ?>
        <td class="td"><div class="top"><?=$record1['start_time'].'-'.$record1['end_time']?></div></td>
      <?php
	  }
	  }
	  ?>
     
    </tr> 
    <tr class="blank">
      <td></td>
      <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
    </tr>
   <?php
   
   
       if($record2['sun']=='1')
	   {
	      
		  
         ?>      
				 
    
        <td><div class="name">SUN</div></td>
       
        <td class="td-blank"></td>
        
		 <?php
		 
         $i=1;
		 while(($sun1 = $newsRecordsun1->getNextRecord())!==false)
	      {
		  
		  
		   
		  if($sun1['sl']=='Break')
	       {
	        
      ?>
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject"> 
                  
                   Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            </td>
        <?php
	   }
	   else
	   {
	    
		if($b[$i]!="")
		{			  
		    
    ?>
       <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                  <?=$b[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			   <?php
			   }
			   else
			   {
		   ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                
				
                     
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                </td>

 <?php
 
}
 $i++;
}

}

?>
 </tr>
     
 <?php
}
       if($record2['mon']=='2')
	   {
	   
   				 //$m  = $record3['mon'];
                // $pieces2 = explode(".", $m);
				
		?>		 
      <tr>
        <td><div class="name">MON</div></td>
        
        <td class="td-blank"></td>
	
           <?php
		   
        $i=1;
		while(($mon1 = $newsRecordmon1->getNextRecord())!==false)
	     {
		   
		  
		  // echo $record3['mon'];
			  
				
		 
		  if($mon1['sl']=='Break')
	       {
	  
     ?> 
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
					                 </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                </td>
       
        <?php
	   }
	   else
	   {
	
		if($a[$i]!="")
		{		  
		    
         ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                    <?=$a[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			   <?php
			   }
			   else
			   {
			   ?>
        <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                  

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
 <?php
 
			   }
			   
			    $i++;
			   }
			  

}




?>
 </tr>


 <?php
}
       if($record2['tue']=='3')
	   {
      ?>  
      <tr>
        <td><div class="name">TUE</div></td>
       
        <td class="td-blank"></td>
     <?php
	 
          $i=1;
		while(($tue1 = $newsRecordtue1->getNextRecord())!==false)
	     {
		if($tue1['sl']=='Break')
	       {
	  
     ?> 
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                </td>
        <?php
	   }
	   else
	   {
		
       if($c[$i]!="")
		{		  
		    
        ?>  
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                    <?=$c[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			   <?php
			   }
			   else
			   {
			   ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                    
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
 <?php
}
 $i++;
}
}
?>
 </tr>
 <?php
}
       if($record2['wed']=='4')
	   {
	   ?>
 
      <tr>
        <td><div class="name">WED</div></td>
        
       
        <td class="td-blank"></td>
 
  <?php
 
         $i=1;
		while(($wed1 = $newsRecordwed1->getNextRecord())!==false)
	     {
		if($wed1['sl']=='Break')
	       {
	  
      ?>
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
              </td>
       <?php
	   }
	   else
	   {
		if($d[$i]!="")
		{		  
		    
    ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$d[$i]?>
               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			   <?php
			   }
			   else
			   {
    ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                </td>
 <?php
}
 $i++;
}
}
?>
 </tr>

 <?php
}
       if($record2['thu']=='5')
	   {
               
   ?>
      <tr>
        <td><div class="name">THU</div></td>
         
        <td class="td-blank"></td>
         <?php
       $i=1;
		while(($thu1 = $newsRecordthu1->getNextRecord())!==false)
	     {
		if($thu1['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                  </td>
        <?php
	   }
	   else
	   {
		
           if($e[$i]!="")
		{		  
		    
    ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$e[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			   <?php
			   }
			   else
			   {
			   ?>
               
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                  </td>
 <?php
}
 $i++;
}
}
?>
 </tr> 


 <?php
}
       if($record2['fri']=='6')
	   {
	  
?>
     <tr>
        <td><div class="name">FRI</div></td>
       
        <td class="td-blank"></td>
        
      <?php
	  
         $i=1;
		while(($fri1 = $newsRecordfri1->getNextRecord())!==false)
	     {
		if($fri1['sl']=='Break')
	       {
	  
      ?>
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
        <?php
	   }
	   else
	   {
	
    if($f[$i]!="")
		{		  
		    ?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                    <?=$f[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
			  <?php
			   }
			   else
			   {
			   ?>
               
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                 </td>
                  <?php
}
  $i++;
}
}
?>
</tr>

 <?php

}
       if($record2['sat']=='7')
	   {
	  ?>
	  
        <tr>
        <td><div class="name">SAT</div></td>
       
       
        <td class="td-blank"></td>
        <?php
          $i=1;
		while(($sat1 = $newsRecordsat1->getNextRecord())!==false)
	     {
		if($sat1['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     Break
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
                </td>
        <?php
	   }
	   else
	   {
		if($g[$i]!="")
		{		  
		    
         ?>
             
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$g[$i]?>

               </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
                <?php
			   
			   }
			   else
			   {
    ?>
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
               </td>
                <?php

}
$i++;
}
}
?>
    </tr>

 <?php

}
?>
    
 </tbody></table>
</div>

</body>
</html>
