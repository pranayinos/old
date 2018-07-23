    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/edit2.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
     <?php /*?> <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar --><?php */?>
      <div id="fullcontent"> 
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
  <h1>Timetable</h1>
  <h3>Edit - 10 - 2010 B </h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<script type="text/javascript">

var selected_divs = new Array();

function update_selected_divs(id) {
  var exists_in_list = 0;
  for (x in selected_divs)
    if(id == selected_divs[x]){
      exists_in_list = 1;
      selected_divs.splice(x, 1)
      $('drop_' + id).className = "drop";
    }
  if(!exists_in_list){
    $('drop_' + id).className = "selected_div";
    selected_divs.push(id);
  }
}

function clear_selected_divs() {
  selected_divs = [];
}

function make_ajax_calls(tte_id, emp_sub_id){
    if (selected_divs.length == 0) {
        new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
    }
    else if (selected_divs.length == 1) {
        new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
        if (selected_divs[0] == tte_id) selected_divs.pop();
    }
    else {
        var exists_in_list = 0;
        for (x in selected_divs)
            if(tte_id == selected_divs[x])
              exists_in_list = 1;
        if (exists_in_list) {
            tte_list = selected_divs.join(',');
            new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_list + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
            selected_divs = [];
        }
        else
            new Ajax.Updater('timetable', '/timetable/update_multiple_timetable_entries2', {asynchronous:true, evalScripts:true, onSuccess:function(request){clear_selected_divs()}, parameters:'emp_sub_id=' + emp_sub_id + '&tte_ids=' + tte_id + '&authenticity_token=' + encodeURIComponent('1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=')})
    }
}
</script>

<div id="fullpage-yield">
  <div id="loadingmsg"></div>
  <div class="generate">
    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU="></div>
    
  <input id="timetable_batch_id" name="timetable[batch_id]" type="hidden" value="14">
    <input class="submit-button" name="commit" onClick="$(&#39;loadingmsg&#39;).innerHTML= &#39;&lt;img align=&quot;absmiddle&quot; alt=&quot;Loader&quot; border=&quot;0&quot; id=&quot;generating&quot; src=&quot;/images/loader.gif?1326265752&quot; /&gt;Time table is being generated.Please stay on the page" type="submit" value="Publish Timetable">
  </form>


  </div>
  <div id="timetable">
    



  

  

<div id="fullbox">
  <table border="0" align="center" width="100%" id="table" cellspacing="0">
    <tbody><tr>

      <td class="loader">
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
        &nbsp;</td><!--timetable_td_tl -->
      <td class="td-blank"></td>
      
        <td class="td"><div class="top">09:30AM - 10:30AM</div></td>
      
        <td class="td"><div class="top">10:30AM - 11:30AM</div></td>
      
        <td class="td"><div class="top">11:30AM - 12:30PM</div></td>
      
        <td class="td"><div class="top">01:30PM - 02:00PM</div></td>
      
        <td class="td"><div class="top">02:30PM - 03:30PM</div></td>
      
        <td class="td"><div class="top">03:30PM - 04:30PM</div></td>
      
    </tr> <!-- timetable_tr -->
    <tr class="blank">
      <td></td>
      <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
        <td></td>
      
    </tr>
      <tr>
        <td><div class="name">MON</div></td>
        <td class="td-blank"></td>
          <td class="td">
            <div id="drop_359" class="drop" onClick="update_selected_divs(&#39;359&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_359">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_359", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(359, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_360" class="drop" onClick="update_selected_divs(&#39;360&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_360">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_360", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(360, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_361" class="drop" onClick="update_selected_divs(&#39;361&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_361">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_361", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(361, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_362" class="drop" onClick="update_selected_divs(&#39;362&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_362">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_362", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(362, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_363" class="drop" onClick="update_selected_divs(&#39;363&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_363">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_363", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(363, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_364" class="drop" onClick="update_selected_divs(&#39;364&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_364">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_364", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(364, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">TUE</div></td>
        <td class="td-blank"></td>
          <td class="td">
            <div id="drop_365" class="drop" onClick="update_selected_divs(&#39;365&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_365">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_365", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(365, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_366" class="drop" onClick="update_selected_divs(&#39;366&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_366">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_366", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(366, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_367" class="drop" onClick="update_selected_divs(&#39;367&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_367">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_367", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(367, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_368" class="drop" onClick="update_selected_divs(&#39;368&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_368">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_368", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(368, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_369" class="drop" onClick="update_selected_divs(&#39;369&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_369">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_369", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(369, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_370" class="drop" onClick="update_selected_divs(&#39;370&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_370">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_370", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(370, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">WED</div></td>
        <td class="td-blank"></td>
          <td class="td">
            <div id="drop_371" class="drop" onClick="update_selected_divs(&#39;371&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_371">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_371", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(371, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_372" class="drop" onClick="update_selected_divs(&#39;372&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_372">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_372", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(372, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_373" class="drop" onClick="update_selected_divs(&#39;373&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_373">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_373", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(373, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_374" class="drop" onClick="update_selected_divs(&#39;374&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_374">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_374", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(374, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_375" class="drop" onClick="update_selected_divs(&#39;375&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_375">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_375", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(375, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_376" class="drop" onClick="update_selected_divs(&#39;376&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_376">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_376", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(376, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">THU</div></td>
        <td class="td-blank"></td>
          <td class="td">
            <div id="drop_377" class="drop" onClick="update_selected_divs(&#39;377&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_377">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_377", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(377, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_378" class="drop" onClick="update_selected_divs(&#39;378&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_378">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_378", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(378, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_379" class="drop" onClick="update_selected_divs(&#39;379&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_379">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_379", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(379, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_380" class="drop" onClick="update_selected_divs(&#39;380&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_380">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_380", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(380, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_381" class="drop" onClick="update_selected_divs(&#39;381&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_381">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_381", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(381, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_382" class="drop" onClick="update_selected_divs(&#39;382&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_382">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_382", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(382, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">FRI</div></td>
        <td class="td-blank"></td>
          <td class="td">
            <div id="drop_383" class="drop" onClick="update_selected_divs(&#39;383&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_383">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_383", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(383, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_384" class="drop" onClick="update_selected_divs(&#39;384&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_384">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_384", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(384, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_385" class="drop" onClick="update_selected_divs(&#39;385&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_385">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_385", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(385, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_386" class="drop" onClick="update_selected_divs(&#39;386&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_386">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_386", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(386, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_387" class="drop" onClick="update_selected_divs(&#39;387&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_387">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_387", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(387, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
                  <td class="td">
            <div id="drop_388" class="drop" onClick="update_selected_divs(&#39;388&#39;);" style="position: relative; ">
              <div class="tt-subject" id="subject_name_388">
                <div class="subject">
                  

                </div>
                <div class="employee">
                                    


    </div>
              </div>
            </div>
            <script type="text/javascript">
//<![CDATA[
Droppables.add("drop_388", {accept:'employees_subject', onDrop:function(draggable_element, droppable_element) { $(droppable_element).highlight(); make_ajax_calls(388, draggable_element.id.split('_').last()); }})
//]]>
</script>          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
    
  </tbody></table>
</div>

  </div>
 
<h4>Add Subjects/Employee</h4>
  <div id="subjects-select">
    <div class="label-field-pair">
      <div class="text-input-bg">
        
  
    <select id="timetable_entries_subject_id" name="timetable_entries[subject_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;employee-list&#39;, &#39;/timetable/update_employees&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;subject_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;1Tj7Jo3vbZhNoU22Qb7RY1qSN3sEPtevGF2wVGJb4PU=&#39;)})"><option value="">Select Subject</option>
<option value="65">english</option>
<option value="66">maths</option>
<option value="67">science</option>
<option value="68">social</option>
<option value="69">hindi</option></select>
      </div>
    </div>
  <div id="employee-list">

  <h5>No teacher associated to this subject</h5>
</div>
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>
           