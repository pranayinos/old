//code for create_cat.php popup
function validateForm1(){

if(document.forms["myform"]["finance_fee_category_name"].value=="")
  	{
  	alert("Enter the Fee Category Name");
	document.forms["myform"]["finance_fee_category_name"].focus();
 	 return false;
  	}
//if(document.forms["myform"]["finance_fee_category_description"].value=="")
  //	{
  	//alert("Enter the Fee Category Description");
	//document.forms["myform"]["finance_fee_category_description"].focus();
 	 //return false;
  	//}
if(document.forms["myform"]["fee_batch_id"].value=="")
  	{
  	alert("Please select  the Batch Name");
	document.forms["myform"]["fee_batch_id"].focus();
 	 return false;
  	}		
	}

//***************  Code of validation create_particular.php pop up  ******************************************************
function validateForm2()
{
		//Radio button code create using 
		 var radios = document.getElementsByName("createusing");
		 var formValid = false;
		 var i = 0;
		 while (!formValid && i < radios.length) {
			if (radios[i].checked) formValid = true;
			i++;    
			}
		  //End of the code radio button
		
	     //Fees Master Category
		if(document.forms["myform"]["batch_feecat_id"].value=="")
			{
			alert("Please Select the Fee Master Catagory");
			document.forms["myform"]["batch_feecat_id"].focus();
			 return false;
			}
			//Name
		if(document.forms["myform"]["finance_fee_particulars_name"].value=="")
			{
			alert("Enter the Master Fee Name");
			document.forms["myform"]["finance_fee_particulars_name"].focus();
			 return false;
			}
			//Description 
		/*if(document.forms["myform"]["finance_fee_particulars_description"].value=="")
			{
			alert("Enter Fee Particulars Description");
			document.forms["myform"]["finance_fee_particulars_description"].focus();
			 return false;
			}*/	
			
			//Admission Number
	/*	if(document.forms["myform"]["finance_fee_particulars_admission_no"].value=="")
			{
			alert("Enter Fee Particulars Admission_no");
			document.forms["myform"]["finance_fee_particulars_admission_no"].focus();
			 return false;
			}
			*/
			if (isNaN(document.forms["myform"]["finance_fee_particulars_admission_no"].value))
			{
			alert("Enter Numeric Fee Particulars Admission Number");
			document.forms["myform"]["finance_fee_particulars_admission_no"].focus();
			 return false;
			}
			//Student Catagory
		/*if(document.forms["myform"]["finance_fee_particulars_student_category_id"].value=="")
			{
			alert("Please Select Student Category Id");
			document.forms["myform"]["finance_fee_particulars_student_category_id"].focus();
			 return false;
			}*/	
			//Amount
			if(document.forms["myform"]["finance_fee_particulars_amount"].value=="")
			{
			alert("Enter Fee Particulars Amount");
			document.forms["myform"]["finance_fee_particulars_amount"].focus();
			 return false;
			}
			if (isNaN(document.forms["myform"]["finance_fee_particulars_amount"].value))
			{
			alert("Enter Numeric Fee Particulars Amount");
			document.forms["myform"]["finance_fee_particulars_amount"].focus();
			 return false;
			}
			
			
			
			
			//Radio button code create using 
			if (!formValid) alert("Please must be check radio button create using option!");
   			return formValid;
			//End of the radio button code create using 
}
//***************  End of validation create_particular.php pop up    *********************************************************




//**************Code of validation fee_discount_new.php************************************************************************
function validateForm3()
{
 //Fee Discount Type 
		if(document.forms["myform"]["fee_discount_type"].value=="")
			{
			alert("Please Select the fee_discount_type");
			document.forms["myform"]["fee_discount_type"].focus();
			 return false;
			}
		 //Fee Discount Name
		if(document.forms["myform"]["fee_discount_name"].value=="")
			{
			alert("Enter the Fee Discount Name");
			document.forms["myform"]["fee_discount_name"].focus();
			 return false;
			}
			
		 //Select the Course Batch
		if(document.forms["myform"]["fee_discount_batch"].value=="")
			{
			alert("Please Select the Course Batch");
			document.forms["myform"]["fee_discount_batch"].focus();
			 return false;
			}	
			
		//Select the Fee Category
		if(document.forms["myform"]["fee_discount_fee_cat"].value=="")
			{
			alert("Please Select the Fee Category");
			document.forms["myform"]["fee_discount_fee_cat"].focus();
			 return false;
			}	
		//Select Student Category
		/*if(document.forms["myform"]["fee_discount_student_cat"].value=="")
			{
			alert("Please Select Student Category");
			document.forms["myform"]["fee_discount_student_cat"].focus();
			 return false;
			}	
		//Admission number
		if(document.forms["myform"]["fee_discount_adm_no"].value=="")
			{
			alert("Enter the Admission Number");
			document.forms["myform"]["fee_discount_adm_no"].focus();
			 return false;
			}*/
			if (isNaN(document.forms["myform"]["fee_discount_adm_no"].value))
			{
			alert("Enter Numerics Admission Number");
			document.forms["myform"]["fee_discount_adm_no"].focus();
			 return false;
			}	
			if (!formValid) alert("Please must be check radio button create using option!");
   			return formValid;
		//Discount 
		if(document.forms["myform"]["fee_discount_per"].value=="")
			{
			alert("Enter the Discount");
			document.forms["myform"]["fee_discount_per"].focus();
			 return false;
			}
		if (isNaN(document.forms["myform"]["fee_discount_per"].value))
			{
			alert("Enter Numerics Fee Discount Per");
			document.forms["myform"]["fee_discount_per"].focus();
			 return false;
			}		
}
//****************  End of the code validation fee_discount_new.php ************************************************************//

//****************************code of create_fees_coll_date.php ***************************************************************//
function validateForm4()
{
 //fee_coll_fee_cat
		if(document.forms["myform"]["fee_coll_fee_cat"].value=="")
			{
			alert("Please Select the fee_coll_fee_cat");
			document.forms["myform"]["fee_coll_fee_cat"].focus();
			 return false;
			}
		 //fee_coll_batch_id
		if(document.forms["myform"]["fee_coll_batch_id"].value=="")
			{
			alert("Enter the fee_coll_batch_id");
			document.forms["myform"]["fee_coll_batch_id"].focus();
			 return false;
			}
			
		 //fee_coll_name
		if(document.forms["myform"]["fee_coll_name"].value=="")
			{
			alert("Please fee_coll_name");
			document.forms["myform"]["fee_coll_name"].focus();
			 return false;
			}	
			
		//fee_coll_start_date
		if(document.forms["myform"]["fee_coll_start_date"].value=="")
			{
			alert("Please fee_coll_start_date");
			document.forms["myform"]["fee_coll_start_date"].focus();
			 return false;
			}	
		
	
}
//****************  End of the code validation create_fees_coll_date.php ******************************************************//

//****************************code of edit_fee_collection.php ***************************************************************//
function validateForm5()
{
 //finance_fee_collection_name
		if(document.forms["myform"]["finance_fee_collection_name"].value=="")
			{
			alert("Please Select the finance_fee_collection_name");
			document.forms["myform"]["finance_fee_collection_name"].focus();
			 return false;
			}
}
//****************  End of the code validation edit_fee_collection.php *****************************************************//

//****************************code of edit_master_collection.php ***************************************************************//
function validateForm6()
{
 //finance_fee_category_name
		if(document.forms["myform"]["finance_fee_category_name"].value=="")
			{
			alert("Please Select the finance_fee_category_name");
			document.forms["myform"]["finance_fee_category_name"].focus();
			 return false;
			}
//finance_fee_category_description
		if(document.forms["myform"]["finance_fee_category_description"].value=="")
			{
			alert("Please Select the finance_fee_category_description");
			document.forms["myform"]["finance_fee_category_description"].focus();
			 return false;
			}			
}
//****************  End of the code validation edit_master_collection.php *****************************************************//

//****************************code of edit_fee_discount.php ***************************************************************//
function validateForm7()
{
 //finance_fee_category_name
		if(document.forms["myform"]["finance_fee_category_name"].value=="")
			{
			alert("Please Select the finance_fee_category_name");
			document.forms["myform"]["finance_fee_category_name"].focus();
			 return false;
			}
		
}
//****************  End of the code validation edit_master_collection.php *****************************************************//

//****************************Code of new_course.php ***************************************************************//
function validateForm8()
{
       //coursename
		if(document.forms["myform"]["coursename"].value=="")
			{
			alert("Please Select the Course Name");
			document.forms["myform"]["coursename"].focus();
			 return false;
			}
		//course_section_name
		if(document.forms["myform"]["course_section_name"].value=="")
			{
			alert("Please Select the Course Section Name");
			document.forms["myform"]["course_section_name"].focus();
			 return false;
			}
		//course_code
		if(document.forms["myform"]["course_code"].value=="")
			{
			alert("Please Select the Course Code");
			document.forms["myform"]["course_code"].focus();
			 return false;
			}
		//course_batches_name
		if(document.forms["myform"]["course_batches_name"].value=="")
			{
			alert("Please Select the Course Batches Name");
			document.forms["myform"]["course_batches_name"].focus();
			 return false;
			}
		//batch_start_date
		if(document.forms["myform"]["batch_start_date"].value=="")
			{
			alert("Please Select the Batch Start Date");
			document.forms["myform"]["batch_start_date"].focus();
			 return false;
			}
		//batch_end_date
		if(document.forms["myform"]["batch_end_date"].value=="")
			{
			alert("Please Select the Batch End Date");
			document.forms["myform"]["batch_end_date"].focus();
			 return false;
			}	
		
}
//****************  End of the code validation new_course.php *****************************************************//

//****************************code of edit_fee_discount.php ***************************************************************//
function validateForm9()
{
 //subject_name
		if(document.forms["myform"]["subject_name"].value=="")
			{
			alert("Please Select the subject_name");
			document.forms["myform"]["subject_name"].focus();
			 return false;
			}
		 //subject_code
		if(document.forms["myform"]["subject_code"].value=="")
			{
			alert("Please Select the subject_code");
			document.forms["myform"]["subject_code"].focus();
			 return false;
			}	
		 //subject_max_weekly_classes
		if(document.forms["myform"]["subject_max_weekly_classes"].value=="")
			{
			alert("Please Select the subject_max_weekly_classes");
			document.forms["myform"]["subject_max_weekly_classes"].focus();
			 return false;
			}
		 //subject_name
		if(document.forms["myform"]["subject_name"].value=="")
			{
			alert("Please Select the subject_name");
			document.forms["myform"]["subject_name"].focus();
			 return false;
			}	
		
}
//****************  End of the code validation edit_master_collection.php *****************************************************//

//****************************code of new_batch.php pop up ***************************************************************//
function validateForm10()
{
 //course_batches_name
		if(document.forms["myform"]["course_batches_name"].value=="")
			{
			alert("Please Select the Course Batches Name");
			document.forms["myform"]["course_batches_name"].focus();
			 return false;
			}
}
//************************End the code of new_batch.php **********************************************************************//