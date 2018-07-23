<?php 
$exam_new= new Main(); 
$newsRecordSet = $exam_new->getdata('*',"exam_new","","","");
//update code ///////////////////////////////////////////////////////////////////////////////today 13-12-2012
//$news = new Main();
//$newsedit_id=$_GET[id];	

	
///////////////////////////////////////////////////////////////////////////////////////////////////////////


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
    <!-- end of side bar -->
      <div id="content">
      
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Grouping</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  
  <div id="application-list"> 




    
      <h4>Connect Exams</h4>
      <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
        <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
          
          <tbody><tr class="tr-head">
            <td class="col-1"><input id="chck1" name="chck1" onclick="check_all_or_none(1)" type="checkbox" value="yes"></td>
            <td class="col-2">
              Exam Group
            </td>
            <td class="col-3">
              Weightage(%)
            </td>
          </tr>
          <tr class="tr-blank"></tr>
          
      
				  <?php 
                  //$record[] = $newsRecordSet->getNextRecord();
                  //$record[exam_id];
                 $sum=0;
                 if(isset($_POST['commit'])) 
                {
				
				$count1=count($_POST["weightage"]);
				//echo $count1;
				for($j=0; $j<$count1; $j++)
				{
				
				$a[$j]=$_POST["weightage"][$j];
				//echo $a[$j].'..';
				}
				  $i=0;
                  while( ($record = $newsRecordSet->getNextRecord()) !== false )
   				 { 
				
				  $id=$record[exam_id];
				// echo '...'.$a[$i];
				 $sum=$sum+$a[$i];
                $post['exam_weightage'] =$a[$i];
                        
                           
                              if($exam_new->updateData($post,"exam_new","exam_id='$id'"))
                             {
                               $msg="Exam Weightage updated Succesfully";
                           // header("location:?page=exam_grouping&exam_id=$id&msg=$msg");			
                    }
                    else
                    {
                        $msg="Error :  Entry not done, Please check Values";
                       // header("location:?page=exam_grouping&id=$id&error=$msg");
                    }
					$i++;		
                }}
                  ?>
      
       <?php    while( ($record1 = $newsRecordSet->getNextRecord()) !== false )
   				 { ?>
          
            <tr class="tr-odd">
         
            
              <td class="col-1"><input checked="checked" class="right" id="check0" name="exam_grouping[exam_group_ids][]" onclick="set_weightage(this,1)" type="checkbox" value="134"></td>
              <td class="col-2"><?=$record1['exam_name']?></td>
              
                <td class="col-3"><input class="total-box" id="weightage" name="weightage[]"  type="text"></td>
                
              
            </tr>
  <?PHP } ?>              
          
           <!-- <tr class="tr-even">
              
              
              <td class="col-1"><input checked="checked" class="right" id="check1" name="exam_grouping[exam_group_ids][]" onclick="set_weightage(this,1)" type="checkbox" value="135"></td>
              <td class="col-2">Exam 2</td>
              
                <td class="col-3"><input class="total-box" id="weightage1" name="weightage[]" onchange="check_weightage(this,1)" type="text" value="50.0"></td>
                
              
            </tr>-->
            
          
          <tr class="tr-blank"></tr>
          <tr class="tr-head">
            <td class="col-4" colspan="2">
              Total Weightage
            </td>
             
          
            <td class="col-3">
            


              <label for="total" id="tot">
             <?php  $r=$record['exam_weightage'];
			 echo $e= $sum;?>
             </label>
            </td>
           
          </tr>
        </tbody></table>
    
    
    
    
    


        <input class="submit_button" name="commit" type="submit" value="Save">
      </form>
    


    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>