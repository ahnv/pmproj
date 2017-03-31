<?php

	class portalHelper
	{
		private $db;

		public function __construct($db)
		{
			$this->db=$db;
		}

		public function fetch($user)
		{
			$query=$this->db->prepare("select service,domain,sid,spass,note from portal where uid=?");
			$query->execute(array($user));
			$row=$query->fetchAll(PDO::FETCH_ASSOC);
			return $row;

		}

		
	}

?>