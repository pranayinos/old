<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Parents</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="fullpage-yield">
  <div id="group_mem">Group Members</div>
  <div>
    <form action="./student_see_allmembers_files/student_see_allmembers.htm" method="get">
      <div class="label-field-pair">
        <label for="filter">Filter by</label>
        <div class="text-input-bg">
          <select id="filter_group_members" name="filter_group_members" onchange="this.form.submit()"><option value="All">All</option>
<option value="Employee">Employee</option>
<option value="Student">Student</option></select>
        </div>
      </div>
    </form>
  </div>
  <div id="grp_members">
       
<div id="back">
  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td class="col-1">Sl  no.</td>
      <td class="col-1">Name</td>
      <td class="col-1">Emp No./Admission no</td>
      <td class="col-1">Dept name/Course name</td>
    </tr>
    <tr class="tr-blank"></tr>
    
    
      <tr class="tr-odd">
        
        <td class="col-1">1</td><td class="col-1">KIRAN</td><td class="col-1">1011</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">2</td><td class="col-1">SUMESH</td><td class="col-1">1</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">3</td><td class="col-1">PRIYA</td><td class="col-1">103</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">4</td><td class="col-1">ANITHA</td><td class="col-1">104</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">5</td><td class="col-1">AKHILA</td><td class="col-1">106</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">6</td><td class="col-1">SOORAJ </td><td class="col-1">107</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">7</td><td class="col-1">SOUMYA</td><td class="col-1">108</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">8</td><td class="col-1">ATHIRA</td><td class="col-1">109</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">9</td><td class="col-1">FARZANA </td><td class="col-1">110</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">10</td><td class="col-1">ABHIRAJ</td><td class="col-1">111</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">11</td><td class="col-1">AHAMMED </td><td class="col-1">112</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">12</td><td class="col-1">AHMED </td><td class="col-1">113</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">13</td><td class="col-1">ANAND </td><td class="col-1">114</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">14</td><td class="col-1">ANIL </td><td class="col-1">115</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">15</td><td class="col-1">DEEPAK </td><td class="col-1">117</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">16</td><td class="col-1">deviprasad</td><td class="col-1">1234</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">17</td><td class="col-1">REMYA </td><td class="col-1">118</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">18</td><td class="col-1">ABHINA</td><td class="col-1">119</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">19</td><td class="col-1">AJINA</td><td class="col-1">120</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">20</td><td class="col-1">AKHIL</td><td class="col-1">122</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
        <td class="col-1">21</td><td class="col-1">Ajith</td><td class="col-1">773</td><td class="col-1">B.A.HIS.I st SEM - 2011-12</td>
      
      </tr>
      
    
      <tr class="tr-even">
        
        <td class="col-1">22</td><td class="col-1">tretrter</td><td class="col-1">1014</td><td class="col-1">10 - 2010 A</td>
      
      </tr>
      
    
      <tr class="tr-odd">
        
          <td class="col-1">23</td><td class="col-1">Fedena</td><td class="col-1">admin</td><td class="col-1">Fedena Admin</td>
       
      
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
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>