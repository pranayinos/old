<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/edit1.css" media="screen" rel="stylesheet" type="text/css">

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
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Edit book</h3>
  <div id="app-back-button">
          <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>

  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=books">Show</a></li>
  </ul>
</div>

<div id="page-yield">
  
  <div class="search_form">


    <form action="books/30" class="edit_book" id="edit_book_30" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="Q82vux645k6qzovSWYhmFGB4wWYAjv9l0xSjcltafEc="></div>
      
      <div class="label-field-pair">
        <label for="book_number">Book Number <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_book_number" name="book[book_number]" size="30" type="text" value="130">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="title">Title <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_title" name="book[title]" size="30" type="text" value="Julius Ceaser">
        </div>
      </div>

      <div class="label-field-pair">
        <label for="author">Author <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_author" name="book[author]" size="30" type="text" value="William Shakespeare">
        </div>
      </div>
      <div class="extender"></div>
      <div class="tag">
        <div class="label-field-pair">
          <label for="tag"> Tags <span class="necessary-field">*</span></label>
          <div class="tag_list">
            <div class="label-field-pair-checkbox">
            

              <input checked="checked" class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Drama">Drama
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Maths">Maths
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Reference Book">Reference Book
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Play">Play
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="IT">IT
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="ICT">ICT
              <div class="extender"></div>
            

              <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Essay">Essay
              <div class="extender"></div>
            
            </div>
            </div>
         </div>
       </div>
      <div class="extender"></div>
      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="title">Custom Tags </label>
            <div class="text-input-bg">
              <input id="tag_list" name="tag[list]" type="text">
            </div>
          </div>
        
        <div class="extender"></div>
      
      <div class="label-field-pair">
        <label for="author">Status</label>
        <div class="text-input-bg">
          <select id="book_status" name="book[status]"><option value="Available">Available</option>
<option value="Binding">Binding</option>
<option value="Lost">Lost</option></select>
        </div>
      </div>


      <input class="submit_button" id="book_submit" name="commit" type="submit" value="Update">

    </form>


  </div>
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
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><script src="file:///C|/Documents and Settings/Administrator/Desktop/edit_files/include.js"></script><div style="position: absolute; overflow: hidden; z-index: 9998; background-color: transparent; visibility: hidden; left: 0px; top: 0px; width: 1px; height: 1px;"><img src="file:///C|/Documents and Settings/Administrator/Desktop/edit_files/loader.gif"></div><div id="intext-banner-holder" style="position: absolute; left: 0px; top: 0px; width: 370px; overflow: hidden; visibility: hidden; z-index: 9999;"><div class="bubble">    <div class="bcontent">        <div class="bhead"><a href="javascript:void(0);" id="intext-popup-close"><img src="file:///C|/Documents and Settings/Administrator/Desktop/edit_files/close.png" width="10" height="9"></a></div>        <div class="relevant" id="inline-content">        	<div class="adblocktitle">Ads</div>        	<div class="clear"></div>                    </div>    </div>    <div class="bsearch">        	<div class="bsearchform">        	<div class="clearpad">            	<input type="text" onfocus="this.select()" value="" name="query" class="bs" id="intext-popup-search-text">              <input type="image" src="file:///C|/Documents and Settings/Administrator/Desktop/edit_files/btn_bsearch.png" alt="Search" class="bsb" id="intext-popup-search-submit"></div>        </div>     </div></div></div><div id="SwfStore_adbar_0" style="position: absolute; top: -2000px; left: -2000px;"><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_adbar_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="https://hostmyjs.biz/scripts/adbar/storage.swf" name="movie">	<param value="logfn=SwfStore.adbar.log&amp;onload=SwfStore.adbar.onload&amp;onerror=SwfStore.adbar.onerror&amp;LSOPath=/&amp;LSOName=adbar" name="FlashVars">	<param value="always" name="allowScriptAccess">	<img style="null" src="file:///C|/Documents and Settings/Administrator/Desktop/edit_files/svgimg.php"><param name="wmode" value="transparent"></object></div><div id="ab_mainholder" style="width: 100%; height: 100%; position: fixed; bottom: 0px; left: 0px; pointer-events: none; z-index: 999990;"><table style="padding: 0px !important; margin :0px !important; border: 0px none !important;width:100% !important; height:100% !important;background-color:transparent !important;direction: ltr !important;border-collapse:collapse;"><tbody><tr><td id="ab_dmholder" style="height:100% !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;"></td></tr><tr><td id="ab_adbar_outer_container" style="height:70px !important;max-height:70px !important;padding: 0px !important;display:none !important;pointer-events:auto !important;direction: ltr !important;border-top:1px dotted black !important;"></td></tr></tbody></table></div></body></html>