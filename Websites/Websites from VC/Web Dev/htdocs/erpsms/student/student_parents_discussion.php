<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_parent.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Parents</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>



<div id="fullpage-yield">
  
  <div id="leftside">
    <div id="share">
      <div class="red_heading" id="share_heading">Share</div>
      <form action="http://demo.fedena.com/groups/9/group_posts" class="new_group_post" enctype="multipart/form-data" id="new_group_post" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg="></div>
        
        <div id="title_label">
          <div class="textField2">Title<span class="necessary-field">*</span> </div>
          <div class="textField1"><input id="group_post_post_title" name="group_post[post_title]" size="30" type="text"></div>
        </div>
        <div id="description_label">
          <div class="text_description">Description<span class="necessary-field">*</span></div>
          <div class="textField"><textarea cols="90" id="group_post_post_body" name="group_post[post_body]" rows="9"></textarea></div>
        </div>
        <div class="textField" id="upload">Upload image or a document
          
            <input id="group_post_group_files_attributes_0_doc" name="group_post[group_files_attributes][0][doc]" size="20" type="file">
          
          <div id="go"><input id="9" name="commit" type="submit" value="Post"></div>

        
      </div></form>


      <div id="all_posts">
        <div class="red_heading" id="all_posts_heading">All discussions</div>
        
          <div class="posts">
            
              <div class="each_post">
                <div class="post_title_black"><a href="?page=student_general_opinions" anchor="#comments">General Opinion</a></div>
                <div class="post_details">
                  

                    <div class="posted_by">Posted by  <b>Fedena</b> </div>
                  
                  on Monday, 12 March 2012

                  <div class="comments"><a href="#">3 Comments</a></div>
                </div>

                <div id="horizantal_bar"></div>
              </div>
            
              <div class="each_post">
                <div class="post_title_black"><a href="?page=student_parent_discuss" anchor="#comments">dfds</a></div>
                <div class="post_details">
                  

                    <div class="posted_by">Posted by  <b>SUMESH</b> </div>
                  
                  on Wednesday, 28 March 2012

                  <div class="comments"><a href="#">0 Comments</a></div>
                </div>

                <div id="horizantal_bar"></div>
              </div>
            
            <div class="paginate">
              

              <div id="horizantal_bar_paginate"></div>

            </div>
          </div>
        
      </div></div>
  </div>
  <div id="rightside">
    <div id="right_content">
      <div id="members">
        <div class="red_heading">Members</div>
			<div class="td-name">KIRAN<div class="date"><span>1011<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
              <div class="td-name">SUMESH<div class="date"><span>1<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
              <div class="td-name">PRIYA<div class="date"><span>103<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
              <div class="td-name">ANITHA<div class="date"><span>104<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
              <div class="td-name">AKHILA<div class="date"><span>106<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        
          
            
            
            
          

        
          
            
              
            
          

        
          
            
              
            
          

        
          
            
              
            
          

        
          
            
              <div class="td-name">SOORAJ <div class="date"><span>107<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        
          
            
              <div class="td-name">SOUMYA<div class="date"><span>108<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        
          
            
              <div class="td-name">ATHIRA<div class="date"><span>109<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        
          
            
              <div class="td-name">FARZANA <div class="date"><span>110<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        
          
            
              <div class="td-name">ABHIRAJ<div class="date"><span>111<br>B.A.HIS.I st SEM - 2011-12</span></div></div>
            
          

        

        <div id="see_all_members"> <a href="#">See all members</a>     </div>

        <div id="my_groups">
          <div class="red_heading">My Group</div>
          <div class="group_names">
            
              <div class="firstName"><a href="?page=student_parents_discussion">Parents</a></div>
            
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>
  
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>