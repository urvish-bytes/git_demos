<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Blog extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'blogid' => array(
				'type' => 'INT',
				'constraint' => 2,
				'auto_increment' => TRUE
			),
			'blogtitle' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'blogcontent' => array(
				'type' => 'INT',
				'constraint' => 5
			)
		));

		$this->dbforge->add_key('blogid',TRUE);
		$this->dbforge->create_table('blog');
	}

	public function down() {
		$this->dbforge->drop_table('blog');
	}

}

/* End of file 20190916130025_blog.php */
/* Location: ./application/migrations/20190916130025_blog.php */