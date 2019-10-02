<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diseas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('diseases');
    }

	public function index()
	{
		$data['diseases'] = $this->diseases->show();
		$data['types'] = $this->diseases->diseas_type();
		$data['content'] = $this->load->view('diseas/diseas',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function create()
	{
		$data['types'] = $this->diseases->diseas_type();
		$data['content']=$this->load->view('diseas/add-diseas',$data,true);
		$this->load->view('layout/master',$data);
	}


	public function store()
	{

		$this->form_validation->set_rules('name', 'Diseas Name', 'required');
		$this->form_validation->set_rules('type', 'Diseas Type', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->create();

		}else{

			$this->diseases->store();
			redirect('diseas'); 
		}
	}

	public function edit($id)
	{
		$data['diseases'] = $this->diseases->edit($id);
		$data['types'] = $this->diseases->diseas_type();
		$data['content']=$this->load->view('diseas/edit-diseas',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Diseas Name', 'required');
		$this->form_validation->set_rules('type', 'Diseas Type', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->edit($id);

		}else{

			$this->diseases->update($id);
			redirect('diseas'); 
		}
	}

	public function delete($id)
	{
		$this->diseases->delete($id);
		redirect('diseas');
	}

}
