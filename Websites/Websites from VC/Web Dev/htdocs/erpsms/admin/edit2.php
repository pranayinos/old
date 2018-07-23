<?php
$subject = new Main(); // create a new news object
 $batch =$_GET['batch'];
$newsrecord = $subject->getdata('*',"subject","subject_batch_code='$batch'","subject_name DESC", "50"); 



$time = new Main(); 
$batch=$_GET['batch'];
$newsRecord1 = $time->getdata('*',"time_setting","batch_id='$batch'", "","");

$newsRecordsun = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordmon = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordtue = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordwed = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordthu = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordfri = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$newsRecordsat = $time->getdata('*',"time_setting","batch_id='$batch'", "","");
$day = new Main(); 

$newsRecord2 = $day->getdata('*',"time_table_weekdays","batch_id='$batch'", "","");
$record2 = $newsRecord2->getNextRecord();

if(isset($_POST['commit'])) // If the submit button was clicked
    {
               $cols['batch_id'] =$batch;
			   $cols['emp_name'] =$_POST['emp'];
			   $cols['subject_name'] =$_POST['subject'];
			   $cols['day_comb'] =$_POST['ch'];
			   $cols['pr_comb'] =$_POST['ch'];	
			  
                 if($subject->Inserttable($cols,"class_ruteen"))
                  {
				    $msg="Record Added Succesfully";
				//header("location:?page=admission&msg=$msg");	
				    header("location:?page=edit2&msg=$msg");			
		          }
		         else
		          {
			        $msg="Error :  Entry not done, Please check Values";
			        header("location:?page=edit2&error=$msg");
		          }		
    }





?>
   
  
   
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/edit2.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
<script type="text/javascript">
	
// <!-- Ajax select data -->
function showemp(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;
	//alert(a);
   document.getElementById("emp").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
     
	}
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=timetable_view_div&subject1="+str,true);
xmlhttp.send();
}
</script>


  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
     <?php /*?> <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar --><?php */?>
      <div id="fullcontent"> 
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
  <h1>Timetable</h1>
  <h3>Edit - 10 - 2010 B </h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<script type="text/javascript">

var selected_divs = new Array();

function update_selected_divs(id) {
  var exists_in_list = 0;
  for (x in selected_divs)
    if(id == selected_divs[x]){
      exists_in_list = 1;
      selected_divs.splice(x, 1)
      $('drop_' + id).className = "drop";
    }
  if(!exists_in_list){
    $('drop_' + id).className = "selected_div";
    selected_divs.push(id);
  }
}

function clear_selected_divs() {
  selected_divs = [];
}

function make_ajax_calls(tte_id, emp_sub_id){
    if (selected_divs.length == 0) {
        new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
    }
    else if (selected_divs.length == 1) {
        new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
        if (selected_divs[0] == tte_id) selected_divs.pop();
    }
    else {
        var exists_in_list = 0;
        for (x in selected_divs)
            if(tte_id == selected_divs[x])
              exists_in_list = 1;
        if (exists_in_list) {
            tte_list = selected_divs.join(',');
            new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_list + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
            selected_divs = [];
        }
        else
            new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
    }
}
</script>
<div id="fullpage-yield">
  <div id="loadingmsg"></div>
  <div class="generate">
    <form action="#" method="post">
    <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
<div class="error" ><?php echo $_GET[error]?></div></div></div>
    
    <div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU="></div>
    
  


  </div>
  <div id="timetable">
    



  

  

<div id="fullbox">
  <table border="0" align="center" width="100%" id="table" cellspacing="0">
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
      <td class="td"><div class="top"><?=$record1['sl'];?></div></td>
      <?php
	  }
	  else
	  {

	  ?>
        <td class="td"><div class="top"><?=$record1['start_time'];?>-<?=$record1['end_time'];?></div></td>
      <?php
	  }
	  }
	  ?>
      <!--  <td class="td"><div class="top">10:30AM - 11:30AM</div></td>
      
        <td class="td"><div class="top">11:30AM - 12:30PM</div></td>
      
        <td class="td"><div class="top">01:30PM - 02:00PM</div></td>
      
        <td class="td"><div class="top">02:30PM - 03:30PM</div></td>
      
        <td class="td"><div class="top">03:30PM - 04:30PM</div></td>
      -->
    </tr> <!-- timetable_tr -->
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
		 while(($sun = $newsRecordsun->getNextRecord())!==false)
	      {
		  if($sun['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$sun['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$sun['sl']?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>



 </tr><!--timetable_tr -->
     
<?php
}
       if($record2['mon']=='2')
	   {
   ?>
      <tr>
        <td><div class="name">MON</div></td>
        
        <td class="td-blank"></td>
        
        <?php
		while(($mon = $newsRecordmon->getNextRecord())!==false)
	     {
		 if($mon['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$mon['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$mon['sl'];?>
"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->


<?php
}
       if($record2['tue']=='3')
	   {
   ?>
      <tr>
        <td><div class="name">TUE</div></td>
       
        <td class="td-blank"></td>
           <?php
		while(($tue = $newsRecordtue->getNextRecord())!==false)
	     {
		if($tue['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$tue['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$tue['sl'];?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->

<?php
}
       if($record2['wed']=='4')
	   {
   ?>
      <tr>
        <td><div class="name">WED</div></td>
        
       
        <td class="td-blank"></td>
         <?php
		while(($wed = $newsRecordwed->getNextRecord())!==false)
	     {
		if($wed['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$wed['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$wed['sl'];?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->

<?php
}
       if($record2['thu']=='5')
	   {
   ?>
      <tr>
        <td><div class="name">THU</div></td>
         
        <td class="td-blank"></td>
        
       <?php
		while(($thu = $newsRecordthu->getNextRecord())!==false)
	     {
		if($thu['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$thu['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$thu['sl'];?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->


<?php
}
       if($record2['fri']=='6')
	   {
   ?>
      <tr>
        <td><div class="name">FRI</div></td>
       
        <td class="td-blank"></td>
        
         <?php
		while(($fri = $newsRecordfri->getNextRecord())!==false)
	     {
		if($fri['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$fri['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value=" <?=$fri['sl'];?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->


<?php
}
       if($record2['sat']=='7')
	   {
   ?>
      <tr>
        <td><div class="name">SAT</div></td>
       
       
        <td class="td-blank"></td>
          <?php
		while(($sat = $newsRecordsat->getNextRecord())!==false)
	     {
		if($sat['sl']=='Break')
	       {
	  ?>
      
	 <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                     <?=$sat['sl'];?>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
       <?php
	   }
	   else
	   {
		?>
    
         <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  
                      <input type="checkbox" name="ch" value="<?=$sat['sl'];?>"/>
                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td>
<?php
}
}
?>
 </tr><!--timetable_tr -->

<?php

}
?>
    
  </tbody></table>
</div>

  </div>
 
<h4>Add Subjects/Employee</h4>
  <div id="subjects-select">
    <div class="label-field-pair">
      <div class="text-input-bg">
        
  
    <select id="subject" name="subject" onChange="showemp(this.value)">
    <option value="">Select Subject</option>
<?php
while(($record = $newsrecord->getNextRecord())!==false)
{
?>
<option value="<?=$record['subject_name']?>"><?=$record['subject_name']?></option>
<?php
}
?>
</select>
      </div>
    </div>
    
    <input class="submit-button" name="commit"  type="submit" value="Publish Timetable">
  </form>
    
    <div id="subjects-select">
    <div class="label-field-pair">
      <div class="text-input-bg">
        
  <div id="emp">
  
 </div>
    </div>
 <!-- <h5>No teacher associated to this subject</h5>-->
</div>
  </div>

</div> </div>

      <div class="extender"></div>
    </div>
</div>
   <!-- footer -->
  <?php include("include/footer.php")?>
           