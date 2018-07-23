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
    <a href="http://demo.fedena.com/instant_fees/new_instant_fees#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  
  <div id="main_content">
    <script type="text/javascript"> function setOption(optn) {document.getElementById("option").value = optn;} </script>
<div id="partial-content">
  <div id="search_box_bg">
    <form name="search_form" action="" style="display:inline;">
      <input id="option" name="option" type="hidden" value="student">
      <label for="user_name" id="payee_select">Select Payee
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./new_instant_fees_search_files/loader.gif" style="display: none; ">
      </label>
      <div id="search_textbox">

        <input autocomplete="off" id="query" name="query" type="text">

      </div>
      <div class="radio_button">
        <div class="radio-label">
          <input type="radio" name="setopt" id="search_present_students_radio" checked="checked" onClick="setOption(&#39;student&#39;)">Student
          <input type="radio" name="setopt" id="search_former_students_radio" onClick="setOption(&#39;employee&#39;)">Employee
          <input type="radio" name="setopt" id="search_former_students_radio" onClick="setOption(&#39;guest&#39;)">Guest
        </div>
      </div>

    </form>
  </div>

  <div id="view_all">

  </div>



  <script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('query', 0.5, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/instant_fees/tsearch_logic', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&option='+escape($('option').value) + '&authenticity_token=' + encodeURIComponent('2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=')})})
//]]>
</script><script type="text/javascript">
//<![CDATA[
new Form.Element.Observer('option', 0.5, function(element, value) {Element.show('loader'); new Ajax.Updater('information', '/instant_fees/tsearch_logic', {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide('loader')}, parameters:'query='+escape($('query').value) + '&option='+escape($('option').value) + '&authenticity_token=' + encodeURIComponent('2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=') + '&authenticity_token=' + encodeURIComponent('2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA=')})})
//]]>
</script>

  <div id="information"><div id="info">
  
    
      <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
        <tbody><tr class="tr-head">
          <td>
            Sl  no.
          </td>
          <td>
            Name
          </td>
          <td>Batch</td>
          <td>Adm no.</td>
        </tr>
        
          <tr class="tr-odd">
            <td class="col-1">1</td>
            <td class="col-2"><a href="?page=new_instant_fees" onClick="">ANAND   T</a></td>
            <td class="col-2">2011-12</td>
            <td class="col-2">114</td>
          </tr>
        
      </tbody></table>
    
   
</div>
<div id="select-category-type"></div>
<div id="enter_custom_category"></div>
<div id="fee_window"></div>
</div>
</div>
<div id="select-category-type"></div>
<div id="enter_custom_category"></div>
<div id="fee_window"></div>

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
           