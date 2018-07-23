<?php
session_start();
    require_once 'config/query_function.php'; // Make sure we include the news class file
	$user = new Main(); // create a new news object
	
	 if(isset($_POST['submit'])) // If the submit button was clicked
    {

       // Course entry
          $username =$_POST['username'];
          $password =$_POST['password'];      
		 if($username!="" && $password!="")
 		{   
		  $newsRecordSet = $user->getdata('*',"user","user_loginid='$username'","", "");// set newsRecordSet to a 
		  if( ($record = $newsRecordSet->getNextRecord()) !== false )
    		{
			
			  $pwd=$record[user_pwd];		
					if($pwd==$password)
					{
						$usertype=$record[user_type];	
						$uid=$record[user_id];
						if($usertype=='1')
						{		
						$_SESSION['session_adminuser']=$uid;
						setcookie("vcadminuser", "$uid", time()+360); 
						header("location:admin/");							
						}
						elseif($usertype=='2')
						{
							$_SESSION['session_empuser']=$uid;
						setcookie("vcemployeeuser", "$uid", time()+3600); 
							header("location:employee/");	
							
						}
						elseif($usertype=='3')
						{
						$_SESSION['session_studentuser']=$uid;
						setcookie("vcstudentuser", "$uid", time()+3600); 
						header("location:student/");	
						}
					}
					else
					{
					$msg="Invalid Password";
					}
			
			
			}
			else
			{
			$msg="Please Check Username";
			}
		}
		else
		{
		$msg="User Name or Password should not be blank";
		}
		
	}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login | E-School Management</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">

<script type="text/ecmascript">
    MEDIATIVE_DEBUG = true;
    var utag_data = {};
</script>
	

	<link media="screen" type="text/css" href="loginscript/master.css" rel="stylesheet">
	<!--[if IE]>
<link media="screen" type="text/css" href="loginscript/master.css" rel="stylesheet">
	<![endif]-->

  
    
</head>
<body id="loginPage" class="lang-en">
<div id="wrap">
	<div id="layout">
		<div id="header">
		    
<div id="beta"></div>

    <a id="rstnLogo" href=""><H1>E- School Management </H1></a>
    <div id="topNav">
      <div class="rightCorner"> </div>
      <ul class="reset topNav">
      </ul>
    </div>
	  </div>
		<div id="breadcrumb">
    <ul class="reset">
    
		<li><a href="" rel="nofollow">Home</a></li>
	
		<li><span>Login to School management System</span></li>
	
	</ul>
</div>		    

		<div id="content">
<div class="column1">
    
<div class="mainBox">
<div class="loginBox" id="loginBox">
	<h1>Login </h1>
	<form action="" id="loginForm" method="post">
	    <input name="keep" value="true" type="hidden">
		<fieldset>
	        <ul class="reset forms loginFields">
				<li>
					<label for="name">User Name</label>    
					<input class="inputTxt" id="name" name="username" tabindex="1" type="text">
				</li> 
				<li>
					<label for="password">Password</label>
					<input class="inputTxt" id="password" name="password" tabindex="2" type="password">
				</li> 
		        <li>	
		            <div style="float:right; margin-top:10px;" class="inputBtn">
	              <input name="submit" tabindex="3" type="submit" value="Login"></div>
		            <a rel="nofollow" style="float: left; margin-top: 1.7em;" href="#">Forgot your password?</a>				</li>
		    </ul>	
		    
			<div style="clear:both; color:#CC3300"><?php echo $msg; if($msg=="") echo $_GET[msg];?></div>
			<div class="externalLogin">	        </div>
		</fieldset>
    </form>	
</div>
<div class="registerBox"><a rel="nofollow" href="#">Don't have an account yet? Sign up</a></div>	
</div>
</div>
<script type="text/javascript">
utag_data.language = "en";
utag_data.page = "login";
utag_data.section = "/profile/";
try {
utag.view(utag_data);
} catch (e) {
var error = e;
}
</script>
</div>
	  <div id="footer">
<div id="bottomNav"></div>

<div class="cityLinks">
	<div class="footerBox mright10">
		<div>
			<span>Quick Links to USA Cities</span>
			<ul class="reset first">
				<li><a href="va/arlington/">Arlington</a></li>
				<li><a href="sc/charleston/">Charleston</a></li>
				<li><a href="nc/charlotte/">Charlotte</a></li>
				<li><a href="co/denver/">Denver</a></li>
			</ul>
    		<ul class="reset">
				<li><a href="mi/detroit/">Detroit</a></li>
    			<li><a href="nv/las-vegas/">Las Vegas</a></li>  
                <li><a href="wi/milwaukee/">Milwaukee</a></li>
                <li><a href="mn/minneapolis/">Minneapolis</a></li>
            </ul>
    		<ul class="reset">
                <li><a href="tn/nashville/">Nashville</a></li>                
                <li><a href="fl/orlando/">Orlando</a></li>
                <li><a href="pa/pittsburgh/">Pittsburgh</a></li>
                <li><a href="or/portland/">Portland (OR)</a></li>
            </ul>
			<ul class="reset">    
                <li><a href="ca/sacramento/">Sacramento</a></li>
                <li><a href="ut/salt-lake-city/">Salt Lake City</a></li>
                <li><a href="wa/seattle/">Seattle</a></li>
                <li><a href="il/springfield/">Springfield (IL)</a></li>
			</ul>
			<ul class="reset last">	
				<li><a href="oh/toledo/">Toledo</a></li>
				<li><a href="az/tucson/">Tucson</a></li>
				<li><a href="ok/tulsa/">Tulsa</a></li>
                <li><a href="country/us/">All Cities</a></li>               
            </ul>		
		</div>
	</div>
	<div class="footerBox">
		<div>
			<span>Quick Links to Canadian Cities</span>  			
			<ul class="reset first">
				<li><a href="bc/burnaby/">Burnaby</a></li>
				<li><a href="ab/calgary/">Calgary</a></li>
				<li><a href="pe/charlottetown/">Charlottetown</a></li>
				<li><a href="ns/halifax/">Halifax</a></li>
			</ul>
    		<ul class="reset">
				<li><a href="on/hamilton/">Hamilton</a></li>
    			<li><a href="bc/kelowna/">Kelowna</a></li>  
                <li><a href="on/kitchener/">Kitchener</a></li>
                <li><a href="on/mississauga/">Mississauga</a></li>
            </ul>
    		<ul class="reset">
                <li><a href="qc/montreal/">Montréal</a></li>                
                <li><a href="on/ottawa/">Ottawa</a></li>
                <li><a href="qc/quebec-city/">Québec City</a></li>
                <li><a href="sk/regina/">Regina</a></li>
            </ul>
			<ul class="reset">    
                <li><a href="nb/saint-john/">Saint John</a></li>
                <li><a href="sk/saskatoon/">Saskatoon</a></li>
                <li><a href="bc/surrey/">Surrey</a></li>
                <li><a href="on/toronto/">Toronto</a></li>
			</ul>
			<ul class="reset last">	
				<li><a href="bc/vancouver/">Vancouver</a></li>
				<li><a href="bc/victoria/">Victoria</a></li>
				<li><a href="mb/winnipeg/">Winnipeg</a></li>
                <li><a href="country/ca/">All Cities</a></li>               
            </ul>	
		</div>
	</div>
<div id="rFooter">
	<div class="rLogo"></div>
    <div class="rFooterContent clearfix">
        <ul>
          <li><strong>Advertisers</strong></li>
          <li><a href="advertising/">Advertise with us</a></li>
          <li><a href="add/restaurant/">Add a Restaurant</a></li>
          <li><a href="business-owner-program/">Restaurant Owners</a></li>
        </ul>
     
        <ul>
           <li><strong>About Us</strong></li>
          <li><a href="about/">About Us</a></li>

          <li><a href="http://jobs.ypg.com/" title="Careers" target="_blank">Careers</a></li>

          <li><a href="http://www.ypg.com/page.php/en/2/29.html" title="Privacy Policy" target="_blank">Privacy Policy</a></li>

          <li><a href="http://www.ypg.com/en/legal-notice" title="Terms and Conditions" target="_blank">Terms and Conditions</a></li>
          
          <li><a href="bookmark-us/">Bookmark Us</a></li>
         </ul>
        <ul>
           <li><strong>Quick links</strong></li>
          <li><a href="login/">Your page</a></li>
          <li><a href="invite/">Invite a Friend</a></li>
          <li><a href="help/faq/">Help and FAQ</a></li>
        </ul>
        <ul>
           <li><strong>Mobile and tools</strong></li>
          <li><a href="#" title="Mobile Apps" target="_blank">Mobile Apps</a></li>
          <li><a href="blog/">Blog</a></li>
          <li><a href="link-to-us/">Link to Us</a></li>
        </ul>
        <ul>
          <li><strong>Partners</strong></li>
          <li><a href="http://yellowpages.ca/" title="Yellowpages.ca" target="_blank">Yellowpages.ca</a></li>
          <li><a href="http://autotrader.ca/" title="AutoTrader.ca" target="_blank">AutoTrader.ca</a></li>
          <li><a href="http://buysell.com/" title="Buysell.com" target="_blank">Buysell.com</a></li>
          <li><a href="http://canada411.ca/" title="Canada411.ca" target="_blank">Canada411.ca</a></li>
          <li><a href="http://www.canadaplus.ca/" title="CanadaPlus.ca" target="_blank">CanadaPlus.ca</a></li>
          <li><a href="http://autos.ca/" title="Autos.ca" target="_blank">Autos.ca</a></li>
          </ul>
      
        <ul>
           <li><strong>&nbsp;</strong></li>
          <li><a href="http://dealoftheday.redflagdeals.com/" title="Deal of the Day" target="_blank">Deal of the Day</a></li>
          <li><a href="http://hometrader.ca/" title="HomeTrader.ca" target="_blank">HomeTrader.ca</a></li>
          <li><a href="http://pricecanada.com/" title="PriceCanada.com" target="_blank">PriceCanada.com</a></li><li><a href="http://redflagdeals.com/" title="RedFlagDeals.com" target="_blank">RedFlagDeals.com</a></li>
          <li><a href="">Restaurantica.ca</a></li>
        </ul>
      </div>
    <div class="rFooterContent clearfix" style="border:none; margin-top:-6px;">
   	<ul class="reset links" style="width:960px;">
	</ul>
</div>
   <div class="copyright">
      <p>© Copyright Restaurantica 2008-2011. Neighbourhood data</p><p>©
 2009 Urban Mapping Inc. Yellow Pages Group and the Walking Fingers 
&amp; Design are trademarks of Yellow Pages Group Co. in Canada.</p>
      </div>
   </div>
</div>
</div>				
  </div>
</div>

<div class="dropDownWrapper base" style="position:absolute; top:0px; left:-5000px; z-index: 9">
    <table class="dropDown" cellpadding="0" cellspacing="0" width="207px">
	    <tbody><tr>
		    <td class="corner tl"></td>
		    <td class="top"></td>
		    <td class="corner tr"></td>
	    </tr>
	    <tr>
		    <td class="sideLeft"></td>
		    <td class="space">
			    <span class="title">Best Results</span>
		        <ul class="reset match error">
		            <li>No Results</li>
		        </ul>
		        
		        <span class="title">Popular Cities</span>
		        <ul class="reset static favorite">
		            
		            <li>Las Vegas, Nevada</li>
		            
		            <li>New York, New York</li>
		            
		            <li>San Francisco, California</li>
		            
		        </ul>
		        
		    </td>
		    <td class="sideRight"></td>
	    </tr>
	    <tr>
		    <td class="corner bl"></td>
		    <td class="bottom"></td>
		    <td class="corner br"></td>
	    </tr>
    </tbody></table>
</div>




</body></html>