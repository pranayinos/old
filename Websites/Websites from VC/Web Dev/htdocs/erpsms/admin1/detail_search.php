<?php
$add_books = new Main(); 	
$newsRecord = $add_books->getdata('*',"add_books","active=2","", "");
	 



//$bid=$newsrecord['book_number'];

 if(isset($_POST['commit'])) // If the submit button was clicked
   {
	$book_title=$_POST['book_title'];
	$author=$_POST['author'];
	
	$newsRecord = $add_books->getdata('*',"add_books","book_title='$book_title' and author='$author' and active=1","", "");
	 

	
	
	
      
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


<div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Book search</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/library/detail_search#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
</ul></div>
<div id="page-yield">
  
  
  
    <div class="search_form">
      <form name="formID" id="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
        <div class="label-field-pair">
          <label for="title">Title </label>
          <div class="text-input-bg">
            <input id="search_title" name="book_title" size="30" type="text" class="validate[required]  text-input">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="author">Author</label>
          <div class="text-input-bg">
            <input id="search_author" name="author" size="30" type="text" class="validate[required]  text-input">
          </div>
        </div>
        <input class="submit_button" id="commit" name="commit" type="submit" value="Search" >
      </form>
    </div>
     <?php
	 
	$i=0;
echo '<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
	 <tbody>
    <tr class="tr-head">
	<td> Sl  no.</td>
	<td> Book Number</td>
	<td>Title</td>
	<td> Author</td>
	
	<td> Status</td>
		<!--<td> Option1</td>
		<td> Option2</td>
		<td> Option3</td>-->
	</tr>	<tr class="tr-blank"></tr>';
 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	
	$i++;
	
	echo'	
	<tr class="tr-odd">
	  <td class="col-1">'.$i.' </td>
	  <td class="col-3">'.$record[book_number].'</td>
	  <td class="col-4"><a href="?page=view_book&id&id='.$record[book_id].'">'.$record[book_title].' </a></td>
	  <td class="col-4">'.$record[author].' </td>
	  <td class="col-4">'.$record[status].' </td>
	  
      <!--<td class="col-7"><a href="?page=user-profile&id='.$record[book_id].'">View</a></td>
	  <td class="col-7"><a href="?page=user-profile&id='.$record[book_id].'">Edit</a></td>
	  <td class="col-7"><a href="?page=books&d='.$record[book_id].'" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>-->
	  	 
	</tr>
   ';
    } 
  

  echo '</tbody></table>';
	?>
  
  
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>