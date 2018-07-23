<?php
$issue_books=new Main();
	   $newsid= $_GET['d'];
	 
		if($newsid!="")  
    { 
	
					
                 $post['active'] ='0';
                  
				if($issue_books->updateData($post,"issue_books","issue_book_id='$newsid'"))
				{
				$msg="Issue Book Record is  Succesfully Deleted";
				header("location:?page=book_movement-return_book&$newsid=$d&msg=$msg");		
				}		
				else
				{
				$msg="Error : Book Record is not deleted, Please check Values";
				header("location:?page=book_movement-return_book&$newsid=$d&error=$msg");	
				}	
	}		 
?>


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
function showbooks(str)
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
xmlhttp.open("GET","?page=user_view_div&bo="+str,true);
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
  <h3>Return book</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  
  
  <div class="search_form">
    
      <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
      <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
        <div class="label-field-pair">
          <label for="book number">Book Number </label>
          <div class="text-input-bg">
            <input autocomplete="off" id="query" name="query" type="text"  value="enter Book number"onFocus="clearText(this)" onBlur="clearText(this)" onKeyUp="showbooks(this.value);">
          </div>
        </div>
        
       <!-- <input class="submit_button" id="book_submit" name="commit" type="submit" value="Search"  >-->
      </form>
    
  </div>
   <label for="book number">List Of Issue Books  </label><br />
  <div id="information"> </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>