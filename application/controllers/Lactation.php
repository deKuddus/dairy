<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lactation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('diseases');
    }

	public function index()
	{
		$data['content'] =  $this->load->view('lactation/lactation','',true);
		$this->load->view('layout/master',$data);
	}

}
