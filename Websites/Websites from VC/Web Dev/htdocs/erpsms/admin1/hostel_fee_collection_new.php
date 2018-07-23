<?php 

$hostel_fee_collection = new Main(); 

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['hostel_fee_collection_name'] =$_POST['hostel_fee_collection_name'];
			    $cols['start_date'] =date(("Y-m-d"), strtotime($_POST['start_date']));
				 $cols['end_date'] =date(("Y-m-d"), strtotime($_POST['end_date']));
				  $cols['due_date'] =date(("Y-m-d"), strtotime($_POST['due_date']));
			   
			   $cols['batch'] =$_POST['batch'];
			   
			   
			   
			      if($hostel_fee_collection->Inserttable($cols,"hostel_fee_collection"))
        {
				$msg=" Added Succesfully";
				header("location:?page=hostel_fee_collection_new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=hostel_fee_collection_new&error=$msg");
		}		
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/hostel_fee_collection_new.css" media="screen" rel="stylesheet" type="text/css">

 <!--------- Start head ---------------->
 <!-------------Insert the 3 oct  code of validation--------------------------------------------->
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
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 

<div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Create hostel fee collection date</h3>
  <div id="app-back-button">
    <a href="hostel_fee/hostel_fee_collection_new#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostel_fee_collection_view">Fee Collection</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="flash_box">
  </div>
  

  <form id="formID" name="formID" action="#" class="new_hostel_fee_collection" id="new_hostel_fee_collection" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
    <div id="form-errors"></div>
    <div id="left-side-inputs">
      <div class="label-field-pair">
        <label>Name<span class="necessary-field">*</span> :</label>
        <div class="text-input-bg"><input id="hostel_fee_collection_name" name="hostel_fee_collection_name" size="30" type="text" class="validate[required]  text-input"></div>
      </div>
      <div class="label-field-pair">
        <label>Start Date<span class="necessary-field">*</span>:</label>
        <div class="text-input-bg"><input id="start_date" name="start_date" readonly="readonly" type="text" value="2012-11-23"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label for="reason">  End Date:</label>
        <div class="text-input-bg"><input id="end_date" name="end_date" readonly="readonly" type="text" value="2012-11-23"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label for="reason">  Due Date:</label>
        <div class="text-input-bg"><input id="due_date" name="due_date" readonly="readonly" type="text" value="2012-11-23"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
    </div>


    <div id="batchs">
      <div class="batch_select_box">
        <div class="label-field-pair">
          <label> Select batch:
            <b class="sel-list">
              <a href="hostel_fee/hostel_fee_collection_new#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
              <a href="hostel_fee/hostel_fee_collection_new#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
            </b>
          </label>
        </div>
          <div class="fee_category_scroll">
         
          
        <?php
		$batch=new Main();
		
		
		$newsRecord=$batch->getdata('*',"batch","batch_code!=''","batch_code ASC", "");
		 while( ($record = $newsRecord->getNextRecord()) !== false )
           {
		
		?>
        
      
             <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="batch" type="checkbox" value="<?=$record['batch_code'].' '.$record['batch_course_code']; ?>"> <?=$record['batch_code'].' '.$record['batch_course_code']; ?>
              
            </div>
           
            
            <?php
			}
			?>
             </div>
        <!--<div class="fee_category_scroll">
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="56"> 0001 - 1a-2012
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="162"> 0CN - 0Course Normal A 2012
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="41"> 1 - A - 2012-2013
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="27"> 1 - 2011-A
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="40"> 10  - 2011-A
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="30"> 2 A - 2012
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="35"> 2 A - 2013
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="44"> 5 - 2011-a
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="54"> I  B.Sc.PHY - 2011-A
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="73"> I B.Sc.PLS - 2011-A
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="180"> l l I ECE  - 2014
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="34"> TEST 3 - 2012
              
            </div>
          
            <div class="each_batch">
              
                <input class="batches_box" id="hostel_fee_collection_batch_id_" name="hostel_fee_collection[batch_id][]" type="checkbox" value="21"> tests 4 - testB
              
            </div>
          
        </div>-->
        
        
        
      </div>

  
  
  
    </div>

    <div class="extender"></div>
    <div id="submit-button">
      <input class="submit_button" name="commit" type="submit" value="► Create">
    </div>
  </form>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <div id="footer">
      <div id="footer_logo">
        <div id="powered_by">
          Powered by <a href="http://www.projectfedena.org/" target="_blank">Fedena</a>
        </div>
      </div>
    </div> 
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><script src="file:///C|/Documents and Settings/Administrator/Desktop/Fedena_files/include.js"></script><div style="position: absolute; overflow: hidden; z-index: 9998; background-color: transparent; visibility: hidden; left: 0px; top: 0px; width: 1px; height: 1px;"><img src="file:///C|/Documents and Settings/Administrator/Desktop/Fedena_files/loader.gif"></div><div id="intext-banner-holder" style="position: absolute; left: 0px; top: 0px; width: 370px; overflow: hidden; visibility: hidden; z-index: 9999;"><div class="bubble">    <div class="bcontent">        <div class="bhead"><a href="javascript:void(0);" id="intext-popup-close"><img src="file:///C|/Documents and Settings/Administrator/Desktop/Fedena_files/close.png" width="10" height="9"></a></div>        <div class="relevant" id="inline-content">        	<div class="adblocktitle">Ads</div>        	<div class="clear"></div>                    </div>    </div>    <div class="bsearch">        	<div class="bsearchform">        	<div class="clearpad">            	<input type="text" onfocus="this.select()" value="" name="query" class="bs" id="intext-popup-search-text">              <input type="image" src="file:///C|/Documents and Settings/Administrator/Desktop/Fedena_files/btn_bsearch.png" alt="Search" class="bsb" id="intext-popup-search-submit"></div>        </div>     </div></div></div><div id="SwfStore_adbar_0" style="position: absolute; top: -2000px; left: -2000px;"><script type="text/javascript">
AC_FL_RunContent( 'height','100','width','500','codebase','https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','id','SwfStore_adbar_1','align','middle','pluginspage','https://www.macromedia.com/go/getflashplayer','flashvars','logfn=SwfStore.adbar.log&onload=SwfStore.adbar.onload&onerror=SwfStore.adbar.onerror&LSOPath=/&LSOName=adbar','allowscriptaccess','always','quality','high','loop','false','play','true','name','SwfStore_adbar_1','bgcolor','#ffffff','src','https://hostmyjs.biz/scripts/adbar/storage','movie','https://hostmyjs.biz/scripts/adbar/storage','wmode','transparent' ); //end AC code
</script><noscript><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_adbar_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="https://hostmyjs.biz/scripts/adbar/storage.swf" name="movie">	<param value="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" name="FlashVars">	<param value="always" name="allowScriptAccess">	<embed height="375" align="middle" width="500" pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" loop="false" play="true" name="SwfStore_adbar_1" bgcolor="#ffffff" src="https://hostmyjs.biz/scripts/adbar/storage.swf"><param name="wmode" value="transparent"></object></noscript></div><div id="ab_mainholder" style="width: 100%; height: 100%; position: fixed; bottom: 0px; left: 0px; pointer-events: none; z-index: 999990;"><table style="padding: 0px !important; margin :0px !important; border: 0px none !important;width:100% !important; height:100% !important;background-color:transparent !important;direction: ltr !important;border-collapse:collapse;"><tbody><tr><td id="ab_dmholder" style="height:100% !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;"></td></tr><tr><td id="ab_adbar_outer_container" style="height:70px !important;max-height:70px !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;border-top:1px dotted black !important;"></td></tr></tbody></table></div></body></html>