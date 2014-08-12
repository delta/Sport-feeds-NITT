<?php

class Users{
 
 private $db;

 public function __construct($database){
  
   $this->db=$database;

}


 //login to the teams using an accessKey
public function login($accessKey) {
 
	$query = $this->db->prepare("SELECT `AccessKey` FROM `Teams` WHERE `AccessKey` = ?");
	$query->bindValue(1, $accessKey);
	
	try{
		
		$query->execute();
		$data = $query->fetch();
		$stored_accesskey = $data['AccessKey'];
		$id = $data['Id'];
		
		#hashing the supplied password and comparing it with the stored hashed password.
		if($accessKey === $stored_accesskey){
			return $id;
                       //return true;	
		}else{
			return false;	
		}
 
	}catch(PDOException $e){
		die($e->getMessage());
	}
}

// fetch team data of any sport..
public function teamdata($id) {
 
	$query = $this->db->prepare("SELECT * FROM `Teams` WHERE `Id`= ?");
	$query->bindValue(1, $id);
 
	try{
 
		$query->execute();
 
		return $query->fetch();
 
	} catch(PDOException $e){
 
		die($e->getMessage());
	}
}


}
?>
