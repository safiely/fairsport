<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_dashboardpost');
	}
	
	public function index()
	{
		if($this->logged_in()){
			$data = $this->m_dashboardpost->countall();
			// var_dump($data);
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/index', $data);
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function post(){
		if($this->logged_in()){
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/newpost');
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function allpost(){
		if($this->logged_in()){
			$data['sql']= $this->m_dashboardpost->allpost();
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/allpost', $data);
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function mypost(){
		if($this->logged_in()){
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/mypost');
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function users(){
		if($this->logged_in()){
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/users');
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function comments(){
		if($this->logged_in()){
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/comments');
			$this->load->view('dashboard/footer');
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function addpost(){
		if($this->logged_in()){
			$title = $this->input->post('title');
			$content = $this->input->post('content');

			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'max_width' => 0,
				'max_height' => 0,
				'max_size' => 0,
				'encrypt_name' => TRUE,
			);

			if ( ! is_dir($config['upload_path']) ){
				echo 'invalid dir';
			}else{
				$this->load->library('upload', $config);
				if($this->upload->do_upload('featuredimage'))
				{
					// $data = array('upload_data' => $this->upload->data());
					$data = array(
						'post_title' => $title,
						'post_desc' => $content,
						'post_img' => $this->upload->data('file_name'),
						'post_approved' => false,
						'post_created' => date('Y-m-d H:i:s'),
						'post_createdby' => $_SESSION['logged_in']['id'],
					);

					$res = $this->m_dashboardpost->addpost($data, 'posts');
					if($res){
						echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
					}else{
						echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";

					}
				}
				else
				{
					echo 'Something wrong to adding new post!';
				}
			}

			
		}else{
			redirect('/dashboard', 'refresh');
		}
	}


}
