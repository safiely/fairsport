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

	public function about(){
		$this->load->view('homepage/header');
		$this->load->view('homepage/about');
		$this->load->view('homepage/footer');
	}

	public function detail($id = null){
		if($id=="" || $id == null){
			redirect('/', 'refresh');
		}else{
			$where = array(
				'post_id' => $id,
			);
			$data['sql'] = $this->m_dashboardpost->singlepostdetail($where, 'posts');
			$this->load->view('homepage/header');
			$this->load->view('homepage/single', $data);
			$this->load->view('homepage/footer');
		}
		
	}
}
