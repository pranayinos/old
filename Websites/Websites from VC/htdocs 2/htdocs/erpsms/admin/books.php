<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
      <div id="content"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Manage Books</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      <li><a href="?page=books-new">Add Books</a></li>
    
  </ul>
</div>
<div id="page-yield">

  
  
  <div id="sort_by">
    <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/books/sort_by&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
      <div class="label-field-pair">
        <label for="sort">Filter by</label>
        <div class="text-input-bg">
          <select id="sort_on" name="sort[on]"><option value="Available">Available</option>
<option value="Borrowed">Borrowed</option>
<option value="Binding">Binding</option></select>
        </div>
      </div>
      <input class="sort_button" id="sort_submit" name="commit" type="submit" value="Filter">
    </form>
  </div>
  <div id="books"><table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">

        <td>
          Book Number
        </td>
        <td>
          Title
        </td>
        <td>
          Author
        </td>
        <td>
           Tags
        </td>
        <td>
          Status
        </td>
        <td>

        </td>
      </tr>
      <tr class="tr-blank"></tr>
      
        <tr class="tr-odd">
          <td class="col-3">b0001</td>
          <td class="col-7">testing</td>
          <td class="col-7">test</td>
          <td class="col-7">Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
                | <a href="#">Edit</a>
              
              
                | <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">b0002</td>
          <td class="col-7">testing</td>
          <td class="col-7">test</td>
          <td class="col-7">Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
                | <a href="#">Edit</a>
              
              
                | <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a>
              
            </small>
          </td>
        </tr>
      
    </tbody></table>
</div>


</div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>