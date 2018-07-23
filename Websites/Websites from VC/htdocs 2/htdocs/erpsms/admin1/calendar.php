<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files -----------><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/cal.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
<?php /*?>   <?php include("include/sidebar.php")?>
<?php */?>           
      <!-- end of side bar -->
      
<div id="fullcontent" style="margin-left:100px;">
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
<a href="#" onClick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/new_calendar&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;new_month=6&#39;+ &#39;&amp;passed_date=2012-07-07&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">◄</a>
</div>
<div class="month">
July 2012
</div>
<div class="next">
<a href="#" onClick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/calendar/new_calendar&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;new_month=8&#39;+ &#39;&amp;passed_date=2012-07-07&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">►</a>
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
<div class="link"><a href="#">Add</a>
<span>1</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>2</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>3</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>4</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>5</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>6</span></div>
<div class="link-group">
</div>
</td>
<td class="today">
<div class="link"><a href="#">Add</a>
<span>7</span></div>
<div class="link-group">
</div>
</td>
</tr>
<tr class="day">
<td class="">
<div class="link"><a href="#">Add</a>
<span>8</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>9</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>10</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>11</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>12</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>13</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>14</span></div>
<div class="link-group">
</div>
</td>
</tr>
<tr class="day">
<td class="">
<div class="link"><a href="#">Add</a>
<span>15</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>16</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>17</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>18</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>19</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>20</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>21</span></div>
<div class="link-group">
</div>
</td>
</tr>
<tr class="day">
<td class="">
<div class="link"><a href="#">Add</a>
<span>22</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>23</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>24</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>25</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>26</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>27</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>28</span></div>
<div class="link-group">
</div>
</td>
</tr>
<tr class="day">
<td class="">
<div class="link"><a href="#">Add</a>
<span>29</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>30</span></div>
<div class="link-group">
</div>
</td>
<td class="">
<div class="link"><a href="#">Add</a>
<span>31</span></div>
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
  <?php include("include/footer.php")?>