<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/transport_fee_search.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <script type="text/javascript"> function setOption(optn) {document.getElementById("option").value = optn;} </script>
<div id="content-header">
  <img alt="Transport_small" src="../images/transport/transport_small.png">
  <h1>Transport</h1>
  <h3>Transport Fees Submission</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
  </ul>
</div>
<div id="page-yield">
  <div id="search_box_bg">
    <form name="search_form" action="" style="display:inline;">
      <input id="option" name="option" type="hidden" value="student">
      <label for="user_name">Search
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./transport_fee-transport_fee_search_files/loader.gif" style="display: none; ">
      </label>
      <div id="search_textbox">
        <input autocomplete="off" id="query" name="query" type="text">

      </div>
      <div class="radio_button">
        <div class="radio-label">
          <input type="radio" name="setopt" id="search_present_students_radio" checked="checked" onClick="setOption(&#39;student&#39;)">Student
          <input type="radio" name="setopt" id="search_former_students_radio" onClick="setOption(&#39;employee&#39;)">Employee
        </div>
      </div>
      <div class="extender"></div>
    </form>
  </div>
  

  <div id="view_all">

  </div>






  <script type="text/javascript">
    function tsearch_logic(){
      if ($('query').value.include("%")) return;
Element.show('loader'); new Ajax.Updater('information', '/transport_fee/tsearch_logic', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+$('query').value + '&option='+$('option').value + '&authenticity_token=' + encodeURIComponent('sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=')})
  }

  document.observe("dom:loaded", function() {
    new Form.Element.Observer('query', 1, tsearch_logic);
    new Form.Element.Observer('option', 0.5, tsearch_logic);
  });

  </script>

  <div id="information">
  
    <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
      <tbody><tr class="tr-head">
        <td>
       Sl  no.
      </td>
      <td>
        Name
      </td>
      <td>Batch</td>
      <td>Adm no.</td>
      </tr>
      
        <tr class="tr-odd">
          <td class="col-1">1</td>
          <td class="col-2"><a href="http://demo.fedena.org/transport_fee/fees_student_dates/114">SACHIN RAMESH  TENDULKAR</a></td>
          <td class="col-2">1 - 1st Semester</td>
          <td class="col-2">1</td>
        </tr>
      
    </tbody></table>
  

</div>
</div>

 </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>