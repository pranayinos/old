<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_parent_discuss.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>View Post</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    

      <li><a href="./student_parent_discuss_files/student_parent_discuss.htm" action="destroy" onclick="if (confirm(&#39;Do you really want to delete this post?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></li>
    
  </ul>
</div>
<div id="fullpage-yield">
  
  <div>
    <div id="part1">
      <div>
        <div class="red_heading">
          <h3>dfds</h3>
        </div>
        <div id="post_details">
          
            <div class="bread_crumb1">
              Posted by <span id="posters_name">SUMESH</span> <span class="translation_missing">en, on</span> Wednesday, 28 March 2012
            </div>
          
          <span class="bread_crumb2"><a href="http://demo.fedena.com/groups/9/group_posts/13#comments"><span id="comments_no">
                0 Comments
              </span></a></span>
        </div>
        <div id="files_field1">
          
            
              <a href="#" target="_blank"><img alt="Show_image" src="../images/show_image.jpg"></a>
            
          

        </div>
        <div class="textt">
          dfdfgdfgfd
        </div>
        <div id="files_field">
          
            
          

        </div>


      </div>
      <div id="comment_height">
        <div id="top">
          <form action="http://demo.fedena.com/groups/9/group_posts/13/group_post_comments" id="comment_form" method="post" onsubmit="new Ajax.Request(&#39;/groups/9/group_posts/13/group_post_comments&#39;, {asynchronous:true, evalScripts:true, onLoaded:function(request){$(&#39;loading&#39;).hide();}, onLoading:function(request){$(&#39;loading&#39;).show();}, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg="></div>
            <div id="er"></div>
            <div class="label-field-pair" id="add_comment">
              <div class="label-container1"><label>Add your comments</label></div>
              <div id="img_load">
                <img align="absmiddle" alt="Loader" border="0" id="loading" src="./student_parent_discuss_files/loader.gif" style="display: none;">
              </div>
              <div class="text-area-bg"><textarea cols="50" id="group_post_comment_comment_body" name="group_post_comment[comment_body]" rows="5"></textarea></div>
              <div id="go"><input id="13" name="commit" type="submit" value="Submit"></div>
            </div>
          </form>
        </div>
        <div class="extender"></div>
        <div id="down">
          <table class="commenttable">
            <tbody><tr>
              <td id="ajax">
                <table> <tbody><tr>
    <td id="cmnt" colspan="3">
      <table><tbody><tr><td><h3><a name="comments">Comments</a></h3></td>
          <td><div id="load"> <img align="absmiddle" alt="Loader" border="0" id="loader" src="./student_parent_discuss_files/loader.gif" style="display: none;">
            </div></td></tr></tbody></table>
    </td>
  </tr>
  
    <tr><td>No Recent Comments Found.</td></tr>
    


</tbody></table>
<div id="see">
  
</div>
              </td>
            </tr>
          </tbody></table>

        </div>
      </div>
    </div>
    <div id="part2">
      <div id="main">
        <div id="one">
        </div>
        <div id="two">
          <div class="red_heading2">
            <h3>Members</h3>

          </div>
          <div class="content2">
            
              
                
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
                
              

            

            <div id="members"> <a href="http://demo.fedena.com/groups/9/members">See all members</a></div>

          </div>
          <div class="red_heading2">
            <h3>My Group</h3>
          </div>
          <div class="content2">
            
              <div class="group_name">
                <a href="http://demo.fedena.com/groups/9">Parents</a>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

       <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>