<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_dashboardpost');
		$this->load->helper("file");
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


	public function users(){
		if($this->logged_in()){
			$data['sql'] = $this->m_dashboardpost->alluser();
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/users', $data);
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


	public function deletepost($post_id = null){
		if($this->logged_in()){
			$where = array(
				'post_id' =>$post_id,
			);
			$res = $this->m_dashboardpost->getpost($where, 'posts');
			$filepath = './uploads/';
			$filename = $filepath.$res[0]->post_img;
			if (file_exists($filename))
			{
				unlink($filename);
			}
			
			$res2 = $this->m_dashboardpost->deletepost($where, 'posts');
			if($res && $res2){
				echo "<script> alert('Delete Success!');document.location='" . base_url() . "dashboard/allpost'</script>";
			}else{
				$this->load->view('pages/500');
			}
		}else{
			redirect('/dashboard', 'refresh');
		}
		
	}

	public function editpost($post_id = null){
		if($this->logged_in()){
			$where = array(
				'post_id' =>$post_id,
			);
			$data['post'] = $this->m_dashboardpost->getpost($where, 'posts');
			// var_dump($data[0]->post_desc);
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/pages/editpost', $data);
			$this->load->view('dashboard/footer');
		}else{
			redirect('/dashboard', 'refresh');
		}
	}

	public function updatepost(){
		if($this->logged_in()){

			$id = $this->input->post('id');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$currentimg = $this->input->post('currentimg');
			$currentimg2 = $this->input->post('currentimg2');
			$approved = $this->input->post('approved');

			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'max_width' => 0,
				'max_height' => 0,
				'max_size' => 0,
				'encrypt_name' => TRUE,
			);

			$where = array(
				'post_id' => $id,
			);

			if ( ! is_dir($config['upload_path']) ){
				echo 'invalid dir';
			}else{
				$this->load->library('upload', $config);
				if($this->upload->do_upload('newfeaturedimg'))
				{
					// if newfeaturedimg not empty it means uploading new image;

					$filepath = './uploads/';
					$filename = $filepath.$currentimg;

					$data = array(
						'post_title' => $title,
						'post_desc' => $content,
						'post_img' => $this->upload->data('file_name'),
						'post_approved' => $approved,
						'post_modified' => date('Y-m-d H:i:s'),
						'post_modifiedby' => $_SESSION['logged_in']['id'],
					);
	
					// echo "upload new image";
					// var_dump($data);

					$this->updatepost_save($where, $data);
				}else{
					$filepath = './uploads/';
					$filename = $filepath.$currentimg2;
					$data = array(
						'post_title' => $title,
						'post_desc' => $content,
						'post_img' => $currentimg,
						'post_approved' => $approved,
						'post_modified' => date('Y-m-d H:i:s'),
						'post_modifiedby' => $_SESSION['logged_in']['id'],
					);

					if($currentimg == "" || $currentimg == null){
						// Check post currentimg if empty it means feautured image removed
						

						// var_dump($filename);
						// var_dump($currentimg2);
						if($currentimg2 == "" || $currentimg2 == null){
							// condition to check if currentimg2 from db is null not try to find and delete file
							// echo "<script>alert('not try deleting')</script>";
							// var_dump($data);
							$this->updatepost_save($where, $data);
						}else{
							// condition to check if currentimg2 from db is not empty
							// new removed from dashboard try to find and delete file

							// echo "<script>alert('try deleting')</script>";
							//var_dump($data);
							if (file_exists($filename))
							{
								unlink($filename);
							}
							$this->updatepost_save($where, $data);
						}					
					}else{
						$this->updatepost_save($where, $data);
					}
				}
			}
		}else{
			redirect('/dashboard', 'refresh');
		}
	}

	function updatepost_save($where, $data){
		$res = $this->m_dashboardpost->updatepost($where, $data, 'posts');
		if($res){
			echo "<script> alert('Success update post.');document.location='" . base_url() . "dashboard/allpost'</script>";
		}else{
			echo "<script> alert('Failed update post.');document.location='" . base_url() . "dashboard/allpost'</script>";

		}
	}

}
