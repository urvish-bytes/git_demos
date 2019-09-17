<?php
class Test {

	public function abc() {
		$ci = & get_instance();
		$ci->load->helper('array');
		
		echo "Abc function of test library";
	}

}