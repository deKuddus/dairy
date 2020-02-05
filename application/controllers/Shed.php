<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shed extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sheds');
		$this->load->model('branches');
	}

	public function index()
	{
		$data['sheds'] = $this->sheds->show();
		$data['branches'] = $this->branches->show();
		$data['content'] = $this->load->view('shed/shed',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function create()
	{
		$data['branches'] = $this->branches->show();
		$data['content'] = $this->load->view('shed/add-shed',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function store()
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required');
		$this->form_validation->set_rules('branch_id', 'Branch Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->create();

		}else{

			$this->sheds->store();
			redirect('shed'); 
		}		
	}

	public function edit($id)
	{
		$data['sheds'] = $this->sheds->edit($id);
		$data['branches'] = $this->branches->show();
		$data['content'] = $this->load->view('shed/edit-shed',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required');
		$this->form_validation->set_rules('branch_id', 'Branch Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->edit($id);

		}else{

			$this->sheds->update($id);
			redirect('shed'); 
		}		
	}

	public function delete($id)
	{
		$this->sheds->delete($id);
		redirect('shed'); 
	}
}
