<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Authenticated extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('authenticated'))
		{
		$this->session->set_flashdata('status','Login First');
		redirect(base_url('login'));
		}
	}

	public function check_isAdmin()
	{
		if($this->session->has_userdata('authenticated'))
		{
             if($this->session->userdata('authenticated') != '1')
			 {
				$this->session->set_flashdata('status','Access Denied. ! You are not an admin.');
				redirect(base_url('403'));
			 }
			//  redirect(base_url('403'));
		}
		else
		{
			$this->session->set_flashdata('status','Login First');
			redirect(base_url('login'));
		}
	}
}
