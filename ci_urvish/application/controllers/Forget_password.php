<?php
class Forget_password extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}
	public function display_doforget()
	{
		$data="";
		$this->load->view('public/forget_password',$data);
	}
	public function doforget()
	{
		$this->load->helper('url');
		$email= $this->input->post('uname');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','uname','required|xss_clean|trim');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('public/forget_password');
		}
		else
		{
			$q = $this->db->query("select * from user where uname='" . $email . "'");
			if ($q->num_rows > 0) {
				$r = $q->result();
				$user=$r[0];
				$this->load->helper('string');
				$password= random_string('alnum',6);
				$this->db->where('user_id', $user->user_id);
				$this->db->update('user',array('password'=>$password,'pass_encryption'=>MD5($password)));
				$this->load->library('email');
				$this->email->from('contact@example.com', 'sampletest');
				$this->email->to($user->uname); 	
				$this->email->subject('Password reset');
				$this->email->message('You have requested the new password, Here is you new password:'. $password);	
				$this->email->send();
				$this->session->set_flashdata('message','Password has been reset and has been sent to email');		
				redirect('public/admin_login');
			}
		}
	}
}