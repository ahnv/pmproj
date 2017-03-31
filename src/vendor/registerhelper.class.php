<?php

class registerHelper{

	private $db;
	private $app;

	public function __construct($db){ $this->db=$db; $this->app = new APP();}

	public function register($user,$pass,$name,$email){
		$user = $this->app->_cleanAlphaNumeric($user);
		$pass = $this->app->_cleanPassword($pass);
		$name = $this->app->_cleanAlphaNumeric($name);
		$email = $this->app->_cleanEMAIL($email);
		if ($user && $pass && $name && $email){
			$password = password_hash($password, PASSWORD_BCRYPT);
			$query=$this->db->prepare("SELECT uname,email FROM user WHERE uname=? OR email=?");
			$query->execute(array($user,$email));
			$rows=$query->fetchAll(PDO::FETCH_ASSOC);
			
			if(count($rows)>0) return false;
			
			//Uname,email uniquez

			$query=$this->db->prepare("INSERT INTO user(uname,pwd,name,email) VALUES(?,?,?,?)");
			$query->execute(array($user,$pass,$name,$email));
			return true;
		}
		return false;
		
	}
}