<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/group_ index.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> <div id="content-header">
  <img alt="Discussion_icon" src="../images/discussion_icon.png">
  <h1> Discuss </h1>
  <h3>All discussions</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/groups/index#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

  <div id="inner-tab-menu">
    <ul>
      <li><a href="?page=groups-new">Create Group</a></li>
    </ul>
  </div>


<div id="leftmargin">
  <div id="replace">
    <div class="red_heading" id="discussion">
      <a href="?page=groups-recent_posts1">View All Posts</a>
    </div>
    <div class="left_sub">
      <div id="comments_heading"><div id="comment">Comment</div><div id="activity">Activity</div></div>
      
        No Recent Comments Found.
      
    </div>
    <div class="right_discussion">
      <div class="time_name">
      </div>
    </div>
    <div id="horizantal_bar">  </div>
  </div>
  <div class="paginate">
    
  </div>
</div>

<div id="rightmargin">
  <div id="right_content">
    <div class="red_heading">
      My Group
    </div>
    <div class="right_sub">
      
        No group(s)
      
    </div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>