<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage/header');
		$this->load->view('homepage/index');
		$this->load->view('homepage/footer');
	}

	public function login(){
		$this->load->view('homepage/header');
		$this->load->view('homepage/login');
		$this->load->view('homepage/footer');
	}
}
