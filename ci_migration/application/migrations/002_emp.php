<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Emp extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		// Create table
			$this->dbforge->add_field(array(
				'empid' => array(
					'type' => 'INT',
					'constraint' => 2,
					'auto_increment' => TRUE 
				), 
				'fname' => array(
					'type' => 'VARCHAR',
					'constraint' => 50 
				), 
				'lname' => array(
					'type' => 'VARCHAR',
					'constraint' => 50 
				)
			));

			$this->dbforge->add_key('empid',TRUE);	
			$this->dbforge->create_table('emp');


		// Insert record
			$insert = array(
				array('empid' => "1",
					'fname' => 'urvish',
					'lname' => 'patel'
				),
				array('empid' => "2",
					'fname' => 'vishal',
					'lname' => 'patel'
				),
				array('empid' => "3",
					'fname' => 'parth',
					'lname' => 'shah'
				),
				array('empid' => "4",
					'fname' => 'tej',
					'lname' => 'kothari'
				)
			);
			// $this->db->insert('emp', $insert); // for single record
			$this->db->insert_batch('emp', $insert); // for multiple record


		// Update records
			$update = array(
				array('empid'=>'1',
					'fname'=>'urvishh',
					'lname'=>'patell'
				),
				array('empid'=>'2',
					'fname'=>'vishall',
					'lname'=>'patell'
				),
				array('empid'=>'3',
					'fname'=>'parthh',
					'lname'=>'shahh'
				)
			);
			$this->db->update_batch('emp',$update,'empid');

		// Delete record
			$delete = array(
				'empid'=>'2',
				'fname'=>'vishall',
				'lname'=>'patell'
			);
			$this->db->where_in('empid',$delete);
			$this->db->delete('emp');
	}

	public function down() {
		$this->dbforge->drop_table('emp');
	}

}

/* End of file 002_emp.php */
/* Location: ./application/migration/002_emp.php */