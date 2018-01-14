<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
	}
	
	public function index()
	{
		if($this->logged_in()){
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/index');
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
		
	}

}
