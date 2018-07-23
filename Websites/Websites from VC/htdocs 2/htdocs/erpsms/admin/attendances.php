<?php   $student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/attendance_index.css" media="screen" rel="stylesheet" type="text/css">

<!--<link href="css/application2.css" media="screen" rel="stylesheet" type="text/css">
-->
<script type="text/javascript">
	
// <!-- Ajax select data -->
function showstudent(str)
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
   document.getElementById("students").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=attendance_view_div&batch="+str,true);
xmlhttp.send();
}
</script>
<!--- 	Insert the code of calender 13 -12-2012 -->
<link rel="stylesheet" type="text/css" media="screen" href="jquery_calendar/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="jquery_calendar/shadowbox.css">
	<link rel="stylesheet" type="text/css" media="screen" href="jquery_calendar/jquery.miniColors.min.js">
	
	<!--[if lt IE 9]>
        <script src="HTML5Shiv/html5.js"></script>
        
        <style type="text/css">
            .ui-draggable-dragging {
                filter: alpha(opacity=50);
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=50);
            }
            
            #agenda tbody span.ui-selecting {
                background: #569DE8;
                border-top: 1px solid #569DE8;
            }
            
            #topMask {
                position: absolute;
                
                background: #DDD;
                
                z-index: 10;
                
                filter: alpha(opacity=60);
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
            }
            
            #bottomMask {
                position: absolute;
                
                background: #DDD;
                
                z-index: 10;
                
                filter: alpha(opacity=60);
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
            }
            
            #leftMask {
                position: absolute;
                
                width: 0px;
                
                background: #DDD;
                
                z-index: 10;
                
                filter: alpha(opacity=60);
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
            }

            #rightMask {
                position: absolute;
                
                width: 0px;
                
                background: #DDD;
                
                z-index: 10;
                
                filter: alpha(opacity=60);
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
            }
        </style>
    <![endif]-->

<meta name="document_iterator.js"><meta name="find_proxy.js"><meta name="get_html_text.js"><meta name="global_constants.js"><meta name="name_injection_builder.js"><meta name="number_injection_builder.js"><meta name="menu_injection_builder.js"><meta name="string_finder.js"><meta name="change_sink.js">
<script type="text/javascript" src="jquery_calendar/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery-ui-1.8.17.custom.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.core.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.widget.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.mouse.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.position.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.draggable.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.resizable.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.selectable.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.droppable.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.slider.min.js"></script>
	<script type="text/javascript" src="jquery_calendar/jquery.ui.dialog.min.js"></script>

	<!-- SHADOWBOX -->
	<script type="text/javascript" src="jquery_calendar/shadowbox.js"></script>
	
	<!-- JQUERY - MINICOLORS -->
	<script type="text/javascript" src="jquery_calendar/jquery.miniColors.min.js"></script>
	
	<!-- DATES MANAGEMENT -->
	<script type="text/javascript" src="jquery_calendar/date.js"></script>
	
	<script type="text/javascript" src="jquery_calendar/eventouchcalendar.crypt.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		$(document).ready(function() {

			// Example of good values for cells
			var CELL_WIDTH_LITTLE = 100, CELL_WIDTH_MEDIUM = 150, CELL_WIDTH_LARGE = 200;
			var CELL_HEIGHT_LITTLE = 7, CELL_HEIGHT_MEDIUM = 9, CELL_HEIGHT_LARGE = 15;
			
			/*
				Default values
				--------------
			
			hour_mask:		new Array(8, 20),
			day_mask:		new Array(1, 7),
			cell_width:		150,
			cell_height:	9
			*/
			
			$agenda = $(document).eventouchcalendar({
			
			});

		});
		//]]>
	</script>
<!-- End the code of calender ---------->
 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 

<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance</h1>
  <h3>Attendance register</h3>
  <div id="app-back-button">
    <a href="" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<form action="" enctype="multipart/form-data" id"st_form" name="st_form">

<div id="fullpage-yield">
  <div class="label-field-pair">
    <label>Select a batch</label>
    <div class="text-input-bg">
        <select id="std_batch_code1" name="std_batch_code" onChange="showstudent(this.value)">
        
        <option value="">Select A Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
  

          </select>

      
    </div>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="./attendance_files/loader.gif" style="display: none;">
  </div>
<input id="time_zone" name="time_zone_date" type="hidden" value="2012-12-03">


 

  
  
    

  <br><br>
  
  
  <!--- Insert the code of ajax calling -->
   <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="students">

<div class="students-table">
 <!-- Student list -->
</div>
</div>

</div>
  <!--- End the code of ajax calling --->
  <!-- insert the code of calender of 13-12-2012-->
<div id="containerg" style="margin: 50px 0px 0px 100px; width: 1231px;">
		<div id="miniMonthCalendarContainer">
			<h3 style="margin:0px 0px 15px 30px; color:#327CCB; font-size:14px;">Fast day chooser</h3>
			<div id="monthManagement">
				<input type="button" id="prevYear" name="prevYear" value="«" title="Previous year">
				<input type="button" id="prevMonth" name="prevMonth" value="&lt;" title="Previous month">
				<span id="currentMonth">May 2013</span>
				<input type="button" id="nextMonth" name="prevMonth" value="&gt;" title="Next month">
				<input type="button" id="nextYear" name="nextYear" value="»" title="Next year">
			</div>
			<table id="miniMonthCalendar">
			<tbody><tr><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td></tr><tr><td>01</td><td>02</td><td>03</td><td>04</td><td>05</td><td>06</td><td>07</td><td>08</td><td>09</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr></tbody></table>
		</div>
		<div id="nav" style="margin-left: 74px;">
			<input type="button" id="nav_previous" name="nav_previous" value="&lt;" title="Previous week">
			<input type="button" id="nav_next" name="nav_next" value="&gt;" title="Next week">
		</div>
		</div>
<!-- end the code of calender ----->     
  
</form>
<?php /*?><?php 
$atttendance_register = new Main(); 
if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['day'] =$_POST['a'];
			   //$cols['news_desc'] =$_POST['news_desc'];
			   
			   
			   
			      if($atttendance_register->Inserttable($cols,"atttendance_register"))
        {
				$msg="News Added Succesfully";
				header("location:?page=atttendance_register&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=atttendance_register&error=$msg");
		}		
	}
// End the Insert code 	
 echo '<form id="s" name="s" action="#" method="post">
 		<input name="a" id="a" type="text">
	  <input  name="commit" type="submit" value="submit">
	  </form>';
?><?php */?>

</div>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>