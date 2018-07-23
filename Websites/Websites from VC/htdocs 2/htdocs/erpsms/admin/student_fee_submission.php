<?php

    $newadd = new Main(); // create a new news object
    if(isset($_POST['bt_submit'])) // If the submit button was clicked
    {
$stid=	$_POST['txtadmno'];
$fee_st_submission=$_POST[fee_st_submission];
       // paid entry
          $post['fee_pay_coll_id'] =$_POST['fee_coll_id'];
          $post['fee_pay_student_no'] = $stid;      
          $post['fee_tot_amt'] = $_POST['txttotamt'];   
          $post['fee_pay_fine'] = $_POST['fine_fee'];   
          $post['fee_pay_payable'] = $_POST['total_fees'];   

       	 if($newadd->Inserttable($post,"student_fee_payment"))
			{
			
				$msg="Fee Paid SUCCESSFULLY";
				header("location:?page=fees_student_one&bid=$fee_st_submission&id=$stid&msg=$msg");
			}
			else
			{
				$msg="Error :  Fee  not Paid, Please Check Entered Data";
				header("location:?page=fees_student_one&bid=$fee_st_submission&id=$stid&error=$msg");
			}		


    }
?>