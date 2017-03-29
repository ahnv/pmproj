<?php

class loginHelper{

	private $db;

	public function __construct($db){ $this->db=$db; }
	
	public function login($user,$pass) {
		$query=$this->db->prepare("SELECT uname,pwd,uid FROM user WHERE uname=? AND pwd=?");
		$query->execute(array($user,$pass));
		$rows=$query->fetchAll(PDO::FETCH_ASSOC);
		if(count($rows)>0) {
			$_SESSION['logged_in'] = true;
			$_SESSION['uname'] = $rows[0]['uname'];
			$_SESSION['pwd'] = $rows[0]['pwd'];
			$_SESSION['uid'] = $rows[0]['uid'];
			return true;
		}
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