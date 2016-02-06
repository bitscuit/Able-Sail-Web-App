<?php

class Database_Reader
{
	private $dbh;

	function __construct() {
		try {
      		$this->dbh = new PDO("mysql:host=kevinzuern.com;dbname=propheis_ablesail", "propheis_able", "Ablesail") or die("Couldn't connect to the database.");
      		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		}
   
   		catch(PDOException $e)
   		{	
      		echo "Connection to database failed: " . $e->getMessage();
   		}

	}

   public function get_registration($email) {
      $query = "SELECT * FROM `infosheet` WHERE `email` = " . "\"".$email . "\"";
      $data = $this->dbh->query($query);

      var_dump($data);
   }
}
?>
