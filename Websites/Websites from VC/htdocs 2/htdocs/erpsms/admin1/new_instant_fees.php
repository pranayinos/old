<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/new_instant_fees.css" media="screen" rel="stylesheet" type="text/css">
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
      
      <div id="content"> <div id="content-header">
  <img alt="Show_finance" src="../images/show_finance.png">
  <h1>Instant Fees</h1>
  <h3>Create Instant Fee</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  
  <div id="main_content">
    <script type="text/javascript"> function setOption(optn) {document.getElementById("option").value = optn;} </script>
<div id="partial-content"></div>
<div id="select-category-type">
  <div class="label-field-pair">
    <label for="category" id="label-member4">Select category type
      <img align="absmiddle" alt="Loader" border="0" id="loader4" src="../images/loader.gif" style="display: none; "></label>
    <div class="text-input-bg">
      <select id="select_category_category" name="select_category[category]" onChange="Element.show(&#39;loader4&#39;); new Ajax.Request(&#39;/instant_fees/handle_category&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader4&#39;)}, parameters:&#39;category_id=&#39;+value+&#39;&amp;student_id=&#39;+25 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;5SLXv3NTuDzgKDbYS0XHAvgsXD7dNl1UW7IgNibIoDc=&#39;)})"><option value="">Select category</option>
<option value="2">Test Fees</option>
<option value="4">ghjhg hjhg</option>
<option value="5">Category for Comp Science</option>
<option value="6">my instant</option>
<option value="7">Temp charge</option>
<option value="Custom">Custom</option></select>
    </div>
  </div>
</div>
<div id="enter_custom_category"></div>
<div id="fee_window">
<form action="http://demo.fedena.com/instant_fees/create_instant_fee" method="post" onSubmit="return validate_make_fee()"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="5SLXv3NTuDzgKDbYS0XHAvgsXD7dNl1UW7IgNibIoDc="></div>
  <input id="category_id" name="category_id" type="hidden" value="2">
  
    <input id="student_id" name="student_id" type="hidden" value="25">
  
  <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td class="col-head">Sl  no. </td>
      <td class="col-head">Particular</td>
      <td class="col-head">Amount </td>
      <td class="col-head">Discount (%) </td>
      <td class="col-head" colspan="2">Total Amount </td>
    </tr>
    <tr class="tr-blank"></tr>
    
    
      
        <tr class="tr-odd">
          <td class="col-1">1</td>
          <td class="col-2">Course Fee</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_1" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="200.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_1" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_1" name="total[]" readonly="readonly" type="text" value="200.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_1" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="2"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">2</td>
          <td class="col-2">Visa Fees</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_2" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="500.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_2" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_2" name="total[]" readonly="readonly" type="text" value="500.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_2" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="3"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">3</td>
          <td class="col-2">Visa Fees</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_3" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="500.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_3" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_3" name="total[]" readonly="readonly" type="text" value="500.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_3" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="4"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">4</td>
          <td class="col-2">Visa Fees</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_4" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="500.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_4" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_4" name="total[]" readonly="readonly" type="text" value="500.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_4" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="5"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">5</td>
          <td class="col-2">Visa Fees</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_5" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="500.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_5" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_5" name="total[]" readonly="readonly" type="text" value="500.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_5" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="6"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">6</td>
          <td class="col-2">Test Instant Fees</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_6" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="1000.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_6" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_6" name="total[]" readonly="readonly" type="text" value="1000.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_6" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="9"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">7</td>
          <td class="col-2">2</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_7" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="90.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_7" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_7" name="total[]" readonly="readonly" type="text" value="90.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_7" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="12"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">8</td>
          <td class="col-2">One time fee</td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_8" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="50.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_8" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_8" name="total[]" readonly="readonly" type="text" value="50.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_8" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="13"></td>
        </tr>
        
      
        <tr class="tr-odd">
          <td class="col-1">9</td>
          <td class="col-2">Instant fee </td>
          <td class="col-3"><div class="text-input-bg1"><input id="amount_9" name="amount[]" onChange="update_total_by_amount(this)" type="text" value="50.0"></div>
          </td>
          <td class="col-4"><div class="text-input-bg1"><input id="discount_9" name="discount[]" onChange="update_total_by_discount(this)" type="text" value="0"></div></td>
          <td class="col-5"><div class="text-input-bg1"><input class="particular_total" id="total_check_9" name="total[]" readonly="readonly" type="text" value="50.0"></div></td>
          <td class="col-select"><input checked="checked" class="par_check" id="check_9" name="particular_ids[]" onClick="assign_amt(this)" type="checkbox" value="14"></td>
        </tr>
        
      
    
    <tr class="tr-blank"></tr>
    <tr class="tr-blank"></tr>
    <tr class="tr-even" cellpadding="1" cellspacing="1">
      <td class="col-1"></td>
      <td class="col-pay" colspan="3">Amount to pay:</td>
      <td id="total" class="col-2" colspan="2">3390.0</td>
    </tr>
    <tr>
      <td colspan="6">
        <div class="pay_fees">
          <input id="total_fees" name="total_fees" type="hidden" value="3390.0">
          <div class="options-pay"><a id="addrow" href="http://demo.fedena.com/instant_fees/new_instant_fees#" onClick="insRow()">+ Add Particular</a>
            <input class="submit_button" id="pay_button" name="commit" type="submit" value="► Pay Fees">
          </div></div>
      </td>
    </tr>
  </tbody></table>
</form>


</div>

<script type="text/javascript">
  function validate_guest(){
    err_text = "";
    if ($('guest_payee').value=="")
    {
      err_text = "Please Enter Guest Name";
    }
    if (err_text!="")
    {
      alert(err_text);
      return false;
    }
    else
    {
      return true;
    }
  }
  
  function validate_category(){
    err_text = "";
    if ($('custom_category_name').value=="")
    {
      err_text = "Please Enter a Category Name";
    }
    if (err_text!="")
    {
      alert(err_text);
      return false;
    }
    else
    {
      return true;
    }
  }

  function validate_particular_name()
  {
    var flag = 0;
    $$('.particular_name').each(function(el){

      if (el.value== "")
        flag = 1;
    });
    if(flag == 1){alert("Particular name missing");return false;}
    else
      return true;
  }

  function validate_particular_select()
  {
    var flag = 0;
    $$('.par_check').each(function(el){

      if (el.checked == true)
        flag = 1;
      else flag = 0;
    });
    if(flag == 0){alert("Please select at least one particular");return false;}
    else
      return true;
  }
</script>
<script type="text/javascript">
  var i=1;
  function insRow()
  {
    var x=document.getElementById('listing');
    var txt1 = document.createElement('input');
    var txt2 = document.createElement('input');
    var txt3 = document.createElement('input');
    var txt4 = document.createElement('input');
    var anchor = document.createElement('a');
    var anchortext = document.createTextNode('x');
    anchor.appendChild(anchortext);
    var div1 = document.createElement('div');
    var div2 = document.createElement('div');
    var div3 = document.createElement('div');
    var div4 = document.createElement('div');
    div1.setAttribute('type', 'text');
    div1.setAttribute('class', 'text-input-bg');
    div2.setAttribute('type', 'text');
    div2.setAttribute('class', 'text-input-bg1');
    div3.setAttribute('type', 'text');
    div3.setAttribute('class', 'text-input-bg1');
    div4.setAttribute('type', 'text');
    div4.setAttribute('class', 'text-input-bg1');
    txt1.setAttribute('type', 'text');
    txt1.setAttribute('class', 'particular_name');
    txt1.setAttribute('name', 'name[]');
    txt2.setAttribute('type', 'text');
    txt2.setAttribute('class', 'text-input-bg1 input');
    txt2.setAttribute('name', 'amount[]');
    txt2.setAttribute('id', 'amount_' + (i + x.rows.length -4).toString());
    txt2.setAttribute('onchange','update_total_by_amount(this)');
    txt2.setAttribute('value','0.0');
    txt3.setAttribute('type', 'text');
    txt3.setAttribute('class', 'text-input-bg1 input');
    txt3.setAttribute('name', 'discount[]');
    txt3.setAttribute('id', 'discount_'  + (i + x.rows.length -4).toString());
    txt3.setAttribute('onchange','update_total_by_discount(this)');
    txt3.setAttribute('value','0.0');
    txt4.setAttribute('type', 'text');
    txt4.setAttribute('class', 'particular_total');
    txt4.setAttribute('name', 'total[]');
    txt4.setAttribute('id', 'total_check_' + (i + x.rows.length -4).toString());
    txt4.setAttribute('value','0.0');
    txt4.setAttribute('readonly','true');
    anchor.setAttribute('href','#');
    anchor.setAttribute('onclick','delRow(this.parentNode.parentNode.rowIndex)');
    anchor.setAttribute('id','delete_row');
    div1.appendChild(txt1);
    div2.appendChild(txt2);
    div3.appendChild(txt3);
    div4.appendChild(txt4);
    var row = x.insertRow(x.rows.length - 4);
    row.setAttribute('class', 'tr-odd');
    i = x.rows.length - 6;
    var y=row.insertCell(0);
    y.setAttribute('class', 'col-2');
    var z=row.insertCell(1);
    z.setAttribute('class', 'col-2');
    var m=row.insertCell(2);
    m.setAttribute('class', 'col-6');
    var n=row.insertCell(3);
    n.setAttribute('class', 'col-2');
    var o=row.insertCell(4);
    o.setAttribute('class', 'col-2');
    var p=row.insertCell(5);
    p.setAttribute('class','col-select')
    y.innerHTML="" + i;
    z.appendChild(div1);
    m.appendChild(div2);
    n.appendChild(div3);
    o.appendChild(div4);
    p.appendChild(anchor);
    i++;
  }

  function delRow(i)
  {
    document.getElementById('listing').deleteRow(i);
    col5total();
  }
</script>


<script type="text/javascript">
  function roundVal(val)
  {
    var dec = 2;
    var result = Math.round(val*Math.pow(10,dec))/Math.pow(10,dec);
    return result;
  }

  var total_global;
  function assign_amt(che)
  {
    var discount = che.id.replace('check',"discount");
    var amount = che.id.replace('check',"amount");
    var total = che.id.replace('check',"total_check");
    var amount_text = document.getElementById(amount).value;
    var discount_text = document.getElementById(discount).value;
    if (isNaN(discount_text) == false && isNaN(amount_text) == false)
    {
      if(che.checked){
        if(amount_text == 0 || "")
        {
          document.getElementById(total).value = 0.0;
          amount_text = document.getElementById(amount).value = 0.0
        }
        else
        {
          if(amount_text < 0)
          {
            alert("Amount can not be negative.")
            document.getElementById(amount).value = 0.0
            return false;
          }
          if (discount_text == 0 || "")
          {
            document.getElementById(total).value = amount_text.value
          }
          if (discount_text <= 100)
          {
            if(discount_text < 0)
            {
              alert("Discount cannot be negative.")
              document.getElementById(discount).value = 0.0;
              return false;
            }
            else
              document.getElementById(total).value = roundVal(parseFloat(amount_text - (amount_text * discount_text/100)));
          }
        }

      }
      else
      {
        document.getElementById(total).value = 0.0;
      }
      col5total();
    }
    else
      alert('Please enter numeric value for amount and discount');
  }

  function update_total_by_amount(text_box){
    var discount = text_box.id.replace('amount',"discount");
    var total = text_box.id.replace('amount',"total_check");
    var discount_text = document.getElementById(discount).value
    if (isNaN(discount_text) == false && isNaN(text_box.value)== false)
    {
      if(text_box.value < 0)
      {
        alert("Amount can not be negative.")
        text_box.value = 0.0;
        document.getElementById(total).value = 0.0;
        return false;
      }
      if(text_box.value == "")
      {
        text_box.value = 0.0;
        document.getElementById(total).value = 0.0;
        return false;
      }
      if (discount_text == 0 || "")
      {
        document.getElementById(total).value = text_box.value
        document.getElementById(discount).value = 0.0
      }
      if (discount_text <= 100)
      {
        if(discount_text < 0)
        {
          alert("Discount can not be negative.")
          document.getElementById(discount).value = 0.0
          return false;
        }
        else
          document.getElementById(total).value = roundVal(parseFloat(text_box.value - (text_box.value * discount_text/100)));
      }
      else
        alert('Discount cannot be greater than 100% ');
      col5total();
    }
    else
    {
      text_box.value = 0.0
      document.getElementById(total).value = 0.0
      alert('Please enter numeric value for amount and discount')
    }
  }

  function update_total_by_discount(text_box){
    var amount = text_box.id.replace('discount',"amount");
    var total = text_box.id.replace('discount',"total_check");
    var amount_text = document.getElementById(amount).value
    if (isNaN(amount_text) == false && isNaN(text_box.value)== false)
    {
      if(text_box.value == "")
      {
        text_box.value = 0.0;
        document.getElementById(total).value = amount_text;
        return false;
      }
      if (amount_text == 0 )
      {
        document.getElementById(total).value = 0.0;
      }
      if(amount_text < 0)
      {
        alert("Amount can not be negative.");
        document.getElementById(amount).value = 0.0;

        return false;
      }
      else
      {
        if (text_box.value <= 100)
        {
          if(text_box.value < 0)
          {
            alert("discount can not be negative.");
            text_box.value = 0.0;
            document.getElementById(total).value = amount_text;
            return false;
          }
          else
          {
            document.getElementById(total).value = roundVal(parseFloat(amount_text - (amount_text * text_box.value/100)));
          }
        }
        else
        {
          text_box.value = 0.0
          alert('Discount cannot be greater than 100% ');
        }
        col5total();
      }
    }
    else
    {
      text_box.value = 0.0
      document.getElementById(total).value = amount_text;
      alert('Please enter numeric value for amount and discount')
    }
  }

  function attacher(){
    $$('.par_check').invoke('observe','change', assign_amt);
    col5total()
  }

  function col5total(){
    var total = 0;
    $$('.particular_total').each(function(el)
    {
      if(isNaN(el.value) == false || el.value!="")
      {
        total = roundVal(total + parseFloat(el.value));}
      else{
        el.value = 0.0;
        alert ('please enter a numeric value for total');}
    });
    $("total").innerHTML = total;
    $('total_fees').value = total;
  }


</script>

<script type="text/javascript">
  function validate_make_fee()
  {
    if($$('.particular_name').length > 0)
    {
      return validate_particular_name();
    }
    else
    {
      if(validate_particular_select())
        return true;
      else
      {
      
        {
          alert("Please enter at least one particular detail");
          return false;
        }
      }
    }
  }

  function validate_make_fee_from_custom_category()
  {
    if(validate_category())
    {
      if($$('.particular_name').length > 0)
      {
        return validate_particular_name();
      }
      else
      {
        alert("Please enter at least one particular detail");
        return false;
      }
    }
    else
    {
      return false;
    }
  }

  function validate_make_fee_for_guest()
  {
    if( validate_guest())
    {
      return validate_particular_name();
    }
    else return true;
  }

  function validate_make_fee_for_guest_from_custom_category()
  {
    if( validate_guest())
    {
      if(validate_category())
      {
        if($$('.particular_name').length > 0)
        {
          return validate_particular_name();
        }
        else
        {
          if(validate_particular_select())
            return true;
          else
          {

            {
              alert("Please enter at least one particular detail");
              return false;
            }
          }
        }
      }
      else return false;
    }
    else return false;
  }
</script>


  </div>
</div> </div>

      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           