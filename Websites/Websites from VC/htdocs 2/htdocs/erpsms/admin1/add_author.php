<?php $add_books = new Main(); 
//$newslist = $add_books->getdata('*',"add_books","","book_number DESC", "1");
//$newsrecord = $newslist->getNextRecord();
//$bid=$newsrecord['book_number'];

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
	$bnum=$_POST['booknumber'];
      // news entry 
			   $post['author'] =$_POST['author'];
			   $post['author_address'] =$_POST['authoraddress'];
			   $post['author_mobile_number'] =$_POST['authormobilenumber'];
			   
			   
			   
			   
		if($add_books->updateData($post,"add_books","book_number='$bnum'"))
        {
				$msg="Author Record Added Succesfully";
				header("location:?page=add_author&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=add_author&error=$msg");
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
<!--validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    
  <script type="text/javascript">
	
// <!-- Ajax select data -->
function showauthor(str)
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
xmlhttp.open("GET","?page=add_author&q="+str,true);
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
  <img alt="Library_small" src="../images/HR/default_employee.png">
  <h1>Library</h1>
  <h3>Add Author Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  
  <div class="search_form">

    

    <form name="formID" id="formID" action="#" class="new_book" id="new_book" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
     <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
         <div class="label-field-pair">
        <label for="title">Book Number <span class="necessary-field">*</span></label>
        <div class="text-input-bg" id="search_textbox">
          <input id="booknumber" name="booknumber" size="30" type="text" value="" class="validate[required]  text-input" >
        </div>
      </div>
      <div class="label-field-pair">
      
 
 
        <label for="book_number">Author Name<span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="author"  name="author" size="30" type="text"  value="" class="validate[required]  text-input">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="title">Author Address <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="authoraddress" name="authoraddress" size="30" type="text" value="" class="validate[required]  text-input">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="author">Author Mobile Number <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="authormoblenumber" name="authormobilenumber" size="30" type="text" value="" class="validate[required]  text-input">
        </div>
      </div>
      
      
      <input class="submit_button" id="author_submit" name="commit" type="submit" value="Create">
      
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>