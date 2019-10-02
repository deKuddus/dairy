<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
$this->load->model('branches');
        $this->load->model('ratios');
    }

	public function index()
	{
		$branches = $this->branches->show();
		$this->load->view('layout/header',['branches' =>$branches]);
		$this->load->view('ratio/ratio');
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$branches = $this->branches->show();
		$this->load->view('layout/header',['branches' =>$branches]);
		$this->load->view('ratio/add-ratio');
		$this->load->view('layout/footer');
	}
}
