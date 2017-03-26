<?php

class registerHelper
{

	private $db;


	public function __construct($db)
	{
		$this->db=$db;
	}

	public function register($user,$pass,$name,$email)
	{
		$query=$this->db->prepare("select uname,email from user where uname=? or email=?");
		$query->execute(array($user,$email));
		$rows=$query->fetchAll(PDO::FETCH_ASSOC);
		
		if(count($rows)>0)
			return false;
		
		//Uname,email unique

		$query=$this->db->prepare("inser into user(uname,pwd,name,email) values(?,?,?,?)");
		$query->execute(array($user,$pass,$name,$email));

		return true;
	}
}