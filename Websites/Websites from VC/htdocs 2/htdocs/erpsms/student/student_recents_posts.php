<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_group_ index.css" media="screen" rel="stylesheet" type="text/css">
<!------------------ Start head --------------------------------------------------------->
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
    <img alt="Discussion_icon" src="../images/discussion_icon.png">
  <h1>Discuss</h1>
  <h3>All discussions</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>


<div id="leftmargin">

  <div id="replace">
    <div class="red_heading" id="discussion">
      <a href="?page=student_dicussion">View Recent Activities</a>
    </div>
    <div class="left_sub">
      <div id="comments_heading"><div id="post_recent">Post</div><div id="comment_recent">Comment</div><div id="activity_recent">Activity</div></div>
      
        

          <div class="discussions">

            <div class="left_discussion_recent">
              <div class="post_comment">
               </div>

              <div id="post_title_recent">
                <a href="#" anchor="comments">dfds</a>
              </div>
              
                <div class="posted_by">by SUMESH</div>
              
            </div>
            <div class="middle_discussion">0</div>
            <div class="right_discussion">
              <div class="time_name">
                <div>4 monthsago</div>
                <div id="commenter_name">SUMESH</div>
              </div>
            </div>
            <div id="horizantal_bar">  </div>
          </div>

        

          <div class="discussions">

            <div class="left_discussion_recent">
              <div class="post_comment">
                </div>

              <div id="post_title_recent">
                <a href="?page=student_general_opinions" anchor="comments">General Opinion</a>
              </div>
              
                <div class="posted_by">by Fedena</div>
              
            </div>
            <div class="middle_discussion">3</div>
            <div class="right_discussion">
              <div class="time_name">
                <div>4 monthsago</div>
                <div id="commenter_name">SUMESH</div>
              </div>
            </div>
            <div id="horizantal_bar">  </div>
          </div>

        
      

    </div>
    <div class="paginate">
      
    </div>
  </div>



</div>
<div id="rightmargin">
  <div id="right_content">
    <div class="red_heading">
       My Group
    </div>
    <div class="right_sub">
      
        <div class="each_group">
          <a href="#">Parents</a>
        </div>
      
      
    </div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul>
</body></html>