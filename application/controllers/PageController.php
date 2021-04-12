<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller 
{
	
    public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
	}

    public function pagetodep()
	{
		$data['listUser'] = $this->userModel->listUser();
		$data['dep'] = $this->session->userdata('auth_user')['dep'];

		if($this->session->userdata('auth_user')['dep'] <= 6)
		{
			$this->load->view('includes/header');
			$this->load->view('backend/partials/home',$data);
			$this->load->view('includes/footer');
		}
		else
		{
			redirect(base_url('login'));
		}
	}
}
