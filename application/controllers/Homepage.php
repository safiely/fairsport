<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_dashboardpost');
	}

	public function index()
	{
		$data['sql'] = $this->m_dashboardpost->allpostapproved();

		$this->load->view('homepage/header');
		$this->load->view('homepage/index', $data);
		$this->load->view('homepage/footer');
	}

	public function login(){
		$this->load->view('homepage/header');
		$this->load->view('homepage/login');
		$this->load->view('homepage/footer');
	}
}
