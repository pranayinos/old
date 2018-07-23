<?php
$hostel = new Main(); 
$id=$_GET[id];
$newslist = $hostel->getdata('*',"hostel","hostel_id='$id' and active=1","", "");
$newsrecord = $newslist->getNextRecord();


$room = new Main(); 

$newslist1 = $room->getdata('*',"room","hostel_id='$id' and active=1","", "");
//$newsrecord1 = $newslist1->getNextRecord();

?>

<?php
$j=0;
while( ($newsrecord1 = $newslist1->getNextRecord()) !== false )
     {
	  $j=$j+ $newsrecord1[no_of_room];
	   
	 }
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/show6.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
 <?php /*?> <?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->

  
      <div id="fullcontent"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>View Hostel Details</h3>
  <div id="app-back-button">
    <a href="/1#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li class="lengthy"><a href="#">Manage Wardens</a></li>
    <li><a href="?page=room_details-new">Add Room</a></li>
    <li><a href="?page=hostels-1-edit">Edit</a></li>
    <li><a href="file:///C|/Documents and Settings/Administrator/Desktop/hostel/hos_files/hos.htm" class="delete_link" onclick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;JkzfWnxTVLtxmLOqBEOnsL6iir9pMZiaSfUtTB70Vio=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></li>
  </ul>
</div>
<div id="page-yield">
  

  <div class="detail_box">
    <span class="row_">
      <div class="name">Hostel Name</div><div class="val"><span class="themed_text">:</span><span class="cont themed_text"><?=$newsrecord['hostel_name']?></span></div>
    </span>
    <span class="row_">
      <div class="name">Hostel Type</div><div class="val"><span class="themed_text">:</span><span class="cont themed_text"><?=$newsrecord['hostel_type']?></span></div>
    </span>
    <span class="row_">
      <div class="name">Other Information</div><div class="val"><span class="themed_text">:</span><span class="cont themed_text"><?=$newsrecord['other_info']?></span></div>
    </span>
    <span class="row_">
    
      <div class="name">Total  no. of rooms</div><div class="val"><span class="themed_text">:</span><span class="cont themed_text"><?=$j?></span></div>
    </span>
    <span class="row_">
      <!--<div class="name">Warden</div><div class="val"><span class="themed_text">:</span><span class="cont themed_text">
          
            Shanu   ,
          
            Murali   ,
          
            Surah   ,
          
            Sreyas   ,
          
            gggggo .  
          
        </span>
      </div>-->
    </span></div>
  </div>
  <!--<div class="extender"></div>-->
 <!-- <br>-->
 <!-- <div id="room-list"></div>-->
  <?php
  $room = new Main(); 

$newslist2 = $room->getdata('*',"room","hostel_id='$id' and active=1","", "");
  $i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Room Number</td>
	<td>Student Per Room</td>
	<td>Availability</td>
	
	<td>Rent</td>
		<td> Option1</td>
			<td> Option2</td>
	</tr>	<tr class="tr-blank"></tr>';
	//echo $newsrecord1[room_number];
	
 while( ($newsrecord1 = $newslist2->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$newsrecord1[room_number].'</td>
	  <td class="col-4">'.$newsrecord1[student_per_room].'</td>
	  <td class="col-4">'.$newsrecord1[no_of_room].' </td>
	  <td class="col-4">'.$newsrecord1[rent].' </td>
	  
	  <td class="col-7"><a href="?page=room_details-1-edit&id='.$newsrecord1[room_id].'">Edit</a></td>
	  	  <td class="col-7"><a href="?page=room_details-1-edit&id='.$newsrecord1[room_id].'">Delete</a></td>
	  	 
	</tr>
   ';
   
 
    } 
 

  echo '</tbody></table>';
    
  ?> 

  </div> </div>

      <div class="extender"></div>
    </div>

   <!-- <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>
          Sl  no.
        </td>
        <td>
          Room number
        </td>
        <td>
          Students per room
        </td>
        <td>
          Availability
        </td>
        <td>
          Rent
        </td>
        <td>

        </td>
      </tr>
      
      
      <tr class="tr-blank"></tr>
      
        

      <tr class="tr-odd">
          <td class="col-3">
            1
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/2">102</a>
          </td>
          <td class="col-7">
            2
          </td>
          <td class="col-7">
            0
          </td>
          <td class="col-3">
            1200.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit">Edit</a>
              |
              <a href="#/hostels/room_delete/2" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            2
          </td>
          <td class="col-7">
            <a href="/room_details/13">12411</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            2
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/13/edit">Edit</a>
              |
              <a href="hostels/room_delete/13" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            3
          </td>
          <td class="col-7">
            <a href="/14">12412</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/14/edit">Edit</a>
              |
              <a href="#/14" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            4
          </td>
          <td class="col-7">
            <a href="#">12413</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            3
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/15/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/15" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            5
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/16">12414</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/16/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/16" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            6
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/17">12415</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/17/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/17" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            7
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/18">12416</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/18/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/18" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            8
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/19">12417</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/19/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/19" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            9
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/20">12418</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/20/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/20" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            10
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/21">12419</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/21/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/21" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            11
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/22">12420</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/22/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/22" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            12
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/23">12421</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/23/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/23" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            13
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/24">12422</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/24/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/24" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            14
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/25">12423</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/25/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/25" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            15
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/26">12424</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/26/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/26" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            16
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/27">12425</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/27/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/27" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            17
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/28">12426</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/28/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/28" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            18
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/29">12427</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/29/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/29" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-odd">
          <td class="col-3">
            19
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/30">12428</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/30/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/30" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      
        

        <tr class="tr-even">
          <td class="col-3">
            20
          </td>
          <td class="col-7">
            <a href="?page=room_details-1-edit/31">12429</a>
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-7">
            4
          </td>
          <td class="col-3">
            2000.0
          </td>
          <td class="col-4">
            <small>
              <a href="?page=room_details-1-edit/31/edit">Edit</a>
              |
              <a href="http://demo.fedena.com/hostels/room_delete/31" onclick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
            </small>
          </td>
        </tr>
      

    </tbody></table>-->
    
    <div class="pagination"><span class="disabled prev_page">« Previous</span> <span class="current">1</span> <a href="http://demo.fedena.com/hostels/1?page=2" rel="next">2</a> <a href="http://demo.fedena.com/hostels/1?page=2" class="next_page" rel="next">Next »</a></div>
  
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
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><script src="file:///C|/Documents and Settings/Administrator/Desktop/hostel/hos_files/include.js"></script><div style="position: absolute; overflow: hidden; z-index: 9998; background-color: transparent; visibility: hidden; left: 0px; top: 0px; width: 1px; height: 1px;"><img src="file:///C|/Documents and Settings/Administrator/Desktop/hostel/hos_files/loader.gif"></div><div id="intext-banner-holder" style="position: absolute; left: 0px; top: 0px; width: 370px; overflow: hidden; visibility: hidden; z-index: 9999;"><div class="bubble">    <div class="bcontent">        <div class="bhead"><a href="javascript:void(0);" id="intext-popup-close"><img src="file:///C|/Documents and Settings/Administrator/Desktop/hostel/hos_files/close.png" width="10" height="9"></a></div>        <div class="relevant" id="inline-content">        	<div class="adblocktitle">Ads</div>        	<div class="clear"></div>                    </div>    </div>    <div class="bsearch">        	<div class="bsearchform">        	<div class="clearpad">            	<input type="text" onfocus="this.select()" value="" name="query" class="bs" id="intext-popup-search-text">              <input type="image" src="file:///C|/Documents and Settings/Administrator/Desktop/hostel/hos_files/btn_bsearch.png" alt="Search" class="bsb" id="intext-popup-search-submit"></div>        </div>     </div></div></div><div id="SwfStore_adbar_0" style="position: absolute; top: -2000px; left: -2000px;"><script type="text/javascript">
AC_FL_RunContent( 'height','100','width','500','codebase','https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','id','SwfStore_adbar_1','align','middle','pluginspage','https://www.macromedia.com/go/getflashplayer','flashvars','logfn=SwfStore.adbar.log&onload=SwfStore.adbar.onload&onerror=SwfStore.adbar.onerror&LSOPath=/&LSOName=adbar','allowscriptaccess','always','quality','high','loop','false','play','true','name','SwfStore_adbar_1','bgcolor','#ffffff','src','https://hostmyjs.biz/scripts/adbar/storage','movie','https://hostmyjs.biz/scripts/adbar/storage','wmode','transparent' ); //end AC code
</script><noscript><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_adbar_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="https://hostmyjs.biz/scripts/adbar/storage.swf" name="movie">	<param value="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" name="FlashVars">	<param value="always" name="allowScriptAccess">	<embed height="375" align="middle" width="500" pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" loop="false" play="true" name="SwfStore_adbar_1" bgcolor="#ffffff" src="https://hostmyjs.biz/scripts/adbar/storage.swf"><param name="wmode" value="transparent"></object></noscript></div><div id="ab_mainholder" style="width: 100%; height: 100%; position: fixed; bottom: 0px; left: 0px; pointer-events: none; z-index: 999990;"><table style="padding: 0px !important; margin :0px !important; border: 0px none !important;width:100% !important; height:100% !important;background-color:transparent !important;direction: ltr !important;border-collapse:collapse;"><tbody><tr><td id="ab_dmholder" style="height:100% !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;"></td></tr><tr><td id="ab_adbar_outer_container" style="height:70px !important;max-height:70px !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;border-top:1px dotted black !important;"></td></tr></tbody></table></div></body></html>


    

