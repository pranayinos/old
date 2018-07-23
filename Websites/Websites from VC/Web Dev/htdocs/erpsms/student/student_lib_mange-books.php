<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_manage_book_ index.css" media="screen" rel="stylesheet" type="text/css">

<!--<link href="css/mange_book_application.css" media="screen" rel="stylesheet" type="text/css">-->
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">

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
      
      <div id="fullcontent"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Manage Books</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
  </ul>
</div>
<div id="page-yield">

  
  
  <div id="sort_by">
    <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/books/sort_by&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>
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
  <div id="books">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
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
          <td class="col-3">13</td>
          <td class="col-7">test bk</td>
          <td class="col-7">auth test bk</td>
          <td class="col-7">math</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">14</td>
          <td class="col-7">Test</td>
          <td class="col-7">test</td>
          <td class="col-7">test</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">15</td>
          <td class="col-7">triveni</td>
          <td class="col-7">shilpi</td>
          <td class="col-7">math</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">16</td>
          <td class="col-7">moodle</td>
          <td class="col-7">moodle </td>
          <td class="col-7">moodle, Reference Book</td>
          <td class="col-1">Lost</td>
          <td class="col-3">
            <small>
              <a href="http://demo.fedena.com/books/5">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">17</td>
          <td class="col-7">php</td>
          <td class="col-7">php</td>
          <td class="col-7">moodle</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">20</td>
          <td class="col-7">marry</td>
          <td class="col-7">mt vasudevan</td>
          <td class="col-7">Reference Book, math, test, moodle</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">21</td>
          <td class="col-7">wings of fire</td>
          <td class="col-7">APJ</td>
          <td class="col-7">Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">23</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English</td>
          <td class="col-1">Reserved</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">24</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">25</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">26</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">27</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">28</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">29</td>
          <td class="col-7">Technical English</td>
          <td class="col-7">Bhudha</td>
          <td class="col-7">Spoken English, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">30</td>
          <td class="col-7">dsd</td>
          <td class="col-7">dsds</td>
          <td class="col-7">dsd, Reference Book</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">31</td>
          <td class="col-7">rajesh</td>
          <td class="col-7">rathodasd</td>
          <td class="col-7">fsdfasdf</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">32</td>
          <td class="col-7">rajesh</td>
          <td class="col-7">rathodasd</td>
          <td class="col-7">fsdfasdf</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">33</td>
          <td class="col-7">rajesh</td>
          <td class="col-7">rathodasd</td>
          <td class="col-7">fsdfasdf</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">34</td>
          <td class="col-7">rajesh</td>
          <td class="col-7">rathodasd</td>
          <td class="col-7">fsdfasdf</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">35</td>
          <td class="col-7">rajesh</td>
          <td class="col-7">rathodasd</td>
          <td class="col-7">fsdfasdf</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">36</td>
          <td class="col-7">Encyclopedia</td>
          <td class="col-7">NGC</td>
          <td class="col-7">science book, Novel</td>
          <td class="col-1">Available</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">37</td>
          <td class="col-7">Encyclopedia</td>
          <td class="col-7">NGC</td>
          <td class="col-7">science book</td>
          <td class="col-1">Reserved</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">38</td>
          <td class="col-7">gdfs</td>
          <td class="col-7">gfds</td>
          <td class="col-7">grg, Spoken English, dsd, fsdfasdf, science book</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-even">
          <td class="col-3">39</td>
          <td class="col-7">fsd</td>
          <td class="col-7">fdsfs</td>
          <td class="col-7">math</td>
          <td class="col-1">Reserved</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
        <tr class="tr-odd">
          <td class="col-3">41</td>
          <td class="col-7">Demo</td>
          <td class="col-7">demo author</td>
          <td class="col-7">DEMOTAG</td>
          <td class="col-1">Borrowed</td>
          <td class="col-3">
            <small>
              <a href="#">View</a>
              
              
            </small>
          </td>
        </tr>
      
    </tbody></table>
    <div class="pagination"><span class="disabled prev_page">« Previous</span> <span class="current">1</span> <a href="#" rel="next">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#" class="next_page" rel="next">Next »</a></div>

  </div>


</div>
 </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>
  </body></html>