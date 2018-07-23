<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/view.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
   
<div id="fullcontent">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>Select batch to view</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="fullpage-yield">
<form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI="></div>
<div class="label-field-pair">
<label for="timetable_entry_course_id">Select a Batch</label>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
<div class="text-input-bg">
<select id="timetable_entry_course_id" name="timetable_entry[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/timetable/update_timetable_view&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
</div>
</div>
</form>
<div class="extender"> </div>
<div id="timetable_view">

<div id="fullbox">

  <table border="0" align="center" width="100%" id="table" cellspacing="0">
    <tbody><tr>
      <td width="102" class="loader">
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
        &nbsp;</td>
      <!--timetable_td_tl -->
      <td width="42" class="td-blank"></td>
      
        <td width="131" class="td"><div class="top">09:30AM - 10:30AM</div></td>
      
        <td width="131" class="td"><div class="top">10:30AM - 11:30AM</div></td>
      
        <td width="131" class="td"><div class="top">11:30AM - 12:30PM</div></td>
      
        <td width="131" class="td"><div class="top">01:30PM - 02:00PM</div></td>
      
        <td width="131" class="td"><div class="top">02:30PM - 03:30PM</div></td>
      
        <td width="135" class="td"><div class="top">03:30PM - 04:30PM</div></td>
      
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
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">TUE</div></td>
        <td class="td-blank"></td>
          <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">WED</div></td>
        <td class="td-blank"></td>
          <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">THU</div></td>
        <td class="td-blank"></td>
          <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
          <tr>
        <td><div class="name">FRI</div></td>
        <td class="td-blank"></td>
          <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
                  <td class="td">
            
            <div class="drop">
              <div class="tt-subject">
                <div class="subject">
                  
                    
      
                    
                  
                </div>

                
                  <div class="employee">
                    
                      
                    
                  </div>
                
              </div>
            </div>

          </td><!--timetable_td -->
        
      </tr><!--timetable_tr -->
    
  </tbody></table>
</div>

<a href="#" class="user_button" target="_blank"> ► PDF Report</a>
</div>
</div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>