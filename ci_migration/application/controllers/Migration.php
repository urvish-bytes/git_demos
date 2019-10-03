<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends CI_Controller 
{
	public function index()
	{
		// if (ENVIRONMENT == 'development') 
		// {
	        $this->load->library('migration');
	    	    
	        if ( ! $this->migration->current()) {
	        	show_error($this->migration->error_string());
	        } else {
	          	echo "<h3>Migration Working</h3>";
	        }
  //     	} else {
	 //        echo "Migration Not Working";
		// }
	}
}

/* End of file Migrate.php */
/* Location: ./application/controllers/Migrate.php */