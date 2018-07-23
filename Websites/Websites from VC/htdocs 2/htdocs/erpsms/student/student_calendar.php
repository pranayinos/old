<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_cal_ index.css" media="screen" rel="stylesheet" type="text/css">
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
      
      
      <div id="fullcontent"> 
<!--<div id="tooltip_box">
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; float:left;">
  <div id="tooltip_header">    
  </div>
</div>-->

<div id="calendar">
  
<div id="calendar-legend">
  <div id="legend-entry">
    <div id="legend-symbol"> <div class="legend-icon" style="background:#000000;"></div></div>
    <div id="legend-text">Events</div>
  </div>
  <div id="legend-entry">
    <div id="legend-symbol"> <div class="legend-icon" style="background:#0C6C92;"></div></div>
    <div id="legend-text">Examinations</div>
  </div>
  <div id="legend-entry">
    <div id="legend-symbol"> <div class="legend-icon" style="background:#00b400;"></div></div>
    <div id="legend-text">Holidays</div>
  </div>
  <div id="legend-entry">
    <div id="legend-symbol"> <div class="legend-icon" style="background:#b40000;"></div></div>
    <div id="legend-text">Dues</div>
  </div>
</div>
<br>
<div id="head-month">
  <div class="header">
    <div class="prev">
      <a href="#" onclick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/new_calendar&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;new_month=6&#39;+ &#39;&amp;passed_date=2012-07-21&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;">◄</a>
    </div>
    <div class="month">
      July 2012
    </div>
    <div class="next">
      <a href="#" onclick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/new_calendar&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;new_month=8&#39;+ &#39;&amp;passed_date=2012-07-21&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;">►</a>
    </div>
    <div class="extender"></div>
  </div>
</div>


<table id="calendar-table" align="center" width="100%">
  <tbody>
    <tr class="week">
      
      
        <td><span>Sunday</span></td>
      
        <td><span>Monday</span></td>
      
        <td><span>Tuesday</span></td>
      
        <td><span>Wednesday</span></td>
      
        <td><span>Thursday</span></td>
      
        <td><span>Friday</span></td>
      
        <td><span>Saturday</span></td>
      
    </tr>
    <tr class="blank"></tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
                
                  <span>1</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>2</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>3</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>4</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>5</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-05&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>6</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-06&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>7</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-07&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
      </tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
                
                  <span>8</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-08&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>9</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-09&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>10</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-10&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>11</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-11&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>12</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-12&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>13</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-13&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>14</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-14&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
      </tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
                
                  <span>15</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-15&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>16</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-16&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>17</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-17&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>18</span>
                <div class="link-group">
                  
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_holiday_event_tooltip/2012-07-18&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#00b400;"></div></a>
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>19</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>20</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="today">
            
              
                
                  <span>21</span>
                <div class="link-group">
                  
                    <a class="event" href="#" onclick="new Ajax.Request(&#39;/calendar/%23&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)}); return false;" onmouseover="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/show_event_tooltip/2012-07-21&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><div class="calendar-legend" style="background:#000000;"></div></a>
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
      </tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
                
                  <span>22</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>23</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>24</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>25</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>26</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>27</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>28</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
      </tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
                
                  <span>29</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>30</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
                
                  <span>31</span>
                <div class="link-group">
                  
                  
                  
                  
                    
                  

                </div>

              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
      </tr>
    
      <tr class="day">
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
          
          
          <td class="">
            
              
            
          </td>
        
      </tr>
    
  </tbody>
</table>


<div id="modal-box" style="display:none;"></div>
</div>







 </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>