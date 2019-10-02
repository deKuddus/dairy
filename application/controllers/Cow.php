<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cow extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cows');
		$this->load->model('sheds');
		$this->load->model('genders');
	}

	public function index()
	{
		$data['cows'] = $this->cows->show();
		$data['sheds'] = $this->sheds->show();
		$data['genders'] = $this->genders->show();
		$data['content']=$this->load->view('cow/cow',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function create()
	{
		$data['array'] = $this->cows->arrayData();
		$data['content'] = $this->load->view('cow/add-cow',$data,true);
		$this->load->view('layout/master',$data);
	}

	public function store()
	{
		$config = array(
			'upload_path' => "./cows/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000"/*, // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"*/
			);

		$this->form_validation->set_rules('cow_id', 'Cow Id ', 'required');
		$this->form_validation->set_rules('branch_id', 'Branch Name ', 'required');
		$this->form_validation->set_rules('shed_id', 'Shed Name', 'required');
		$this->form_validation->set_rules('cow_gender', 'Gender ', 'required');
		$this->form_validation->set_rules('cow_type', 'Cows Type', 'required');
		$this->form_validation->set_rules('cow_status', 'Cows Status', 'required');
		$this->form_validation->set_rules('availability_status', 'Availablity Status ', 'required');
		$this->form_validation->set_rules('cow_weight', 'Cow Weight', 'required');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('cow_color', 'Cow Color', 'required');
		$this->form_validation->set_rules('breeding_status', 'Breeding Status', 'required');
		$this->form_validation->set_rules('breeding_percentage', 'Breeding Percentage', 'required');
		$this->form_validation->set_rules('vendor_contact', 'Vendor Contact', 'required');
		$this->form_validation->set_rules('paternal_history', 'Paternal History', 'required');
		$this->form_validation->set_rules('maternal_history', 'Maternal History', 'required');
		$this->form_validation->set_rules('expected_selling_price', 'Expected Sal Price', 'required');
		$this->form_validation->set_rules('estimated_sale_date', 'Estimated Sale Date', 'required');
		//$this->form_validation->set_rules('cow_image', 'Cow Id ', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$this->create();

		}else{
			$this->load->library('upload', $config);
			if($this->upload->do_upload('cow_image')){
				$data = $this->upload->data();
				$image_name = $config['upload_path'].$data['file_name'];
				$this->cows->store($image_name);
				redirect('cow');
			}else{
				$data['img_err'] = $this->upload->display_errors('<p>', '</p>');
				$data['content'] = $this->load->view('cow/add-cow',$data,true);
				$this->load->view('layout/master',$data);
			}
		}
	}


	public function edit($id)
	{
		$data['array'] = $this->cows->arrayData();
		$data['cows'] = $this->cows->edit($id);
		$data['content'] = $this->load->view('cow/edit-cow',$data,true);
		$this->load->view('layout/master',$data);
	}


	public function update($id)
	{
		$config = array(
			'upload_path' => "./cows/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
				'max_size' => "2048000"/*, // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"*/
			);

		$this->form_validation->set_rules('branch_id', 'Branch Name ', 'required');
		$this->form_validation->set_rules('shed_id', 'Shed Name', 'required');
		$this->form_validation->set_rules('cow_gender', 'Gender ', 'required');
		$this->form_validation->set_rules('cow_type', 'Cows Type', 'required');
		$this->form_validation->set_rules('cow_status', 'Cows Status', 'required');
		$this->form_validation->set_rules('availability_status', 'Availablity Status ', 'required');
		$this->form_validation->set_rules('cow_weight', 'Cow Weight', 'required');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('cow_color', 'Cow Color', 'required');
		$this->form_validation->set_rules('breeding_status', 'Breeding Status', 'required');
		$this->form_validation->set_rules('breeding_percentage', 'Breeding Percentage', 'required');
		$this->form_validation->set_rules('vendor_contact', 'Vendor Contact', 'required');
		$this->form_validation->set_rules('paternal_history', 'Paternal History', 'required');
		$this->form_validation->set_rules('maternal_history', 'Maternal History', 'required');
		$this->form_validation->set_rules('expected_selling_price', 'Expected Sal Price', 'required');
		$this->form_validation->set_rules('estimated_sale_date', 'Estimated Sale Date', 'required');
		//$this->form_validation->set_rules('cow_image', 'Cow Id ', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$this->edit($id);
		}else{
			if($this->input->post('cow_image'))
			{
				$this->load->library('upload', $config);
				if($this->upload->do_upload('cow_image')){
					$data = $this->upload->data();
					$image_name = $config['upload_path'].$data['file_name'];
					$this->cows->update_with_image($id,$image_name);
					redirect('cow');
				}else{
					$data['img_err'] = $this->upload->display_errors('<p>', '</p>');
					$data['content'] = $this->load->view('cow/edit-cow',$data,true);
					$this->load->view('layout/master');
				}
			}else{
				$this->cows->update_without_image($id);
				redirect('cow');
			}
		}
	}


	public function delete($id)
	{
		$this->cows->delete($id);
		redirect('cow');
	}

	public function details($cow_id)
	{
		$data['data'] = $this->cows->arrayData();
		$data['cows'] = $this->cows->details($cow_id);
		$data['content'] = $this->load->view('cow/cow-view',$data,true);
		$this->load->view('layout/master',$data);
	}


	public  function shed($branch_id)
	{
		$a = $this->cows->shed($branch_id);
		echo json_encode($a);
	}

	public  function cowInBranch($shed_id,$branch_id)
	{
		return $this->cows->cowInBranch($shed_id,$branch_id);
	}




}
