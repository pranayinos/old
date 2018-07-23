<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/poll_index.css" media="screen" rel="stylesheet" type="text/css">
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
      
      <div id="content"> <div id="content-header">
  <img alt="Poll" src="../images/poll.png">
  <h1>Online Poll</h1>
  <h3>Listing all polls</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    
  </ul>
</div>

<div id="page_yield">
  

  <div class="box">
    
      <h5>Active</h5>

      <div class="tr-head">
          <div class="poll-name"><div class="square"></div>Poll</div>
          <div class="poll-date">Posted On</div>
          <div class="poll-votes">Votes</div>
          
        </div><div class="tr-blank"></div><div class="tr-odd">
            <div class="poll-name">
              
                
                  <li class="poll-title"> <a href="#">es la educacion de buen nivel?</a></li>
                  <br>
                
              
              
              
            </div>
            <div class="poll-date-col">03 March 2012</div>
            <div class="poll-votes">3</div>
          </div><div class="tr-even">
            <div class="poll-name">
              
                
                  <li class="poll-title"> <a href="#">Cricket</a></li>
                  <br>
                
              
              
              
            </div>
            <div class="poll-date-col">02 February 2012</div>
            <div class="poll-votes">3</div>
          </div><div class="tr-odd">
            <div class="poll-name">
              
                <li class="poll-title"><a href="#">Test POll</a></li>
                <br>
              
              
              
            </div>
            <div class="poll-date-col">02 February 2012</div>
            <div class="poll-votes">2</div>
          </div><div class="tr-even">
            <div class="poll-name">
              
                
                  <li class="poll-title"> <a href="#">GARG</a></li>
                  <br>
                
              
              
              
            </div>
            <div class="poll-date-col">02 February 2012</div>
            <div class="poll-votes">2</div>
          </div><div class="tr-odd">
            <div class="poll-name">
              
                
                  <li class="poll-title"> <a href="#">cricket</a></li>
                  <br>
                
              
              
              
            </div>
            <div class="poll-date-col">02 February 2012</div>
            <div class="poll-votes">3</div>
          </div><div class="tr-even">
            <div class="poll-name">
              
                
                  <li class="poll-title"> <a href="#">testes</a></li>
                  <br>
                
            </div>
            <div class="poll-date-col">01 January 2012</div>
            <div class="poll-votes">4</div>
          </div><table id="poll-table" align="center" width="100%" cellpadding="1" cellspacing="1">
        </table>
</div>
</div>
 </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>