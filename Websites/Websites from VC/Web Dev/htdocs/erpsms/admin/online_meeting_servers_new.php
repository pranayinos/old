<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/online_meeting_servers_new.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1> Online Meeting Server</h1>
  <h3>New</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
<div id="form-content">
  <form action="http://demo.fedena.org/online_meeting_servers" class="new_online_meeting_server" id="new_online_meeting_server" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>

    
    <div class="label-field-pair">
      <label for="category_name">Name  </label>
      <input id="online_meeting_server_name" name="online_meeting_server[name]" size="30" type="text">
    </div>
    <div class="label-field-pair">
      <label for="category_name">URL  </label>
      <input id="online_meeting_server_url" name="online_meeting_server[url]" size="30" type="text">
    </div>
   <div class="label-field-pair">
     <label for="category_name">Salt  </label>
      <input id="online_meeting_server_salt" name="online_meeting_server[salt]" size="30" type="text">
    </div>
    <div id="submit-button">
      <input id="online_meeting_server_submit" name="commit" type="submit" value="Save Changes">
    </div>
  </form>
</div>
</div>


 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>