<?php
session_start();	
	$page=$_GET[page];
    require_once '../config/query_function.php'; // Make sure we include the news class file
	$pageobj = new Main(); // create a new news object
 $session_empuser=$_SESSION['session_empuser'];
$vcadminuser= $_COOKIE["vcemployeeuser"];
  if($session_empuser=="" )
  {
 
  require("../loginindex.php");
  
  }
  else
  {
  // after login   
	if($page=="")
	{
	 $page_name="emp_home";
	 $page_title="HOME";
	}
	else
	{
	 $page;
		
		$newspage = $pageobj->schoolpage($page); // set newsRecordSet to a MysqlRecordSet		
	 // This while will loop through all of the records as long as there is another record left. 
	 
		  if( ($record = $newspage->getNextRecord()) !== false )
		{ // Basically as long as $record isn't false, we'll keep looping.
		  // You'll see below here the short hand for echoing php strings.
			  // <?=$record[key] - will display the value for that array.
		    $page_name=$record['page_name'];
		     $page_title=$record['page_title']; 
		}   
      }

  		$userRecordSet = $pageobj->getdata('*',"user","user_id='$session_empuser'","", "");
	   if( ($userrecord = $userRecordSet->getNextRecord()) !== false )
    		{ 
				$configRecordSet = $pageobj->getdata('*',"school_setting","","", "");
				$configrecord = $configRecordSet->getNextRecord();
				 define( SITENAME, "$configrecord[school_name], $configrecord[school_address]", true );
				if($page_name!="") 
				{
				
				require("$page_name.php");
				}
				else 
				{
				$page_title="HOME";
				require("emp_home.php");
				}
			}
		
	}
?>