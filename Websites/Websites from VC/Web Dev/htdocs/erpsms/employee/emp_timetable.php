<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/timetable.css" media="screen" rel="stylesheet" type="text/css">



<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Timetable</h1>
  <h3>View</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li>
      <a href="#" target="_blank"> PDF Report</a>
    </li>
  </ul>
</div>
<div id="fullpage-yield">
  <div id="register">

    <div class="table">
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  SUN
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  MON
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  TUE
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  WED
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  THU
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  FRI
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

      <div class="outer-table">
      <div class="outer-table1">
        <table border="0" align="center" width="100%" id="timing" cellspacing="0">
          <tbody><tr>
            <td class="head">
              <div class="top">
                Time
              </div>
              <div class="bottom">
                <div class="course">
                  SAT
                </div>
              </div>
            </td>
            <td class="td-blank"> </td>
            
            <td class="td-blankfill"></td>
          </tr>
        </tbody></table>
      </div>
      </div>
      

    </div>
  </div>


</div> </div>

      <div class="extender"></div>
    </div>

  
   <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>