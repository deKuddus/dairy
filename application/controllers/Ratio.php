<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ratios');
    }

	public function index()
	{	
		$data['ratios'] = $this->ratios->show();
		$data['content'] = $this->load->view('ratio/ratio',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function edit($id)
	{

		$data['ratios'] = $this->ratios->edit($id);
		$data['content'] = $this->load->view('ratio/edit-ratio',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('weight_hay_feed_amount', 'Hay  Value', 'required');
		$this->form_validation->set_rules('weight_green_fodder_feed_amount', 'Green Fodder  Value', 'required');
		$this->form_validation->set_rules('weight_concentrate_feed_amount', 'Concentrate  Value', 'required');
		$this->form_validation->set_rules('lactation_concentrate_feed_amount', 'Lactation  Value', 'required');
		
		if($this->form_validation->run() === TRUE){
			$input = [
						'hay' => $this->input->post('weight_hay_feed_amount'),
						'green_fooder' => $this->input->post('weight_green_fodder_feed_amount'),
						'concentrate' => $this->input->post('weight_concentrate_feed_amount'),
						'lactation_concentrate' => $this->input->post('lactation_concentrate_feed_amount')
					];
			$this->ratios->update($input,$id);
			redirect('ratio');
		}else{
			$this->edit($id);
		}
	}
}
