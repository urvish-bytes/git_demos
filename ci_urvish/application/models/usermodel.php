<?php 

class UserModel extends userPanel {

	public function getUsers()
	{	
		$this->load->database();

		// $q = $this->db->query("SELECT * From user_accounts");
		$q = $this->db->select('firstname,lastname')
					  // ->where('userid',1)
		 			  ->get('user_accounts');

		return $q->result_array();

		$this->test();
	}

}