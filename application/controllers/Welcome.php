<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{
		$data['content'] = $this->load->view('home','',true);
		$this->load->view('layout/master',$data);
	}
}
