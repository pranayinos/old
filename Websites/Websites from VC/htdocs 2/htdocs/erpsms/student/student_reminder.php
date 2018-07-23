<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Messages</h1>
  <h3>Inbox</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    
      <li><a href="?page=student_reminder"><b>Inbox (2)</b></a></li>
      <li><a href="?page=student_sent_reminder">Sent</a></li>
    <li><a href="?page=student_create_reminder">Create</a></li>
  </ul>
</div>




<div id="fullpage-yield">

  



  <div id="application-list">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>
          From
        </td>
        <td>
          Subject
        </td>
        <td>
          Date
        </td>
      </tr>
      <tr class="tr-blank"></tr>


      
        
          
          <tr class="tr-read-odd">
            
            <td class="col-3"><a href="#">Fedena</a></td>
            <td class="col-3"><a href="#">New Event : ANUAL DAY</a></td>
            <td class="col-1"><a href="#">03-08-2011</a></td>

          </tr>

        
      
        



          
          <tr class="tr-even">
            
              <td class="col-3"><a href="#">Fedena</a></td>
            
            <td class="col-2"><a href="#">New Event : test</a></td>
            <td class="col-1"><a href="#">01-07-2011</a></td>
          </tr>
        
      
        



          
          <tr class="tr-odd">
            
              <td class="col-3"><a href="#">Fedena</a></td>
            
            <td class="col-2"><a href="#">New Event : onam</a></td>
            <td class="col-1"><a href="#">01-07-2011</a></td>
          </tr>
        
      
    </tbody></table>
    




  </div>
</div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>
  
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>