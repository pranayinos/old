<?php
    $emp_payslip = new Main(); // create a new news object
	$e_id=$_GET[id];
 	$field = $emp_payslip->getdata('*',"emp_payslip","emp_no='$e_id'","payslip_id desc", "3");// set newsRecordSet to a 
?>

<?php /*?><?php
$emp_payslip = new Main(); 
$field1=$emp_payslip->getdata('*',"emp_payslip","payslip_id='$e_id'","", "");
?><?php */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_profile.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 



<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Profile</h1>
  <h3>Details</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
    <?php
while( ($record = $field->getNextRecord()) !== false )
    {
	?>
  </div>
</div>


<div id="nav">
  <ul>
    <li>
      <a href="#" class="drops" id="link_one">Profile ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">General</a></li>       
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">Personal</a></li>
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">Address</a></li>
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">Contact</a></li>
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">Bank Info</a></li>
        <li><a href="?page=employee-profile&id=<?=$record['emp_no']?>">Additional Info</a></li>
      </ul>
    </li>

    
      
        <li>
          <a href="#" class="drops" id="link_two">Salary ▼</a>
          <ul id="box_two" class="scriptaculously" style="overflow: visible; display: none; ">
            <li><a href="?page=profile_emp_payroll">Payroll</a></li>
            <li><a href="?page=profile_emp_payslip">Payslip</a></li>
          </ul>
        </li>
      
    


    
      
        <li>
          <a href="#" class="drops" id="link_three">Leaves ▼</a>
          <ul id="box_three" class="scriptaculously" style="display:none;">
            <li><a href="?page=profile_emp_leave">Attendance</a></li>
          </ul>
        </li>

      
    

    

    
    
      <li>
      <a href="#">Delete</a>
      </li>
    
    <li>
      <a href="#" class="drops" id="link_four">More▼</a>
          <ul id="box_four" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=profile_emp_library_deatils">Library</a></li>
        
          <li><a href="?page=profile_emp_transport">Transport</a></li>
        
      </ul>
    </li>
  </ul>

</div>




<div id="page-yield">

  

  <div id="employee_profile_heading">

    <div id="profile_picture_display">
       <?php  $pic=$record['emp_gender']; 
	           $pic;
			  if($pic==0)
			  // echo "female 0";
			   echo '<img alt="Default_employee" src="../images/Female_Profile_Icon.jpg">';
			  
			  else
			   //echo "male 1";
			   echo '<img alt="Default_employee" src="../images/HR/default_employee.png">';
	   ?>
	   
      
       
      
      
    </div>

    <div id="employee_main_info">
      <h3> <?=$record['emp_first_name']?>&nbsp;<?=$record['emp_mid_name']?>&nbsp;<?=$record['emp_last_name']?>    </h3>
      <h4> Employee ID :<?=$record['emp_no']?></h4>
      <h4><?=date(("d-M-Y"), strtotime($record['sal_date'])) ?></h4>
     
    </div>

    <div id="profile-general-info">


    </div>
    <div class="extender"></div>

  </div>


  <div id="profile-infos">

  <ul class="item-list">
    <li class="heading1">Basic Payroll Details </li>
    
    

      
      
        <li class="listodd">
          <div class="item-name">BASIC</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['basic_sal']?></span> </div>
          
        
          
        </li>
      
    

      
      
        <li class="listeven">
          <div class="item-name">HRA</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['hra']?></span> </div>
          
          
          
        </li>
      
    

      
      
        <li class="listodd">
          <div class="item-name">PROVIDENT FUND</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['pf']?></span> </div>
          
          
          
        </li>
      
    

      
      
        <li class="listeven">
          <div class="item-name">PERFOMANCE BONUS</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['pb']?></span> </div>
          
          
          
        </li>
      
    

      
      
        <li class="listodd">
          <div class="item-name">MEDICAL ALLOWANCE</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['medical_all']?></span> </div>
          
          
          
        </li>
      
    

      
      
        <li class="listeven">
          <div class="item-name">INSURANCE</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['insurance']?></span> </div>
          
          
          
        </li>
      
    

      
      
        <!--<li class="listodd">
          <div class="item-name">TRAVEL</div>
          <div class="item-edit"><span class="currency-type">Rs.<?=$record['basic_sal']?></span> </div>
          </li>-->
      
    <?php $a=$record['basic_sal'] ;
	       $b=$record['hra'];
		    $c=$record['pf'];
			 $d=$record['pb'];
			  $e=$record['medical_all'];
			   $f=$record['insurance'];
			   
		    $c=$a+$b+$c+$d+$e+$f;
		   ?>
    <li class="listeven"><div class="item-name">Total :</div><div class="item-edit"><span class="currency-type">
    Rs.</span><b> <?php echo $c; ?></b></div></li>
    </ul>

    <div class="edit-delete-link">
    <a href="#">Edit</a>
    </div>


</div>
  <div class="extender"> </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

<?php } ?>  
         <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>