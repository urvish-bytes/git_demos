<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Product extends CI_Migration 
{

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up()
	{
		// Create table 
			$this->dbforge->add_field(array( 
				'prodid' => array( 
					'type' => 'INT', 
					'constraint' => 2, 
					'auto_increment' => TRUE 
				), 
				'prodname' => array( 
					'type' => 'VARCHAR', 
					'constraint' => 50 
				), 
				'prodprice' => array( 
					'type' => 'INT', 
					'constraint' => 5 
				) 
			)); 
			$this->dbforge->add_key('prodid',TRUE); 
			$this->dbforge->create_table('product'); 
 
		// Insert data 
			$insert = array( 
				array( 
					'prodid' => "1", 
					'prodname' => 'SH_001_LP', 
					'prodprice' => "899" 
				), 
				array( 
					'prodid' => "2", 
					'prodname' => 'SH_002_LP', 
					'prodprice' => "799" 
				) 
			); 
			$this->db->insert_batch('product',$insert); 
 
		// Update record 
			$update = array(  
				array( 
					'prodid' => "1", 
					'prodname' => "LP_SH_001", 
					'prodprice' => "1250" 
				), 
				array( 
					'prodid' => "2", 
					'prodname' => 'LP_SH_002', 
					'prodprice' => "1399" 
				) 
			); 
			$this->db->update_batch('product',$update,'prodid');

		// Delete record
			// $delete = array(
			// 	array(
			// 		'prodid' => "1",
			// 		'prodname' => "LP_SH_001",
			// 		'prodprice' => "1250"
			// 	)
			// );
			// $this->db->where_in('prodid',$delete);
			// $this->db->delete('product');
	} 

	public function down() 
	{
		$this->dbforge->drop_table('product');
	}

}

/* End of file 003_product.php */
/* Location: ./application/migrations/003_product.php */