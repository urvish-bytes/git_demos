<?php

class MY_Model extends CI_Model {

	public function test()
	{
		echo "Test function from MY_Model";
	}
}

class adminPanel extends MY_Model {

}

class userPanel extends MY_Model {
}