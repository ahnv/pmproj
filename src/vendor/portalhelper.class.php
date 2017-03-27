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
			$query=$this->db->prepare("select service,domain,sid,pass from portal where uid=?");
			$query->execute(array($user));
		}
	}

?>