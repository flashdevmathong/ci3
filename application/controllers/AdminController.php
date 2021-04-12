<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller 
{

     public function __construct()
	{
		parent::__construct();
		$this->load->model('Authenticated');
		$this->Authenticated->check_isAdmin();
	}

    public function index()
	{
		$this->load->view('navbar');
		$this->load->view('adminpage');

	}
}
