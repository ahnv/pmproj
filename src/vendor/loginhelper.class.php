<?php

class loginHelper{

	private $db;

	public function __construct($db){ $this->db=$db; }
	
	public function login($user,$pass) {
		$query=$this->db->prepare("SELECT uname,pwd,uid FROM user WHERE uname=? AND pwd=?");
		$query->execute(array($user,$pass));
		$rows=$query->fetchAll(PDO::FETCH_ASSOC);
		if(count($rows)==1) return true;
		return false;
	}

	public static function checkUser($user)
	{
		$query=$this->db->prepare("select uname from user where uname=?");
		$query->execute(array($user));
		$rows=$query->fetchAll(PDO::FETCH_ASSOC);
		if(count($rows)==1)	return true;
		return false;
	}

}