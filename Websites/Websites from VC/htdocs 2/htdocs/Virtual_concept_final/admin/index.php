<?php
session_start();
unset($_SESSION['user_id']);
if(isset($_POST['login']))
{
	require "../db.php";
	extract($_POST);
	//echo $user_id."  ".$password;
	$result=mysql_query("select user_id from login where user_id='$user_id' and password='$password'",$res);
	$row=mysql_fetch_array($result);
	if($row)
	{
		$_SESSION['user_id']=$user_id;
		
		echo "<script> location='board.php' </script>" ;
	}
	else
	{
		
		//echo "<h1>Try Again</h1>";
		$incorrect=1;
	}
}
	


?>

<!DOCTYPE html>

<html class="no-js js" lang="en-gb"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Virtual Concept, contact fo world class website and software</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="http://www.virtualconcept.in/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="../css/responsive-leyouts.css" type="text/css">
    


    



    <!-- style switcher -->
    <link rel="stylesheet" media="screen" href="../css/color-switcher.css">
    
    <!-- iosslider -->
	<link rel="stylesheet" media="screen" href="../css/common.css">
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="../css/skin.css">
    
    <!-- faqs -->
    <link rel="stylesheet" href="../css/accordion.css" type="text/css" media="all">
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="../css/ui.css">



    
<link type="text/css" rel="stylesheet" href="../css/widget.css"><style type="text/css">#twtr-widget-1 .twtr-avatar { display: none; } #twtr-widget-1 .twtr-tweet-text { margin-left: 0; }</style>
</head>

<body class="bg-cover">

<div class="site_wrapper">
	
    <div class="container_full">
    
   
    </div><!-- end top contact info -->
    	
        <div class="top_section">
    
    	<div class="container">

    		<div id="logo"><a href="index.php" class="site_logo"><!--<h1>Aity<i>nikon</i></h1><span class="logo_caption">clean, professional &amp; simple</span>--></a></div><!-- end logo -->
            	
               <nav id="access" class="access" role="navigation"> 
                <div id="menu" class="menu"> 
                    
                    <ul id="tiny">
                    
                        <li><a href="../index.php" > &nbsp; &nbsp; <b>Home</b> &nbsp; &nbsp; </a>
                        <li><a href="index.php" class="active"> &nbsp; &nbsp; <b>Admin Home</b> &nbsp; &nbsp; </a>
                         
                    </ul>
                </div>
                
          </nav>
                

		</div> 

	</div>
    
   <div class="top_shadow"></div><!-- end shadow -->

   </div><!-- end top -->



<!-- Content
======================================= --> 

<div class="page_title">

	<div class="container">
		
	</div>
</div><!-- end page title -->   


<div class="container">

    <div class="content_fullwidth">
    
    	<div id="content_area">
        
        	<div class="one_full">
            
             
            
            </div><!-- end google map -->
            
            <div class="clearfix mar_top2"></div>
            
            <div class="one_full">
            <h2>Admin  Login</h2>
            <p style="font-family:Arial, Helvetica, sans-serif"><b>Login to Access Admin Panel  </b></p><hr>
            
             
            
            </div>
            
		<div class="mar_top3"></div>

            <div class="one_half" >
            
            <div class="address-info" style="border:none">
                    
                </div>
            </div>
              
            
            <div class="one_half last">	            
            
            <h2>Login Form</h2>
		
					<form name="login"action="#" method="post" enctype="multipart/form-data">
					
						<fieldset>
						
												
						<label for="user_id" class="blocklabel">User ID*</label>
						<p class=""><input name="user_id" class="input_bg" id="user_id" type="text" maxlength="50" required></p>
						
						<label for="password" class="blocklabel">Password*</label>
						<p><input name="password" class="input_bg" id="password" type="password" required></p>
						
						<div class="clearfix"><br></div>
                        <p style="color:#F00">
                        <?php 
						if(isset($incorrect))
						{
							echo "Incorrect User ID or Password try Again";
						}
						?></p><br>
						<input name="login" value="Login" class="button medium align" id="login" type="submit"><p></p>
												
						</fieldset>
						
						</form> 
			</div>
            
            
        
    </div>
    
    </div><!-- end content full width area -->

<div class="mar_top2"></div>

</div>


