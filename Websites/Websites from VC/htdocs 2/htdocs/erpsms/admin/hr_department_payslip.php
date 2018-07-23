<?php   $emp_dept = new Main(); // create a new news object
	$batchRecordSet = $emp_dept->getdata('*',"emp_dept","","","");// batch
	
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>


<!--------- Start head ---------------->
<script type="text/javascript">
	
// <!-- select fee dates -->
function showfeestudent(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
   document.getElementById('student').style.display = "none";
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
   document.getElementById("fees_collection_dates").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
      document.getElementById('student').style.display = "none";
    }
	else
	document.getElementById('load').style.display = "block";
	 
  }
  
xmlhttp.open("GET","?page=student_view_div&dues_fee_student_batch2="+str,true);
xmlhttp.send();
}


// <!--select fee date student -->
function show_fee_dues_student(str)
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
	document.getElementById('student').style.display = "block";
   document.getElementById("student").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
   
   
    }
	else
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&dues_fee_coll_id2="+str,true);
xmlhttp.send();
}

</script>
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee</h1>
  <h3>Department wise payslip</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
    <div id="box">
      <div class="label-field-pair">
        <label for="student_course">Select department:</label>

        
        
        <div class="text-input-bg"> <select id="fees_defaulters_batch_id" name="fees_defaulters_batch_id" onChange="showfeestudent(this.value)">
        <option value="">Select a Deparment</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['dept_desc']?>">Deparment of <?=$record['dept_desc']?></option>
<?php }?>
       <!-- <option value="All">All Departments</option>
<option value="2">Department of Botany</option>
<option value="3" selected="selected">Department of Chemistry</option>
<option value="4">Department of Commerce</option>
<option value="5">Department of Computer Science</option>
<option value="6">Department of Economics</option>
<option value="7">Department of English</option>
<option value="8">Department of Hindi</option>
<option value="9">Department of History</option>
<option value="10">Department of Malayalam</option>
<option value="11">Department of Mathematics</option>
<option value="12">Department of Physics</option>
<option value="13">Department of Politics</option>
<option value="14">Department of Statistics</option>
<option value="15">Department of Zoology</option>
<option value="1">Fedena Admin</option>
<option value="16">Office Administration</option>
<option value="17">Physical Education</option>
<option value="18">PHYSICAL EDUCATION</option>--></select>
        </div></div>
        
        <!-- iNSERT THE CODE -->
        <div class="label-field-pair">
  <label>Select Month & Year</label>
    <div class="text-input-bg"> 
    <div id="fees_collection_dates">
<!-- fee Dues Date batch wise list--->

</div> </div>
</div><div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" >
  </div>  
    <div id="student">

<!-- fee Dues Studente list--->

</div>
<!-- END THE CODE -->
      <!--<div class="label-field-pair">
        <label for="student_course">Select month</label>
        <div class="text-input-bg">
          <select id="payslip_salary_date" name="payslip[salary_date]"><option value="2011-07-01">July 2011</option>
<option value="2011-06-01" selected="selected">June 2011</option>
<option value="2011-05-01">May 2011</option>
<option value="2011-03-01">March 2011</option>
<option value="2011-08-01">August 2011</option>
<option value="2012-03-01">March 2012</option>
<option value="2012-02-01">February 2012</option></select>
        </div></div>-->
    <!--  <input class="submit_button" name="commit" type="submit" value="► View">-->
    </div>



  </form>
  <div id="payslip">
    
      
        
        <!--
        <table id="listing" width="100%">
          <tbody><tr class="tr-head">
            <td>Sl  no.</td>
            <td>Employee</td>
            <td>Employee No.</td>
            <td>Net Salary</td>
            <td>Payslip status</td>
            <td></td>
          </tr>
          
          
          
          
          
            
              <tr class="tr-odd">
                
                  <td class="col-1">  1</td>
                  <td class="col-1">  RANJITH  K P</td>
                  <td class="col-1">  E111</td>
                  
                  

                  
                  <td class="col-1">  29730.00</td>
                  <td class="col-1">  Approved</td>
                  <td class="col-5"><a href="#">View</a></td>
                
                
                
                
              </tr>
            
          
          <tr class="tr-head">
            <td class="col-1">Total employees: </td>
            <td class="col-1">1 </td>
            <td class="col-1">Total Salary : </td>
            <td class="col-1">29730.00</td>
            <td class="col-1">Approved salary: </td>
            <td class="col-1">29730.00</td>
          </tr>

        </tbody></table>
      -->
    
  </div>


</div>
 </div>

      <div class="extender"></div>
    </div>

        <!-- footer -->
  <?php include("include/footer.php")?>