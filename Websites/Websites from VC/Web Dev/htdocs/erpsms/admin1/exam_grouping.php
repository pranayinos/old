<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Grouping</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
    <p class="flash-msg"> Selected exams grouped successfully. </p>
  

  <div class="box">
    <h4>Connect Exams</h4>
      <div id="list_content">
      <div id="list">
         

          <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU="></div>
            
              <div class="name_listodd">
                
                
                  <li><label><input checked="checked" id="exam_grouping_exam_group_ids_" name="exam_grouping[exam_group_ids][]" type="checkbox" value="8"><div class="att_list_names"> Exam1</div></label></li>
                
              </div>
            

            <input class="submit_button" name="commit" type="submit" value="Save">
          </form>

        


      </div>
    </div>    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
    