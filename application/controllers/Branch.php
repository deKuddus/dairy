<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('branches');
	}

	public function index()
	{
		$data['branches'] = $this->branches->show();
		$data['content'] = $this->load->view('branch/branch',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function create()
	{
		$data['content']=$this->load->view('branch/add-branch','',true);
		$this->load->view('layout/master',$data);
	}


	public function store()
	{

		$this->form_validation->set_rules('name', 'Branch Name', 'required');
		$this->form_validation->set_rules('address_line_1', 'Address 1', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->create();

		}else{

			$this->branches->store();
			redirect('branch'); 
		}
	}

	public function edit($id)
	{
		$data['branches'] = $this->branches->edit($id);
		$data['content']=$this->load->view('branch/edit-branch',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function update($id)
	{

		$this->form_validation->set_rules('name', 'Branch Name', 'required');
		$this->form_validation->set_rules('address_line_1', 'Address 1', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->edit($id);

		}else{

			$this->branches->update($id);
			redirect('branch'); 
		}
	}

	public function delete($id)
	{
		$this->branches->delete($id);
		redirect('branch');
	}


}
