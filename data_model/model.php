
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

   public function get_registrations($email) {
      $query = "SELECT * FROM `infosheet` WHERE email = " . "\"".$email . "\"";
      
      $data = $this->dbh->query($query);

      return $data->fetch();
   }
   public function get_registration($ID) {
      $query = "SELECT * FROM `infosheet` WHERE ID = " . "\"".$ID . "\"";
      
      $data = $this->dbh->query($query);

      return $data->fetch();
   }
   
   public function valid_user($username, $pw)
   {
      $users = $this->dbh->query("SELECT `password` FROM `user` 
         WHERE `username`='".$username."'
         AND `password`='".$pw."'
      ");
      
      if (count($users) == 0){
         //No users available
         return 0;
      } 
      elseif (count($users) == 1) {
         foreach ($users as $i){
            return $i['password'] == $pw; // double layer of safety
         }
      } else{
         // fatal error
         echo "Database error: too many users with same username";
         return 0;
      }
   }
   
   public function new_user($username, $email, $password)
   {
      try{
         $users = $this->dbh->exec(
            "INSERT INTO `user` VALUES(
               0, 
               '".$username."',
               '".$email."',
               '".$password."'
            )"
         );
      } catch (PDOException $e){
         if ($e->errorInfo[1] == 1062){
            echo "Username or email already exists in DB \n";
         } else { // other exception
            echo $e;
         }
      }
   }
   
   public function delete_user($username)
   {
      try{
         $this->dbh->query(" DELETE FROM `user` WHERE `username`='".$username."' ");
      } catch (PDOException $e){
         echo $e;
      }
   }
   
   public function change_email($username, $new_email)
   {
      $this->dbh->query(
      "UPDATE `user` SET `email`='".$new_email."' 
         WHERE `username`='".$username."' 
      ");
   }
}



?>
