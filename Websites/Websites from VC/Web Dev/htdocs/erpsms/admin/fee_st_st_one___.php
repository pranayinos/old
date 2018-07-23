<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/fees_student_dates.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
    </head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
       <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
    <h1>Fees Submission</h1>
  <h3>ANAND   T</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div class="label-field-pair">
    <label>Select fee collection</label>
  <div class="text-input-bg">
    <select id="fees_submission_dates_id" name="fees_submission[dates_id]" onChange="new Ajax.Request(&#39;/finance/fees_submission_student&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;date=&#39;+value+&#39;&amp;id=&#39;+25 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU=&#39;)})"><option value="">Select fee collection</option>
<option value="3">first exam fee 4 - 2011-08-05</option>
<option value="4">jan - 2011-08-15</option></select>
  </div>
    </div>
      </div>
<div id="fee_submission">


  

  <form action="http://demo.fedena.com/finance/update_student_fine_ajax" method="post" onSubmit="new Ajax.Request(&#39;/finance/update_student_fine_ajax&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU="></div>
    <div class="fine_info">
      <div class="label-field-pair1">
        <label>Due date has been exceeded. Please collect fine amount:</label>
        <div class="text-input-bg1"><input id="fine_fee" name="fine[fee]" size="30" type="text" value="">
        </div>
        <input id="fine_student" name="fine[student]" type="hidden" value="25">
        <input id="fine_date" name="fine[date]" type="hidden" value="3">

        <input class="submit_button2" name="commit" type="submit" value="Add Fine">
      </div>
    </div>
  </form>




<div class="extender"></div>

<form action="http://demo.fedena.com/finance/fees_submission_save?date=3&student=25" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="tpDdSdIJsJmRvW7imie2ijQXcVyfpydVveKQtdt3tpU="></div>

  
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Sl  no.</td>
        <td>Particulars</td>
        <td>Amount (Rs.  )</td>
      </tr>
      
      <tr class="tr-blank"></tr>
      
        <tr class="tr-odd">
          <td class="col-1">1</td>
          <td class="col-2">first sem exam fee 1</td>
          <td class="col-6">5000.0</td>
        </tr>
        
      
        <tr class="tr-even">
          <td class="col-1">2</td>
          <td class="col-2">first sem exam fee 2</td>
          <td class="col-6">2000.0</td>
        </tr>
        
      

      
        <tr class="tr-blank"></tr>
        <tr class="tr-blank"></tr>
        <tr class="tr-odd" cellpadding="1" cellspacing="1">
          <td class="col-1"></td>
          <td class="col-1" colspan="2"><span>Discount </span></td>
        </tr>
        
          <tr class="tr-even">
            <td class="col-1">3</td>
            <td class="col-2">discnt1</td>
            <td class="col-6">10.0 %</td>
          </tr>
          
        
        
        
          <tr class="tr-odd">
            <td class="col-1">4</td>
            <td class="col-2">discnt 2-1</td>
            <td class="col-6">15.0 %</td>
          </tr>
          
        
        <tr class="tr-blank"></tr>
        <tr class="tr-blank"></tr>

        <tr class="tr-even" cellpadding="1" cellspacing="1">
          <td class="col-8" colspan="2">Total Discount </td>
          <td class="col-6">25.0 %</td>
        </tr>

        <tr class="tr-blank"></tr>
        <tr class="tr-blank"></tr>
        
        <tr class="tr-odd" cellpadding="1" cellspacing="1">
          <td class="col-8" colspan="2">Total Fees </td>
          <td class="col-6">5250.0</td>
        </tr>

        <tr class="tr-blank"></tr>
        <tr class="tr-blank"></tr>

      



      
      
      

      <tr class="tr-blank"></tr>
      <tr class="tr-blank"></tr>
      <tr class="tr-even" cellpadding="1" cellspacing="1">
        <td class="col-8" colspan="2">Amount to pay</td>
        <td class="col-6">5250.0</td>
      </tr>
      <tr>
        <td colspan="3">
          <div class="pay_fees">
            
              <div class="label-field-pair2">
                <label>Amount :</label>
                <div class="text-input-bg2"><input id="fees_fees_paid" name="fees[fees_paid]" size="30" type="text" value="5250.0">
                  <input id="total_fees" name="total_fees" type="hidden" value="5250.0">
                </div>
              </div>
              <div class="pay_fees_buttons">
                <input class="submit_button" name="commit" type="submit" value="► Pay Fees">

                
              </div>

            
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          
        </td>
      </tr>

    
  </tbody></table>
</form>

</div>

<div id="modal-box" style="display:none;"></div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           