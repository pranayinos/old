function checkEmail(email)
    {
		 var er='';
       if(!isValidEmail(email))
       {
		 er='invalid email';
		}
       else if (email == '')
      	{ 
       		er='required';
    	}
    	else
    	{
		    er='';	
		}
		return er;
	}
	
	function checkPass(passwd)
    {
		 var er='';
       if (passwd == '')
      	{ 
       		er='required';
    	}
    	else
    	{
		    er='';	
		}
		return er;
	}
	function checkRPass(passwd,rpasswd)
    {
		 var er='';
       if(passwd!=rpasswd)
       {
		er='Type Same Password';
		}
      else if (rpasswd == '')
      	{ 
       		er='required';
    	}
    	else
    	{
		    er='';	
		}
		return er;
	}
	function checkNumber(student_phone2)
    {
		 var er='';
       if(isNaN(student_phone2))
       {
		er='Only number';
		}
		else if(student_phone2=='')
		{
		 er='required';	
		}
    	else
    	{
		    er='';	
		}
		return er;
	}
	function checkStreet(street)
    {
		 var er='';
		 if(street=='')
		{
		 er='required';	
		}
    	else
    	{
		    er='';	
		}
       
		return er;
	}
	function checkCity(city)
    {
		 var er='';
		 if(city=='')
		{
		 er='required';	
		}
    	else
    	{
		    re='';	
		}
       
		return er;
	}
	function checkState(State)
    {
		 var er='';
		 if(State=='')
		{
		 er='required';	
		}
    	else
    	{
		    re='';	
		}
       
		return er;
	}
	function checkCountry(country)
    {
		 var er='';
		 if(country=='')
		{
		 er='required';	
		}
    	else
    	{
		    re='';	
		}
       
		return er;
	}
	function checkPin(pin)
    {
		 var er='';
		 if(isNaN(pin))
       {
		er='Only number';
		}
		else if(pin=='')
		{
		 er='required';	
		}
    	else
    	{
		    er='';	
		}
		return er;
	}
	<!--add the code fname--->
	function checkFirstName(student_first_name)
    {
		 var er='';
		 if(student_first_name=='')
		{
		 er='required';	
		}
    	else
    	{
		    re='';	
		}
       
		return er;
	}
	<!--End the code of fname -->
    function isValidEmail(str) {

   return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);
   }
