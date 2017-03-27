<?php

class registerHelper{

	private $db;

	public function __construct($db){ $this->db=$db; }

	public function register($user,$pass,$name,$email){
		
		$query=$this->db->prepare("SELECT uname,email FROM user WHERE uname=? OR email=?");
		$query->execute(array($user,$email));
		$rows=$query->fetchAll(PDO::FETCH_ASSOC);
		
		if(count($rows)>0) return false;
		
		//Uname,email unique

		$query=$this->db->prepare("INSERT INTO user(uname,pwd,name,email) VALUES(?,?,?,?)");
		$query->execute(array($user,$pass,$name,$email));
		return true;
		
	}
}