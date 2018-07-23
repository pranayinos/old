<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/assignment_ index.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="fullcontent"> <div id="content-header">
  <img alt="Assignment" src="../images/assignment/assignment.png">
  <h1>Assignments</h1>
  <h3>All assignments</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  
  
    <div class="label-field-pair">
      <label for="assignment_subject">Subject</label>
      <div class="text-input-bg">
        
          <select id="assignment_subject" name="assignment[subject]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/assignments/subject_assignments&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;subject_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=&#39;)})"><option value="">Select a subject</option>
<option value="2">Introductory Economics lI  - B.A.HIS.I st SEM - 2011-12</option>
<option value="16">Reading on Indian Constitution,Secularism and enviroment  - B.COM 1st SEM - 2011-12</option></select>
        </div>
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </div>


      <div id="subject_assignments_list">
  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    
    <tbody><tr class="tr-head">
      <td>
        Sl  no..
      </td>
      <td>
       Title
      </td>
      <td>
        Due Date
      </td>
    </tr>
    <tr class="tr-blank"></tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            1
          </td>
          <td class="col-2">
            <a href="?page=emp_test-assignments">assign</a>
          </td>
          <td class="col-4">
            Friday, 06 April, 2012
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-1">
            2
          </td>
          <td class="col-2">
            <a href="#">xcvxcv</a>
          </td>
          <td class="col-4">
            Thursday, 05 April, 2012
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            3
          </td>
          <td class="col-2">
            <a href="#">do this</a>
          </td>
          <td class="col-4">
            Wednesday, 04 April, 2012
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-1">
            4
          </td>
          <td class="col-2">
            <a href="#">wewer</a>
          </td>
          <td class="col-4">
            Saturday, 10 March, 2012
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            5
          </td>
          <td class="col-2">
            <a href="#">teste</a>
          </td>
          <td class="col-4">
            Saturday, 10 March, 2012
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-1">
            6
          </td>
          <td class="col-2">
            <a href="#">asd</a>
          </td>
          <td class="col-4">
            Monday, 05 March, 2012
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            7
          </td>
          <td class="col-2">
            <a href="#">economic assignment</a>
          </td>
          <td class="col-4">
            Thursday, 09 February, 2012
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-1">
            8
          </td>
          <td class="col-2">
            <a href="#">Review Questions</a>
          </td>
          <td class="col-4">
            Monday, 06 February, 2012
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            9
          </td>
          <td class="col-2">
            <a href="#">economic assignment</a>
          </td>
          <td class="col-4">
            Monday, 06 February, 2012
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-1">
            10
          </td>
          <td class="col-2">
            <a href="#">abc</a>
          </td>
          <td class="col-4">
            Wednesday, 01 February, 2012
          </td>
        </tr>
      
    
  </tbody></table>
  
  
  <div class="submit_button">
    <a href="#">► Create new Assignment</a>
  </div>

</div>
    
  

</div>
 </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>