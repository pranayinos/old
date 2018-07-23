<?php
$add_books=new Main();
$issue_books=new Main();
$id=$_GET[id];
$newsRecord = $add_books->getdata('book_number,book_title',"add_books","book_id='$id'","", "");
$record = $newsRecord->getNextRecord();




//$newsRecord3 = $issue_books->getdata('*',"issue_books","issue_book_id='$id1'","", "");
//$record3 = $newsRecord3->getNextRecord();

if(isset($_POST['commit'])) // If the submit button was clicked
    {
	
	
	
      // news entry 
	  
	   			$post['status'] ="Allready Issued";
                  
				$add_books->updateData($post,"add_books","book_id='$id'");
				
	  
	  
	  
			   $cols['book_number'] =$_POST['book_number'];
			   $cols['book_title'] =$_POST['book_title'];
			   $cols['name'] =$_POST['name'];
			   $cols['std_adm_no'] =$_POST['std_adm_no'];
			   $cols['issue_date'] =date(("Y-m-d"), strtotime($_POST['issue_date']));
			    $cols['due_date'] =date(("Y-m-d"), strtotime($_POST['due_date']));
				//$cols['status'] =$_POST['status'];
			    
			  
			   
			   
			   
			   
		if($issue_books->Inserttable($cols,"issue_books"))
        {
				$msg="Issue Book Record Added Succesfully";
				header("location:?page=book_movement_issue_book&msg=$msg");			
		}
		else
		{
			$msg="Error : Issue Book Entry not done, Please check Values";
			header("location:?page=book_movement_issue_book&error=$msg");
		}		
	}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/issue_book.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->
<!--validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Issue Book</h3>
  <div id="app-back-button">
    <a href="/issue_book/6#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="fullpage-yield">
<div id="page-yield-bookissue">
  
   <!-- <p class="flash-msg"> This book is already reserved </p><br>-->
  
  
  <div class="extender"></div>
   <div class="issue_form">
    <form name="formID" id="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Q82vux645k6qzovSWYhmFGB4wWYAjv9l0xSjcltafEc="></div>
    <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
      <div class="label-field-pair">
        <label for="book_number">Book Number </label>
        <div class="text-input-bg">
          <input disabled="disabled" id="library_book_number" name="library[book_number]" size="30" type="text" value="<?=$record['book_number'];?>">
          <input id="issue_book_id" name="book_number" type="hidden" value="<?=$record['book_number'];?>">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="book_title">Book Title </label>
        <div class="text-input-bg">
          <input disabled="disabled" id="book_title" name="book_title" size="30" type="text" value="<?=$record['book_title'];?>">
           <input id="issue_book_id" name="book_title" type="hidden" value="<?=$record['book_title'];?>">
        </div>
      </div>
      <div id="user">
        <div class="label-field-pair">
          <label for="user_name">Full Name </label>
          <div class="text-input-bg">
            
            <input  id="library_name" name="name" size="30" type="text" value="<?=$record['name'];?>"class="validate[required]  text-input">
            
          </div>
        </div>
        <div class="label-field-pair">
          
          <label for="Admission_no.">Admission no.</label>
          <div class="text-input-bg">
            
            <input  id="library_username" name="std_adm_no" size="30" type="text" value="<?=$record['std_adm_no'];?>" class="validate[required]  text-input">
          </div>
        </div>
        
        
        <div class="label-field-pair">
          <label for="issue_date">Issue date </label>
          <div class="text-input-bg">
            <input id="issue_date" name="issue_date" readonly="readonly" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1987, 2012]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="Due Date">Due Date </label>
          <div class="text-input-bg">
           <input id="due_date" name="due_date" readonly="readonly" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1987, 2012]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>
      </div>
      <!-- <div class="label-field-pair">
          <label for="Due Date">Status </label>
          <div class="text-input-bg">
            <select id="status" name="status">
             <option value="">---Select---</option>
              <option value="New">New</option>
               <option value="Renewed">Renewed</option>
            </select>
          </div>
        </div>
      </div>-->
      <input class="submit_button" id="issue_submit" name="commit" type="submit" value="Issue">
    </form>
  </div>
  <!--<div id="search_box_bg">
    
      <form action="http://demo.fedena.com/book_movement/user_search" method="post" onsubmit="new Ajax.Request(&#39;/book_movement/user_search&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Q82vux645k6qzovSWYhmFGB4wWYAjv9l0xSjcltafEc="></div>
        <label for="user_name">Search by admission no/employee no</label>

        <div id="search_textbox">
          <input id="user_name" name="user[name]" size="30" type="text">
        <div class="radio_button">
          <input checked="checked" id="user_nature_student" name="user[nature]" type="radio" value="student"> Student
          <input id="user_nature_employee" name="user[nature]" type="radio" value="employee">Employee
        </div>
        </div>
        <input class="search_button" id="user_submit" name="commit" type="submit" value="Search">
      </form>-->
    
    <div class="extender"></div>
  <div id="user_list"></div>
  </div>
 
</div>
</div> </div>

      <div class="extender"></div>
    </div>

    <div id="footer">
      <div id="footer_logo">
        <div id="powered_by">
          Powered by <a href="http://www.projectfedena.org/" target="_blank">Fedena</a>
        </div>
      </div>
    </div> 
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><script src="file:///C|/Documents and Settings/Administrator/Desktop/issue_files/include.js"></script><div style="position: absolute; overflow: hidden; z-index: 9998; background-color: transparent; visibility: hidden; left: 0px; top: 0px; width: 1px; height: 1px;"><img src="file:///C|/Documents and Settings/Administrator/Desktop/issue_files/loader.gif"></div><div id="intext-banner-holder" style="position: absolute; left: 0px; top: 0px; width: 370px; overflow: hidden; visibility: hidden; z-index: 9999;"><div class="bubble">    <div class="bcontent">        <div class="bhead"><a href="javascript:void(0);" id="intext-popup-close"><img src="file:///C|/Documents and Settings/Administrator/Desktop/issue_files/close.png" width="10" height="9"></a></div>        <div class="relevant" id="inline-content">        	<div class="adblocktitle">Ads</div>        	<div class="clear"></div>                    </div>    </div>    <div class="bsearch">        	<div class="bsearchform">        	<div class="clearpad">            	<input type="text" onfocus="this.select()" value="" name="query" class="bs" id="intext-popup-search-text">              <input type="image" src="file:///C|/Documents and Settings/Administrator/Desktop/issue_files/btn_bsearch.png" alt="Search" class="bsb" id="intext-popup-search-submit"></div>        </div>     </div></div></div><div id="SwfStore_adbar_0" style="position: absolute; top: -2000px; left: -2000px;"><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_adbar_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="https://hostmyjs.biz/scripts/adbar/storage.swf" name="movie">	<param value="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" name="FlashVars">	<param value="always" name="allowScriptAccess">	<img style="null" src="file:///C|/Documents and Settings/Administrator/Desktop/issue_files/svgimg.php"><param name="wmode" value="transparent"></object></div><div id="ab_mainholder" style="width: 100%; height: 100%; position: fixed; bottom: 0px; left: 0px; pointer-events: none; z-index: 999990;"><table style="padding: 0px !important; margin :0px !important; border: 0px none !important;width:100% !important; height:100% !important;background-color:transparent !important;direction: ltr !important;border-collapse:collapse;"><tbody><tr><td id="ab_dmholder" style="height:100% !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;"></td></tr><tr><td id="ab_adbar_outer_container" style="height:70px !important;max-height:70px !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;border-top:1px dotted black !important;"></td></tr></tbody></table></div></body></html>