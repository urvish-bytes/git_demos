<?php

class Blog extends CI_Controller {

	public function index() {
		// echo "Index function of Blog controller.";
		$this->load->view('blog_index');

		// $this->load->modal('abc');
		// $this->abc->test();

		$this->load->model('authenticatefromfacebook','fb'); //model object is assign as fb
		$data = $this->fb->getData();
		print_r($data);
	}

	public function add() {
		echo "This is Add function of the Blog controller.";
	}

}