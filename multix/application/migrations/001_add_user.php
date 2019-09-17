<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User extends CI_Migration {

	// public function __construct()
	// {
	// 	$this->load->dbforge();
	// 	$this->load->database();
	// }

	public function up() {
		$this->dbforge->add_field(array(
			'userid' => array(
				'type' => 'INT',
				'constraint' => 2,
				'auto_increment' => TRUE 
			), 
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => 255 
			), 
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 10 
			) 
		));

		// $this->dbforge->add_field($fields);
		$this->dbforge->add_key('userid',TRUE);	
		$this->dbforge->create_table('multix_user');
	}

	public function down() {
		$this->dbforge->drop_table('multix_user');
	}

}

/* End of file User.php */
/* Location: ./application/migration/User.php */