<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_general_show.css" media="screen" rel="stylesheet" type="text/css">
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
    
  </ul>
</div>
<div id="fullpage-yield">
  
  <div>
    <div id="part1">
      <div>
        <div class="red_heading">
          <h3>General Opinion</h3>
        </div>
        <div id="post_details">
          
            <div class="bread_crumb1">
              Posted by <span id="posters_name">Fedena</span> <span class="translation_missing">en, on</span> Monday, 12 March 2012
            </div>
          
          <span class="bread_crumb2"><a href="#"><span id="comments_no">
                3 Comments
              </span></a></span>
        </div>
        <div id="files_field1">
          

        </div>
        <div class="textt">
          Just to find out what you think about our new computer laboratory. Comments please....
        </div>
        <div id="files_field">
          

        </div>


      </div>
      <div id="comment_height">
        <div id="top">
          <form action="#" id="comment_form" method="post" onsubmit="new Ajax.Request(&#39;/groups/9/group_posts/10/group_post_comments&#39;, {asynchronous:true, evalScripts:true, onLoaded:function(request){$(&#39;loading&#39;).hide();}, onLoading:function(request){$(&#39;loading&#39;).show();}, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg="></div>
            <div id="er"></div>
            <div class="label-field-pair" id="add_comment">
              <div class="label-container1"><label>Add your comments</label></div>
              <div id="img_load">
                <img align="absmiddle" alt="Loader" border="0" id="loading" src="../images/loader.gif" style="display: none;">
              </div>
              <div class="text-area-bg"><textarea cols="50" id="group_post_comment_comment_body" name="group_post_comment[comment_body]" rows="5"></textarea></div>
              <div id="go"><input id="10" name="commit" type="submit" value="Submit"></div>
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
          <td><div id="load"> <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
            </div></td></tr></tbody></table>
    </td>
  </tr>
  
  
    <tr>
      

        <td><div id="cmnt_name">
            SUMESH
          </div></td>
      
      <td>
        <div id="time">
          4 monthsago
        </div>

      </td>
      

        <td><div id="commentdel">
            <a href="#" onclick="if (confirm(&#39;Do you really want to delete this comment?&#39;)) { new Ajax.Updater(&#39;group_post_comments&#39;, &#39;/groups/9/group_posts/10/group_post_comments/18&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;)}); }; return false;">Delete</a>
          </div></td>
      
      
    </tr>
    <tr>
      <td colspan="3">
        <div id="commentbody">
          Members

KIRAN
SUMESH
PRIYA
ANITHA
AKHILA
SOORAJ
SOUMYA
ATHIRA
FARZANA
110
B.A.HIS.I st SEM - 2011-12
ABHIRAJ
        </div>
        <hr class="hrline1">
      </td>
    </tr>
    <tr>

    </tr>
  
    <tr>
      

        <td><div id="cmnt_name">
            SUMESH
          </div></td>
      
      <td>
        <div id="time">
          4 monthsago
        </div>

      </td>
      

        <td><div id="commentdel">
            <a href="#" onclick="if (confirm(&#39;Do you really want to delete this comment?&#39;)) { new Ajax.Updater(&#39;group_post_comments&#39;, &#39;/groups/9/group_posts/10/group_post_comments/17&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;)}); }; return false;">Delete</a>
          </div></td>
      
      
    </tr>
    <tr>
      <td colspan="3">
        <div id="commentbody">
          Just to find out what you think about our new computer laboratory. Comments please....
        </div>
        <hr class="hrline1">
      </td>
    </tr>
    <tr>

    </tr>
  
    <tr>
      

        <td><div id="cmnt_name">
            SUMESH
          </div></td>
      
      <td>
        <div id="time">
          4 monthsago
        </div>

      </td>
      

        <td><div id="commentdel">
            <a href="http://demo.fedena.com/groups/9/group_posts/10#" onclick="if (confirm(&#39;Do you really want to delete this comment?&#39;)) { new Ajax.Updater(&#39;group_post_comments&#39;, &#39;/groups/9/group_posts/10/group_post_comments/16&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg=&#39;)}); }; return false;">Delete</a>
          </div></td>
      
      
    </tr>
    <tr>
      <td colspan="3">
        <div id="commentbody">
          its Good
        </div>
        <hr class="hrline1">
      </td>
    </tr>
    <tr>

    </tr>
  
  


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
                
              

            

            <div id="members"> <a href="?page=student_see_allmembers">See all members</a></div>

          </div>
          <div class="red_heading2">
            <h3>My Group</h3>
          </div>
          <div class="content2">
            
              <div class="group_name">
                <a href="?page=student_parents_discussion">Parents</a>
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