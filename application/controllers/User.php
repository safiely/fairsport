<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	public function login()
	{
		if(isset($_SESSION['logged_in'])){
			redirect('/', 'refresh');
		}else{
			$this->load->view('homepage/header');
			$this->load->view('homepage/login');
			$this->load->view('homepage/footer');
		}
		
	}

	public function signup()
	{
		if(isset($_SESSION['logged_in'])){
			redirect('/', 'refresh');
		}else{
			$this->load->view('homepage/header');
			$this->load->view('homepage/signup');
			$this->load->view('homepage/footer');
		}
		
	}

	public function register()
	{
		if(isset($_SESSION['logged_in'])){
			redirect('/', 'refresh');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($name == null || $email == null || $password == null ){
				redirect('/signup', 'refresh');
			}else{
				$data = array(
					'user_name' => $name,
					'user_email' => $email,
					'user_pass' => $this->pass_hash($password),
					'user_type' => 'member',
					'user_created' => date('Y-m-d H:i:s'),
				);
				$res = $this->m_user->register($data, 'users');
				if($res === true){
					redirect('/login', 'refresh');
				}else if($res === 'duplicated'){
					echo "<script> alert('Already registerd! Please login.');document.location='" . base_url() . "login'</script>";
				}else{
					echo "<script> alert('Signup failed!');document.location='" . base_url() . "signup'</script>";
				}
			}
			
		}
		
	}

	public function signin(){
		$email = $this->input->post('email');
		$password = $this ->input->post('password');

		$where = array(
			'user_email' => $email
		);

		$res = $this->m_user->signin($where, 'users')->result();

		$is_match = $this->pass_verify($password, $res[0]->user_pass);
		if($is_match){
			$session_data = array(
				'email' => $res[0]->user_email,
				'name' => $res[0]->user_name,
				'avatar' => $res[0]->user_avatar,
				'type' => $res[0]->user_type,
			);
			// Add user data in session
			$this->session->set_userdata('logged_in', $session_data);
			redirect('/', 'refresh');
		}else{
			echo "<script> alert('Login failed!');document.location='" . base_url() . "login'</script>";
		}
	}

	public function logout(){
		session_destroy();
		redirect('/', 'refresh');
	}

	public function pass_hash($password){
		return password_hash($password, PASSWORD_BCRYPT);
	}

	public function pass_verify($password, $hash){
		return password_verify($password, $hash);
	}
}
