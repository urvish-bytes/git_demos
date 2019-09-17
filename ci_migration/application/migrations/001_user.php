<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		// Create table
			$this->dbforge->add_field(array(
				'userid' => array(
					'type' => 'INT',
					'constraint' => 2,
					'auto_increment' => TRUE 
				), 
				'username' => array(
					'type' => 'VARCHAR',
					'constraint' => 50 
				), 
				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => 50 
				) 
			));

			// $this->dbforge->add_field($fields);
			$this->dbforge->add_key('userid',TRUE);	
			$this->dbforge->create_table('user');

		// Insert record
			$insert = array(
				array('userid' => "1",
					'username' => 'user1',
					'password' => 'user1'
				),
				array('userid' => "2",
					'username' => 'user2',
					'password' => 'user2'
				),
				array('userid' => "3",
					'username' => 'user3',
					'password' => 'user3'
				)
			);
			// $this->db->insert('user', $insert); // for single record 
			$this->db->insert_batch('user', $insert); // for multiple record

		// Delete
			$delete = array(
				'userid'=>'2',
				'username'=>'user2',
				'password'=>'user2'
			);
			$this->db->where_in('empid',$delete);
			$this->db->delete('emp'); 
	}

	public function down() {
		$this->dbforge->drop_table('user');
	}

}

/* End of file 001_user.php */
/* Location: ./application/migration/001_user.php */