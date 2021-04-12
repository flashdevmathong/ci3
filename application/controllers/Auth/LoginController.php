<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
	}

	public function index()
	{
		$this->load->view('login');	
	}
	
	public function login()
	{

		// $this->form_validation->set_message('email_check', 'Please provide an acceptable email address.');
		// $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_email_check');

		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
		$this->form_validation->set_rules('musername','Musername','trim|required|alpha');
		$this->form_validation->set_rules('mpassword','Mpassword','trim|required');
	

		if($this->form_validation->run() == FALSE)
		{
          $this->index();
		}
		else
		{
         $data = [
			 'musername' => $this->input->post('musername'),
			 'mpassword' => $this->input->post('mpassword')
		 ];
		 $user = new UserModel;
		 $result = $user->loginUser($data);
        if($result != FALSE)
		{
			$auth_userdetails = [ 
				'mid' => $result->mid,
				'name' => $result->name,
				'dep' => $result->dep,
				'mlevel' => $result->mlevel,
				'picture' => $result->picture
			];
			// 0 = user 1 = admin
			$this->session->set_userdata('authenticated',$result->mlevel);
			$this->session->set_userdata('auth_user',$auth_userdetails);
			$this->session->set_flashdata('status','You are Loggedin successfully');
			redirect(base_url('home'));	
		}
		else
		{
			$this->session->set_flashdata('status','Invalid Username  or Password');
			 redirect(base_url('login'));
		}
		}
	}
}
