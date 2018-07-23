<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
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
  <img alt="User_profile_logo" src="../images/user_profile/user_profile_logo.jpg">
  <h1>All Users</h1>
  <h3>Details about user</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
  <div class="all-user">
    <div class="label-field-pair">
      <div class="text-input-bg"><select id="user_type_type" name="user_type[type]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/user/list_user&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;user_type=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;7zBgtDNBLzeSknsH4x1nKQkKXrQgISSPlR1cjmAACm8=&#39;)})"><option value="">Select a role</option>
<option value="Admin">Admin</option>
<option value="Employee">Employee</option>
<option value="Student">Student</option>
<option value="Parent">Parent</option></select>
      </div>
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">

    </div>
    <div id="student_user"></div>
    <div id="employee_user">
 <div class="label-field-pair">

<div class="text-input-bg"><select id="user_type_type" name="user_type[type]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/user/list_employee_user&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;7zBgtDNBLzeSknsH4x1nKQkKXrQgISSPlR1cjmAACm8=&#39;)})"><option value="">Select a department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select>

</div>
 </div>

</div>
  </div>
  <div id="users">

  <div class="students-table">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>
          Sl  no.
        </td>
        <td>
          Name
        </td>
        <td>
        Username
        </td>
        <td>
        
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      
        <tr class="tr-odd">
          <td class="col-1">
            1
          </td>
          <td class="col-2">
      ambujakshan  
          </td>
          <td class="col-3">
            e4
          </td>
          <td class="col-4">
            <a href="?page=user-profile">View Profile</a>
          </td>

        </tr>
      
    </tbody></table>
  </div>
</div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>