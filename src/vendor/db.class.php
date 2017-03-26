<?php

class DB{
	protected $db = NULL;

	public function __construct(){ $this->db = NULL; }
	public function __destruct(){ $this->db = NULL; }

	public function getInstance() {
		try{
			$db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}catch(PDOException $e){
			elog::_elog($e,__FILE__,__LINE__);
		}
	}

}