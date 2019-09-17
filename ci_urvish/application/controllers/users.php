<?php
class Users extends MY_Controller {

	public function index() {

		// Include Libraries 
			// $this->load->library(array('form_validation','email'));
			// $this->form_validation;
			// $this->email;

		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getUsers();

		// Include Helper
			// $this->load->helper('array');
			// test(); 

		// $this->load->view('users_list',$data);

		// Extending Helper
			// $arr = ['abc'=>'ABC','xyz'=>'XYz'];
			// echo element('def', $arr, 'Not Found');

		// Custome Libraries
			$this->load->library('email');
			$this->email->test();

		// Core Class
			$this->test();
	}

}