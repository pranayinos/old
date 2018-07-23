<?php $add_books = new Main(); 

// store session data

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
	  $b1=$_POST['booknumber'];
	  $newsRecord = $add_books->getdata('*', "add_books","book_number='$b1'","", "");
	  if(($record = $newsRecord->getNextRecord())!="")
	 	  {
		    $msg="Error : Duplicate Book Number is not Allow, Please check Values";
			header("location:?page=books-new&error=$msg");
	      }
	   else
	   {
			   $cols['book_number'] =$_POST['booknumber'];
			   $cols['book_title'] =$_POST['booktitle'];
			   $cols['author'] =$_POST['author'];
			   $cols['custom_tag'] =$_POST['customtag'];
			   $cols['no_of_copy'] =$_POST['noofcopy'];
			   
			   
			   
	    if($add_books->Inserttable($cols,"add_books"))
        {
				$msg="Books Record Added Succesfully";
				header("location:?page=books-new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=books-new&error=$msg");
		}
		
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
<!-------------Insert the 25 aug  code of validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    

<!-------------Insert the 1 sep select option box  code of validation--------------------------------------------->

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
  <h3>Add book</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  
  <div class="search_form">

    

    <form name="formID" id="formID" action="#" class="new_book" id="new_book" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
      <div class="label-field-pair">
       <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
        <label for="book_number">Book Number<span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_book_number" name="booknumber" size="30" type="text" value="" class="validate[required]  text-input">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="title">Title <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_title" name="booktitle" size="30" type="text" value="" class="validate[required]  text-input">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="author">Author <span class="necessary-field">*</span></label>
        <div class="text-input-bg">
          <input id="book_author" name="author" size="30" type="text" value="" class="validate[required]  text-input">
         
        </div>
      </div>
      <div class="extender"></div>
      <div class="tag">
        <div class="label-field-pair">
          <label for="tag"> Tags <span class="necessary-field">*</span></label>
          <div class="tag_list">
            <div class="label-field-pair-checkbox">
              

                <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Reference Book" class="validate[required]  text-input"> Reference Book
                <!--div class="extender"></div>
              

                <input class="right" id="book_tag_list_" name="book[tag_list][]" type="checkbox" value="Issue this book" class="validate[required]  text-input"> Issue this book
                <div class="extender"></div-->
              
            </div>
          </div>
        </div>
      </div>
      <div class="extender"></div>
      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="title">Custom Tags </label>
        <div class="text-input-bg">
          <input id="tag_list" name="customtag" type="text" class="validate[required]  text-input">
        </div>
      </div>
      <div class="extender"></div>
      <div class="label-field-pair">
        <label for="no_of_cpoies">No. of copies </label>
        <div class="text-input-bg">
          <input id="tag_count" name="noofcopy" type="text" value="" class="validate[required]  text-input">
        </div>
      </div>
      <input class="submit_button" id="book_submit" name="commit" type="submit" value="Create">
     
      <!-- <a href="?page=add_author" class="submit_button"  > Add Author Profile</a>-->
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>