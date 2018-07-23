<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/new1.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Data2" src="../images/data2.png">
  <h1>Additional fields</h1>
  <h3>Create Fields</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=school_assets">Additional fields</a></li>
  </ul>
</div>

<div id="fullpage-yield">

  
  <form action="#" class="new_school_asset" id="new_school_asset" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
    
    <div class="label-field-pair">
      <div class="label-container"><label for="school_asset_asset_name">Name</label></div>
      <div class="input-container"><input id="school_asset_asset_name" name="school_asset[asset_name]" size="30" type="text"></div>
    </div>
    <div class="label-field-pair">
      <div class="label-container"><label for="school_asset_asset_description">Description</label></div>
      <div class="input-container"><input id="school_asset_asset_description" name="school_asset[asset_description]" size="30" type="text"></div>
    </div>
    <hr>
    <div class="form">
      
        <div class="fields label-field-pair">
  <div class="label-field-pair">
    <div class="label-container"><label for="school_asset_asset_fields_attributes_0_field_name">Field name</label></div>
    <input id="school_asset_asset_fields_attributes_0__destroy" name="school_asset[asset_fields_attributes][0][_destroy]" type="hidden"><a class="delete_button_img" href="#" onClick="remove_fields(this); return false;"> </a>
    <div class="input-container">  <input id="school_asset_asset_fields_attributes_0_field_name" name="school_asset[asset_fields_attributes][0][field_name]" size="50" type="text"></div>
  </div>
  <div class="label-field-pair">
    <div class="label-container"> <label for="school_asset_asset_fields_attributes_0_field_type">Input method</label></div>
    <div class="text-input-bg"><select class="input-type-select" id="school_asset_asset_fields_attributes_0_field_type" name="school_asset[asset_fields_attributes][0][field_type]" onChange="toggle_custom(value)"><option value="text">Text Box</option>
<option value="belongs_to">Select Box</option>
<option value="has_many">Check Box</option></select>
    </div>
  </div>
  <div class="custom" style="display: none; ">
    
    <div>
      <a class="add_button_img" href="#" onClick="add_fields(this, &quot;asset_field_options&quot;, &quot;&lt;div class=\&quot;fields label-field-pair\&quot;&gt;\n  &lt;label for=\&quot;school_asset_asset_fields_attributes_0_asset_field_options_attributes_new_asset_field_options_\&quot;&gt;&lt;\/label&gt;\n  &lt;input id=\&quot;school_asset_asset_fields_attributes_0_asset_field_options_attributes_new_asset_field_options_option\&quot; name=\&quot;school_asset[asset_fields_attributes][0][asset_field_options_attributes][new_asset_field_options][option]\&quot; size=\&quot;30\&quot; type=\&quot;text\&quot; /&gt;\n  &lt;input id=\&quot;school_asset_asset_fields_attributes_0_asset_field_options_attributes_new_asset_field_options__destroy\&quot; name=\&quot;school_asset[asset_fields_attributes][0][asset_field_options_attributes][new_asset_field_options][_destroy]\&quot; type=\&quot;hidden\&quot; /&gt;&lt;a class=\&quot;delete_button_img\&quot; href=\&quot;#\&quot; onclick=\&quot;remove_fields(this); return false;\&quot;&gt;&lt;\/a&gt;\n&lt;\/div&gt;&quot;); return false;"><img alt="Add_2" border="0" src="./school_assets-new_files/add_2.png"> Add option</a>
    </div>
  </div>
  <hr>
</div>

      
      <div>
        <a class="add_button_img" href="#" onClick="add_fields(this, &quot;asset_fields&quot;, &quot;&lt;div class=\&quot;fields label-field-pair\&quot;&gt;\n  &lt;div class=\&quot;label-field-pair\&quot;&gt;\n    &lt;div class=\&quot;label-container\&quot;&gt;&lt;label for=\&quot;school_asset_asset_fields_attributes_new_asset_fields_field_name\&quot;&gt;Field name&lt;\/label&gt;&lt;\/div&gt;\n    &lt;input id=\&quot;school_asset_asset_fields_attributes_new_asset_fields__destroy\&quot; name=\&quot;school_asset[asset_fields_attributes][new_asset_fields][_destroy]\&quot; type=\&quot;hidden\&quot; /&gt;&lt;a class=\&quot;delete_button_img\&quot; href=\&quot;#\&quot; onclick=\&quot;remove_fields(this); return false;\&quot;&gt; &lt;\/a&gt;\n    &lt;div class=\&quot;input-container\&quot;&gt;  &lt;input id=\&quot;school_asset_asset_fields_attributes_new_asset_fields_field_name\&quot; name=\&quot;school_asset[asset_fields_attributes][new_asset_fields][field_name]\&quot; size=\&quot;50\&quot; type=\&quot;text\&quot; /&gt;&lt;\/div&gt;\n  &lt;\/div&gt;\n  &lt;div class=\&quot;label-field-pair\&quot;&gt;\n    &lt;div class=\&quot;label-container\&quot;&gt; &lt;label for=\&quot;school_asset_asset_fields_attributes_new_asset_fields_field_type\&quot;&gt;Input method&lt;\/label&gt;&lt;\/div&gt;\n    &lt;div class=\&quot;text-input-bg\&quot;&gt;&lt;select class=\&quot;input-type-select\&quot; id=\&quot;school_asset_asset_fields_attributes_new_asset_fields_field_type\&quot; name=\&quot;school_asset[asset_fields_attributes][new_asset_fields][field_type]\&quot; onChange=\&quot;toggle_custom(value)\&quot;&gt;&lt;option value=\&quot;text\&quot;&gt;Text Box&lt;\/option&gt;\n&lt;option value=\&quot;belongs_to\&quot;&gt;Select Box&lt;\/option&gt;\n&lt;option value=\&quot;has_many\&quot;&gt;Check Box&lt;\/option&gt;&lt;\/select&gt;\n    &lt;\/div&gt;\n  &lt;\/div&gt;\n  &lt;div class=\&quot;custom\&quot; style=\&quot;display: none\&quot; &gt;\n    \n    &lt;div&gt;\n      &lt;a class=\&quot;add_button_img\&quot; href=\&quot;#\&quot; onclick=\&quot;add_fields(this, &amp;quot;asset_field_options&amp;quot;, &amp;quot;&amp;lt;div class=\\&amp;quot;fields label-field-pair\\&amp;quot;&amp;gt;\\n  &amp;lt;label for=\\&amp;quot;school_asset_asset_fields_attributes_new_asset_fields_asset_field_options_attributes_new_asset_field_options_\\&amp;quot;&amp;gt;&amp;lt;\\/label&amp;gt;\\n  &amp;lt;input id=\\&amp;quot;school_asset_asset_fields_attributes_new_asset_fields_asset_field_options_attributes_new_asset_field_options_option\\&amp;quot; name=\\&amp;quot;school_asset[asset_fields_attributes][new_asset_fields][asset_field_options_attributes][new_asset_field_options][option]\\&amp;quot; size=\\&amp;quot;30\\&amp;quot; type=\\&amp;quot;text\\&amp;quot; /&amp;gt;\\n  &amp;lt;input id=\\&amp;quot;school_asset_asset_fields_attributes_new_asset_fields_asset_field_options_attributes_new_asset_field_options__destroy\\&amp;quot; name=\\&amp;quot;school_asset[asset_fields_attributes][new_asset_fields][asset_field_options_attributes][new_asset_field_options][_destroy]\\&amp;quot; type=\\&amp;quot;hidden\\&amp;quot; /&amp;gt;&amp;lt;a class=\\&amp;quot;delete_button_img\\&amp;quot; href=\\&amp;quot;#\\&amp;quot; onclick=\\&amp;quot;remove_fields(this); return false;\\&amp;quot;&amp;gt;&amp;lt;\\/a&amp;gt;\\n&amp;lt;\\/div&amp;gt;&amp;quot;); return false;\&quot;&gt;&lt;img alt=\&quot;Add_2\&quot; border=\&quot;0\&quot; src=\&quot;/images/buttons/add_2.png?1338757381\&quot; /&gt; Add option&lt;\/a&gt;\n    &lt;\/div&gt;\n  &lt;\/div&gt;\n  &lt;hr/&gt;\n&lt;\/div&gt;\n&quot;); return false;"><img alt="Add_2" border="0" src="../images/add_2.png"> Add field</a>
      </div>
    </div>
    <input class="submit_button" id="school_asset_submit" name="commit" type="submit" value="Save">
  </form>
</div> </div>

      <div class="extender"></div>
    </div>
 <!-- footer -->
  <?php include("include/footer.php")?>
 