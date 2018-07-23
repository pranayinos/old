<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
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
      
      <div id="content"> 
<div id="content-header">
  <img alt="Reminder_small" src="../images/reminder/reminder_small.png">
  <h1>Task</h1>
  <h3>Listing Assignees</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">

</div>




<div id="page-yield">

  



  <div id="application-list">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>
          Sl  no.
        </td>
        <td>
          Name
        </td>
        <td>
          Emp code / Admission no.
        </td>
        <td>
          Dept name / Course name
        </td>
      </tr>
      <tr class="tr-blank"></tr>


      
        <tr class="tr-read-odd">
          <td class="col-1">1 </td>
          <td class="col-2">SUMITH V</td>
          
            <td class="col-2">E1</td>
            <td class="col-2">Department of Economics</td>
          

        </tr>
        
      


    </tbody></table>
    





  </div>
</div> </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>