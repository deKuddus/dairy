<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('suppliers');
    }

    public function index(){
    	return $this->suppliers->show();
    }

	public function create()
	{	
		$data['suppliers'] = $this->index();
		$data['content'] =  $this->load->view('accounts/supplier-ladger',$data,true);
		$this->load->view('layout/master',$data);
	}


	public function store()
	{
		$this->form_validation->set_rules('name', 'Supplier Title ', 'required');
		$this->form_validation->set_rules('contact', 'Supplier Contact ', 'required');
		$this->form_validation->set_rules('address', 'Supplier Address ', 'required');
		
		if ($this->form_validation->run() === FALSE){
			$this->create();
		}else{
			$input = [
				'name' => $this->input->post('name'),
				'contact' => $this->input->post('contact'),
				'address' => $this->input->post('address'),
				'comments' => $this->input->post('comment')
			];
			$this->suppliers->store($input);
			$data = array(
				'status' => 200,
				'message'   => 'success'
			);
			header("Content-type: application/json");
			echo json_encode($data);
			exit();
		}
	}


	public function supplier_name($name)
	{
		return $this->suppliers->supplier_name($name);
	}

}
