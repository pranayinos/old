

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
  <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript">
	
// <!-- Ajax select data -->
function showuser(str)
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
xmlhttp.open("GET","?page=user_view_div&q="+str,true);
xmlhttp.send();
}
</script>


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<script type="text/javascript"> function setOption(optn) {document.getElementById("option").value = optn;} </script>
      
<div id="content-header">
  <img alt="User_profile_logo" src="../images/user_profile/user_profile_logo.jpg">
  <h1>Manage Users</h1>
  <h3>Details about users</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/user?query=d#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=user-all">View all</a></li>
    <li><a href="?page=user-create">Add new</a></li>
  </ul>
</div>
<div id="search-area">
  
  <div id="searchbox" style="margin-left:100px">
    <form name="search_form" action="#" id="user" name="user" style="display:inline;">
    <input id="option" name="option" type="hidden" value="active">
      <label for="query">Search user
     <!--   <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">-->
      </label>
     <div id="search_textbox">
        <input autocomplete="off" id="query" name="query" type="text" onKeyUp="showuser(this.value);" value="enter first name"onFocus="clearText(this)" onBlur="clearText(this)">
<div id="load" style="display:none">  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif"></div>
      </div>
  


<div class="radio_button">
     <span  style="padding-left:40px">User List is Below</span>
 <!--   <input type="radio" name="setopt" id="search_present_students_radio" checked="checked" onClick="setOption(&#39;active&#39;)">Present students
          <input type="radio" name="setopt" id="search_former_students_radio" onClick="setOption(&#39;former&#39;)">Former students-->
        </div>
      <div class="extender"></div>
    </form >
  </div>
  
  <div id="view_all">

  </div>





 <!-- <script type="text/javascript">
    function search_user_ajax(){
      if ($('query').value.include("%")) return;
Element.show('loader'); new Ajax.Updater('user_information', '/user/search_user_ajax', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+ $('query').value + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }

  document.observe("dom:loaded", function() {
    new Form.Element.Observer('query', 1, search_user_ajax);
  });

  </script>-->

  <div id="information"> </div>

 

</div> </div>

      <div class="extender"></div>
  </div>

   <!-- footer -->
  <?php include("include/footer.php")?>