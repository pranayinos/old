<?php
require_once 'phpfun.php'; // include this file so we can use the Mysql Class inside this class as well.

class Main
{
    // In this class we'll have a few variables to be used by the class.
    var $mysql; // the mysql variable that will hold the Mysql Object.
    
    public function __construct()
    {
        $this->mysql = new Mysql(); // Connect to mysql and the database so we can use it.
    }
    // This function does what it says, it gets all of the current news records from the db.

    public function getNews()
    {
        $rset = $this->mysql->select('*',"school_page","page_id	 <'10'","page_id DESC", "20");
        return $rset;
    }
    // You should update this function how you see fit. You could add more params to return only
    // the fields you want.
       
    // This will get a <span id="IL_AD9" class="IL_AD">single record</span> in the database.

    public function getNewsById($id)
    {
        $rset = $this->mysql->select('*',"test_user_data","uid='$id'");
        return $rset;
    }
	/***************************** get school page *****************/
	    public function schoolpage($page)
    {
        $rset = $this->mysql->select('*',"school_page","page_name='$page'","page_id ASC","1");
        return $rset;
    }
  
    // Your going to need some way to add and edit your news entries right?
    // well here ya go :P
    
    // This function will save you lots of time writing out the fields variable everytime.
    public function buildFields($post, $sep=" ") // $post comes in as an array of variables.
    {    
        $fields = ""; // This makes sure we don't run into any past fields.
        foreach($post as $key => $value)
        {
            // foreach will take each element of the $post array and seperate
            // each of the values with its key $post[key] = value;
            $value = mysql_escape_string($value); // We'll do a small <span id="IL_AD2" class="IL_AD">security check</span> here.
            // I'll explain that in another tutorial. Basically it protect mysql from hackers.
            if($i == 0)
                $fields .= "$key='$value'";
            else
                $fields .= $sep . "$key='$value'";
            // This will create your fields string based on each element in the post array.
            $i++;
        }
        return $fields; // Return the string, $fields.
    }
/*    public function addNews($post)
    {
        $fields = $this->buildFields($post, ", "); // take the post array and break it into a string.
        if( $this->mysql->insert("test_user_data",$fields) ) // This is pretty basic. Inserts the new news record.
        {
            return true;
        }
        else
        {
            return false;
        }
    }*/
	
	
	
/****************************************************************************************/
   /**************  Insert  ************************/

 public function Inserttable($cols,$table)
    {
		$fields = $this->buildFields($cols, ", "); // take the post array and break it into a string.
        if( $this->mysql->insert($table,$fields) ) // This is pretty basic. Inserts the new news record.
        {
            return true;
        }
        else
        {
            return false;
        }
	}
/************* end insert *************/
	/*********** select ****************/
	      public function getdata($fields,$table,$where,$orderby,$limit)
    {
        $rset = $this->mysql->select($fields,$table,$where,$orderby,$limit);
		
        return $rset;
    }
	/********* end select *************/
	
	
	/*
      public function getcourse()
    {
        $rset = $this->mysql->select('*',"course","","course_id DESC", "100");
        return $rset;
    }*/
/************************ batch *************************/
 /*public function addNewbatch($batchpost)
    {
//print $batchpost;
		$batchfields = $this->buildFields($batchpost, ", "); // take the post array and break it into a string.
        if( $this->mysql->insert("batch",$batchfields) ) // This is pretty basic. Inserts the new news record.
        {
            return true;
        }
        else
        {
            return false;
        }
	}
public function getbatch($coursecode)
    {
        $rset = $this->mysql->select('*',"batch","batch_course_code='$coursecode'","id DESC", "100");
        return $rset;
    }

    public function editDate($post)
    {
        $fields = $this->buildFields($post, ", ");
        $newsId = $post['newsId']; // retreive the newsId we need to update
        if( $this->mysql->update("test_user_data",$fields,"uid='$newsId'") )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
*/
/**************  end category ************************/


    // This function is just the same as addnews, except that it updates an existing record.
    public function updateData($post,$table,$where)
    {
        $fields = $this->buildFields($post, ", ");
       // $newsId = $post['newsId']; // retreive the newsId we need to update
        if( $this->mysql->update($table,$fields, $where) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
	// delete method
    public function deleteData($table,$where)
    {
        if( $this->mysql->delete($table,$where) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>