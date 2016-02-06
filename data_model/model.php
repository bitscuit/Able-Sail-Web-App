<?php

class Database_Reader
{
	public $dbh;

	function __construct() {
		try {
      		$this->dbh = new PDO("mysql:host=kevinzuern.com;dbname=propheis_ablesail", "propheis_able", "Ablesail");
      		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		}
   
   		catch(PDOException $e)
   		{	
      		echo "Connection to database failed: " . $e->getMessage();
   		}

	}
   
   /* 
   * Returns true if a user has a valid username and a valid passwords 
   * correspinding to that username. Otherwise, returns false
   */
   function valid_user($username, $pw)
   {
      $users = $this->dbh->query("SELECT `password` FROM `user` 
         WHERE `username`='".$username."'
         AND `password`='".$pw."'
      ");
      
      if (count($users) == 0){
         //No users available
         return FALSE;
      } 
      elseif (count($users) == 1) {
         foreach ($users as $i){
            return $i['password'] == $pw; // double layer of safety
         }
      } else{
         // fatal error
         echo "Database error: too many users with same username";
         return FALSE;
      }
   }
   
}


?>
