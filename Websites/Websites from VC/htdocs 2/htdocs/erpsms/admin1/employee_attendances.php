<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/atttendance_index.css" media="screen" rel="stylesheet" type="text/css">
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
<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance</h1>
  <h3>Attendance register</h3>
  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield1">

  <div class="label-field-pair">
          <label for="employee_department_select">Select the department</label>
 <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    <div class="text-input-bg">
      <select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/employee_attendances/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dept_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select the department</option>
<option value="49">admin</option>
<option value="48">finance </option>
<option value="62">Primary Deaprtment</option>
<option value="46">System Admin</option></select>
    </div>
  </div>

 

  <div id="register">
<div class="header">
  <div class="prev">
    <a href="#" onClick="new Ajax.Request(&#39;/employee_attendances/show?dept_id=46&amp;next=2012-06-17&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">◄</a>
  </div>
  <div class="month">
     July 2012
  </div>
  <div class="next">
    <a href="#" >►</a>
  </div>
  <div class="extender"></div>
</div>
<div class="box-1">
<table class="" align="center" width="100%">
  <tbody><tr class="tr-head">
    <td class="head-td-name">Name</td>
    
    
      
        <td class="head-td-date"><div class="day">Sun</div> <div class="date"> 01</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Mon</div> <div class="date"> 02</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Tue</div> <div class="date"> 03</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Wed</div> <div class="date"> 04</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Thur</div> <div class="date"> 05</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Fri</div> <div class="date"> 06</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sat</div> <div class="date"> 07</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sun</div> <div class="date"> 08</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Mon</div> <div class="date"> 09</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Tue</div> <div class="date"> 10</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Wed</div> <div class="date"> 11</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Thur</div> <div class="date"> 12</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Fri</div> <div class="date"> 13</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sat</div> <div class="date"> 14</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sun</div> <div class="date"> 15</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Mon</div> <div class="date"> 16</div></td>
      

    
      
        <td class="head-td-date active"><div class="day">Tue</div> <div class="date"> 17</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Wed</div> <div class="date"> 18</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Thur</div> <div class="date"> 19</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Fri</div> <div class="date"> 20</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sat</div> <div class="date"> 21</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sun</div> <div class="date"> 22</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Mon</div> <div class="date"> 23</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Tue</div> <div class="date"> 24</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Wed</div> <div class="date"> 25</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Thur</div> <div class="date"> 26</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Fri</div> <div class="date"> 27</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sat</div> <div class="date"> 28</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Sun</div> <div class="date"> 29</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Mon</div> <div class="date"> 30</div></td>
      

    
      
        <td class="head-td-date"><div class="day">Tue</div> <div class="date"> 31</div></td>
      

    

  </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        Admin
        <div class="date">
          <span><div>Admin  User</div></span>
        </div>

      </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-01" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-01/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 01 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-02" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-02/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 02 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-03" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-03/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 03 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-04" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-04/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 04 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-05" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-05/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 05 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-06" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-06/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 06 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-07" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-07/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 07 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-08" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-08/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 08 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-09" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-09/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 09 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-10" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-10/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 10 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-11" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-11/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 11 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-12" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-12/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 12 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-13" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-13/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 13 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-14" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-14/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 14 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-15" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-15/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 15 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-16" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-16/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 16 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-17" class="td-mark active">
          
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-17/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 17 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-18" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-18/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 18 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-19" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-19/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 19 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-20" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-20/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 20 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-21" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-21/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 21 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-22" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-22/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 22 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-23" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-23/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 23 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-24" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-24/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 24 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-25" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-25/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 25 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-26" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-26/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 26 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-27" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-27/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 27 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-28" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-28/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 28 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-29" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-29/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 29 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-30" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-30/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 30 <div> Admin  User</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-58-day-2012-07-31" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-31/58&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 31 <div> Admin  User</div></span>
          </div>
        </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        sudhakar
        <div class="date">
          <span><div>sudhakar K  P</div></span>
        </div>

      </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-01" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-01/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 01 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-02" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-02/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 02 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-03" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-03/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 03 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-04" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-04/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 04 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-05" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-05/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 05 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-06" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-06/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 06 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-07" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-07/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 07 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-08" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-08/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 08 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-09" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-09/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 09 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-10" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-10/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 10 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-11" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-11/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 11 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-12" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-12/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 12 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-13" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-13/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 13 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-14" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-14/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 14 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-15" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-15/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 15 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-16" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-16/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 16 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-17" class="td-mark active">
          
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-17/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 17 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-18" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-18/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 18 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-19" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-19/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 19 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-20" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-20/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 20 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-21" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-21/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 21 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-22" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-22/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 22 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-23" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-23/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 23 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-24" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-24/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 24 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-25" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-25/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 25 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-26" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-26/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 26 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-27" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-27/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 27 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-28" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-28/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 28 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-29" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-29/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 29 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-30" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-30/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 30 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-60-day-2012-07-31" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-31/60&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 31 <div> sudhakar K  P</div></span>
          </div>
        </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        sudhakar
        <div class="date">
          <span><div>sudhakar K P</div></span>
        </div>

      </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-01" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-01/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 01 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-02" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-02/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 02 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-03" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-03/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 03 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-04" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-04/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 04 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-05" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-05/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 05 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-06" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-06/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 06 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-07" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-07/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 07 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-08" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-08/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 08 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-09" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-09/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 09 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-10" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-10/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 10 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-11" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-11/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 11 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-12" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-12/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 12 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-13" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-13/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 13 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-14" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-14/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 14 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-15" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-15/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 15 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-16" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-16/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 16 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-17" class="td-mark active">
          
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-17/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 17 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-18" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-18/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 18 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-19" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-19/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 19 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-20" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-20/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 20 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-21" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-21/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 21 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-22" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-22/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 22 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-23" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-23/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 23 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-24" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-24/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 24 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-25" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-25/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Wed 25 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-26" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-26/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Thur 26 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-27" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-27/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Fri 27 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-28" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-28/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sat 28 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-29" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-29/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Sun 29 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-30" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-30/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Mon 30 <div> sudhakar K P</div></span>
          </div>
        </td>
      
        
      
        <td id="attendance-employee-61-day-2012-07-31" class="td-mark">
            
          
            <a class="present" href="http://demo.fedena.org/employee_attendances#" onClick="new Ajax.Request(&#39;/employee_attendances/new/2012-07-31/61&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">O</a>
          
          <div class="date"><span>Tue 31 <div> sudhakar K P</div></span>
          </div>
        </td>
      
    </tr>
  
</tbody></table>
</div></div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>