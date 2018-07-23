
<!------------Insert the code and link for signup page and popup---------------------------->
<link media="screen" rel="stylesheet" href="colorbox.css" />
<script src="jquery-latest.min.js" type="text/javascript"></script>
<script src="jquery.colorbox-min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function()
    {
        $('#link_content').colorbox({opacity:0.3});
    });
</script>


<!--------------------------End of the sign up and popup page -------------------------------------------->
>

  <div id="form-div">
  <font color="#CC0000" size="+2">Login</font><br/><br>
  <form name="myForm1" id="myForm1"  class="clearfix" action="logincheck.php" method="post" onSubmit="return validateForm4()" >
   <p class="user">
        <label for="user">User Name</label>
      </p>
      <p class="name">
        <input name="user" type="text" id="user" value="user name " onClick="this.value='';"  />
		 </p>
      <p class="pass">
        <label for="pass">Password<br />
        </label>
        <input name="pwd" type="password" id="pwd" value="Password"  onClick="this.value='';" />
      </p>
      <p class="web">
        <label for="web"></label>
      </p>
      <p class="text"><font color="#CC0000"><?php echo $_GET[msg5]?></font></p>
      <p class="submit">
        <input type="submit" name="submit" value="Login" />  
        &nbsp;<a href='1.html' id='link_content' ><font color="#006699">Not a member yet? Sign Up!</font></a>
      </p>
      </form>
     </div>
</div>
