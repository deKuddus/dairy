<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}

	public function index()
	{
		$data['user_data'] = $this->users->user(0);
		$data['content'] = $this->load->view('user/user',$data,true);
		$this->load->view('layout/master');
	}

	public function create()
	{
		$data['content'] = $this->load->view('user/add-user','',true);
		$this->load->view('layout/master',$data);
	}

	public function store()
	{
		$config = array(
			'upload_path' => "./users/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
				'max_size' => "2048000"/*, // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"*/
		);

		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('allotted_branches[]', 'Branch Allocation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_confirmation', 'Password Confirm', 'required');
		//$this->form_validation->set_rules('pic', 'Photo', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->create();
		}else{
			$this->load->library('upload', $config);
			if($this->upload->do_upload('pic')){
				$img_info = $this->upload->data();
				$imag_name = $config['upload_path'].$img_info['file_name'];
				$this->users->store_user($imag_name);
				$data['content'] = $this->load->view('user/user','',true);
				$this->load->view('layout/master',$data);
				
			}else{
				$data['img_error'] = $this->upload->display_errors('<p>', '</p>');
				$data['content'] = $this->load->view('user/add-user','',true);
				$this->load->view('layout/master',$data);
			}
		}
	}

	public function edit($id)
	{
		$data['user_data'] = $this->users->user($id);
		$data['content'] = $this->load->view('user/edit-user',$data,true);
		$this->load->view('layout/master',$data);
	}


	
	
}
