<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcomes');
	}

	public function index()
	{
		$data = [
			'total_cattle' => $this->welcomes->total_cattles(),
			'milking_cow' => $this->welcomes->total_milking_cows(),
			'total_heifers'=> $this->welcomes->total_heifers(),
			'total_bulls'=> $this->welcomes->total_bulls(),
			'last_day_lactations' => $this->welcomes->last_day_lactations(),
			'today_lactations' => $this->welcomes->today_lactations(),
			'tomorrow_green_fooder' => $this->welcomes->green_fooder_for_tomorrow(),
			'hay_for_tomorrow' => $this->welcomes->hay_for_tomorrow(),
			'concentrate_for_tomorrow' => $this->welcomes->concentrate_for_tomorrow(),
	];
		$data['content'] = $this->load->view('home',$data,true);
		$this->load->view('layout/master',$data);
	}
}
