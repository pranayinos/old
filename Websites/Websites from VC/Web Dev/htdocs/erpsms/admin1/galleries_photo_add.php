<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/photo_add.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
      <!-- end of side bar -->
      <div id="fullcontent"> <script>
  function add_recipient(recipient) {
    var recipient_list = new Array();
    if($('recipients').value != '')
      recipient_list = $('recipients').value.split(',');
    else
      recipient_list = [];

    var recipient_exists = false;

    for(i=0; i<recipient_list.length; i++)
      if(recipient_list[i] == recipient)
        recipient_exists = true;

    if(!recipient_exists) {
      recipient_list.push(recipient);
    }
    $('recipients').value = recipient_list.join();
    recipients = $('recipients').value;
new Ajax.Request('/galleries/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }

  function add_all_recipient(recipient) {
    var recipient_list = new Array();
    if($('recipients').value != '')
      recipient_list = $('recipients').value.split(',');
    else
      recipient_list = [];

    var new_list = recipient.split(',');

    for(i=0;i<new_list.length;i++)
    {
      var recipient_exists = false;
      for(j=0; j<recipient_list.length; j++)
        if(recipient_list[j] == new_list[i])
          recipient_exists = true;
      if(!recipient_exists) recipient_list.push(new_list[i]);
    }

    $('recipients').value = recipient_list.join();
    recipients = $('recipients').value;
new Ajax.Request('/galleries/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }


  function remove_recipient(recipient) {
    recipients = $('recipients').value;
    var recipient_list = new Array();
    recipient_list = $('recipients').value.split(',');

    for(i=0; i<recipient_list.length; i++)
      if (recipient_list[i] == recipient)
    {
      recipient_list.splice(i,1);
      break;
    }

    $('recipients').value = recipient_list.join();
    recipients = $('recipients').value;
new Ajax.Request('/galleries/update_recipient_list', {asynchronous:true, evalScripts:true, parameters:'recipients='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})



  }





  function add_recipient1(recipient) {
    var recipient_list = new Array();
    if($('recipients1').value != '')
      recipient_list = $('recipients1').value.split(',');
    else
      recipient_list = [];

    var recipient_exists = false;

    for(i=0; i<recipient_list.length; i++)
      if(recipient_list[i] == recipient)
        recipient_exists = true;

    if(!recipient_exists) {
      recipient_list.push(recipient);
    }
    $('recipients1').value = recipient_list.join();
    recipients = $('recipients1').value;
new Ajax.Request('/galleries/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients1='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }

  function add_all_recipient1(recipient) {
    var recipient_list = new Array();
    if($('recipients1').value != '')
      recipient_list = $('recipients1').value.split(',');
    else
      recipient_list = [];

    var new_list = recipient.split(',');

    for(i=0;i<new_list.length;i++)
    {
      var recipient_exists = false;
      for(j=0; j<recipient_list.length; j++)
        if(recipient_list[j] == new_list[i])
          recipient_exists = true;
      if(!recipient_exists) recipient_list.push(new_list[i]);
    }

    $('recipients1').value = recipient_list.join();
    recipients = $('recipients1').value;
new Ajax.Request('/galleries/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients1='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})
  }


  function remove_recipient1(recipient) {
    recipients = $('recipients1').value;
    var recipient_list = new Array();
    recipient_list = $('recipients1').value.split(',');

    for(i=0; i<recipient_list.length; i++)
      if (recipient_list[i] == recipient)
    {
      recipient_list.splice(i,1);
      break;
    }

    $('recipients1').value = recipient_list.join();
    recipients = $('recipients1').value;
new Ajax.Request('/galleries/update_recipient_list1', {asynchronous:true, evalScripts:true, parameters:'recipients1='+recipients + '&authenticity_token=' + encodeURIComponent('kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=')})



  }


</script>
<div id="content-header">
  <img src="../images/galleries_files/photo.png">
  <h1>Gallery</h1>
  <h3>Upload User Photo</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">

  
  <div class="box">

    <form action="#" enctype="multipart/form-data" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
      
      <div id="left_field">
        <div class="label-field-pair">
          <label for="course">Select category<span class="necessary-field">*</span></label>
          <div class="text-input-bg">

            <select id="select_category_category" name="select_category[category]" with="&#39;category_id=&#39;+value"><option value="">Select category</option>
</select>
          </div>
        </div>


        <div class="create-options">
        </div>
        <script>
          (function($){$.fn.filestyle=function(options){var settings={width:250};if(options){$.extend(settings,options);};return this.each(function(){var self=this;var wrapper=$("<div>").css({"width":settings.imagewidth+"px","height":settings.imageheight+"px","background":"url("+settings.image+") 0 0 no-repeat","background-position":"right","display":"inline","position":"absolute","overflow":"hidden"});var filename=$('<input class="file">').addClass($(self).attr("class")).css({"display":"inline","width":settings.width+"px"});$(self).before(filename);$(self).wrap(wrapper);$(self).css({"position":"relative","height":settings.imageheight+"px","width":settings.width+"px","display":"inline","cursor":"pointer","opacity":"0.0"});if($.browser.mozilla){if(/Win/.test(navigator.platform)){$(self).css("margin-left","-142px");}else{$(self).css("margin-left","-168px");};}else{$(self).css("margin-left",settings.imagewidth-settings.width+"px");};$(self).bind("change",function(){filename.val($(self).val());});});};})(jQuery);
        </script>
        <div class="label-field-pair">
          <label for="student_image_file">Select photo (5MB)<span class="necessary-field">*</span></label>
          <div class="text-input-bg" id="browse-style"><input id="photo_photo" name="photo[photo]" size="14" type="file"></div>

        </div>
        <div class="label-field-pair">
          <label class="student_grade">Photo Name<span class="necessary-field">*</span></label>
          <div class="input-container"><input id="photo_name" name="photo[name]" size="30" type="text"></div>
        </div>
        <input id="recipients" name="recipients" type="hidden" value="">
        <input id="recipients1" name="recipients1" type="hidden" value="">



        <div class="extender"></div>

        <div id="select-employee-department">
          
          
          
<div class="label-field-pair">
  <label for="department">Department</label>
  <div class="text-input-bg">

    <select id="select_department_department" name="select_department[department]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/galleries/to_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select>
  </div>
</div>

          <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="float: right; margin-top: -32px; display: none; ">
        </div>


        <div class="label-field-to">
          <div id="to_users">



<div class="label-field-pair1">
  <label for="student_grade">Select Employees</label>
  <div class="scrolable">
    <div class="scroll-inside">
      <div class="hover"><a href="#" class="all" onClick="add_all_recipient(&#39;62&#39;)">Select All  <span>Add</span></a>
       
      </div>
      
        
        <div class="hover"><a href="#" before="Element.show(&#39;loader&#39;)" class="individual" onClick="add_recipient(62)" success="Element.hide(&#39;loader&#39;)">ambujakshan <span>Add</span></a>
         
        </div>
      
    </div>
  </div>
</div>



</div>
        </div>
        <div class="extender"></div>



        <div class="extender"></div>
        <div id="select-student-course">
          
          
          
<div class="label-field-pair">
  <label for="course">Batches</label>
  <div class="text-input-bg">

    <select id="select_batch_batch" name="select_batch[batch]" onChange="Element.show(&#39;loader1&#39;); new Ajax.Request(&#39;/galleries/to_students&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader1&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select course</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>

  </div>
</div>
          <img align="absmiddle" alt="Loader" border="0" id="loader1" src="../images/loader.gif" style="float: right; margin-top: -32px; display: none; ">
        </div>
        <div class="label-field-to">
          <div id="to_users2">



<div class="label-field-pair1">
  <label for="student_grade">Select Students</label>
  <div class="scrolable">
    <div class="scroll-inside">
      <div class="hover"><a href="#" class="all" onClick="add_all_recipient1(&#39;&#39;)">Select All  <span>Add</span></a>
       
      </div>
      
    </div>
  </div>
</div>



</div>
        </div>

      </div>

      <div class="message">
        <div id="recipient-list"></div><br>
        <div id="recipient-list1">
<div class="label-field-pair">
  <label for="student_grade">Students</label>
  <div class="scrolable">
    
    <div class="scroll-inside">
      

    </div>
  </div>
</div>
<div class="extender"></div>
</div>
      </div>

      
      <div class="extender"></div>
      <div id="save-button">
        <input class="submit_button" name="commit" type="submit" value="► Save">
      </div>


    </form>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>
  
