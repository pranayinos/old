



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">

   <script type="text/javascript">
	
// <!-- Ajax select data -->
function showbooksre(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
 
  
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;
	//alert(a);
   document.getElementById("information").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=user_view_div&re1="+str,true);
xmlhttp.send();
}
</script>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Book renewal</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  
  
  
    <div class="search_form">
      <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
        <div class="label-field-pair">
          <label for="book number">Search</label>
          <div class="text-input-bg">
            <input autocomplete="off" id="query" name="query" type="text"  value="enter Book number"onFocus="clearText(this)" onBlur="clearText(this)" onKeyUp="showbooksre(this.value);">
          </div>
        </div>
       <!-- <input class="submit_button" id="search_submit" name="commit" type="submit" value="Search">-->
      </form>
    </div>
  <div id="information"> </div>
  </div>
</div>

<!--<script type="text/javascript">
  function validate()
  {
    if($('fine').value == "")
    {
      alert("Please enter fine amount");
      return false;
    }
    else
    {
      if(isNaN($('fine').value)== false)
      {
        return true;
      }
      else
      {
        alert("Please enter numeric value for fine");
        return false;
      }
    }
  }
</script>--> </div>

      <div class="extender"></div>
    

    <!-- footer -->
  <?php include("include/footer.php")?>