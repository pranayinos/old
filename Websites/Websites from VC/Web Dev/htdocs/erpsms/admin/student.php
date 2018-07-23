<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)/configuration/settings -->
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/student_index.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
   

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<script type="text/javascript"> function setOption(optn) {document.getElementById("option").value = optn;} </script>

<div id="content-header">
  <img alt="Student_details_logo" src="../images/student_details/student_details_logo.jpg">
  <h1>Student Details</h1>
  <h3>View Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=student_view_all">View all</a></li>
    <li><a href="#">Advanced</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="search_box_bg">
    <form name="search_form" action="" style="display:inline;">
      <input id="option" name="option" type="hidden" value="active">
      <label for="user_name">Search
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </label>
      <div id="search_textbox">
        <input autocomplete="off" id="query" name="query" type="text" value="sachi">

      </div>
      <div class="radio_button">
        <input type="radio" name="setopt" id="search_present_students_radio" checked="checked" onClick="setOption(&#39;active&#39;)">Present students
        <input type="radio" name="setopt" id="search_former_students_radio" onClick="setOption(&#39;former&#39;)">Former students
      </div>
      <div class="extender"></div>
    </form>
  </div>
  

  <div id="view_all">

  </div>




  <script type="text/javascript">
    function search_ajax(){
      if ($('query').value.include("%")) return;
Element.show('loader'); new Ajax.Updater('information', '/student/search_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+$('query').value + '&option='+$('option').value + '&authenticity_token=' + encodeURIComponent('xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=')})
  }

  document.observe("dom:loaded", function() {
    new Form.Element.Observer('query', 1, search_ajax);
    new Form.Element.Observer('option', 0.5, search_ajax);
  });

  </script>

  <div id="information">
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
        
          <tbody><tr class="tr-head">
            <td>
              Sl  no.
            </td>
            <td>
             First Name
            </td>
            <td> Batch</td>
            <td> Adm no.</td>

          </tr>
          <tr class="tr-blank"></tr>
          
            <tr class="tr-odd">
              <td class="col-1">1</td>
              <td class="col-4"><a href="?page=profile">SACHIN RAMESH  TENDULKAR</a></td>
              <td class="col-4">1 - 1st Semester</td>
              <td class="col-1">1</td>
            </tr>
          
        
      </tbody></table></div>

</div> </div>

      <div class="extender"></div>
    </div><div class="SkipThisFixedPosition main-iframe-wrapper" id="main-iframe-wrapper" background="chrome-extension://bhnjjbcnbmjmhgpliahlamecmbejpaol/screenShot.png" style="z-index: 2147483644; top: 0px; left: 0px; margin: 0px; line-height: 0; display: none !important; width: 100%; height: 34px; position: fixed; "></div>

   <!-- footer -->
  <?php include("include/footer.php")?>