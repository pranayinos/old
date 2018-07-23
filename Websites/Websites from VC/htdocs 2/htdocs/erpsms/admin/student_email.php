<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/email.css" media="screen" rel="stylesheet" type="text/css">
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
<div id="content-header">
  <img alt="Student_details_logo" src="../images/_global/student_details_logo.jpg">
  <h1>Students</h1>
  <h3>Send Email</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  <div id="student_profile_heading">



    <div id="student_main_info">
      <span class="name"> anju  s  </span>
      <span class="course">Course&amp; Batch:10 - 2010 B </span>
      <span class="adm">Adm no. : 1006 </span>
    </div>

    <div class="extender"> </div>

  </div>


  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="CyCQoTfh6fXowiDlKlAw8fPzTqTcf2yDaQxgfoKfkdA="></div>

    <div class="label-field-pair">
      <label for="email_subject">Subject</label>
      <div class="text-input-bg"><input id="email_subject" name="email[subject]" size="30" type="text"></div>
    </div>

    <div class="label-field-pair">
      <label for="email_recipients">Recipients</label>
      <div class="text-input-bg"><select id="email_recipients" name="email[recipients]"><option value="Student">Student</option>
<option value="Guardian">Guardian</option>
<option value="Student &amp; Guardian">Student&amp;Guardian</option></select></div>
    </div>

    <div class="message-area">
      <br>
      <label for="email_message">Message</label>
      <textarea cols="40" id="email_message" name="email[message]" rows="20"></textarea>
    </div>

    <div class="submit-area">
      <input name="commit" type="submit" value="►Create">
    </div>

  </form>

</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>