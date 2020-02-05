<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lactation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('lactations');
    }

	public function index()
	{
		$data['content'] =  $this->load->view('lactation/lactation','',true);
		$this->load->view('layout/master',$data);
	}


	
	public function lactation($shed_id,$branch_id)
	{
		$this->load->model('types');
		$data['types'] = $this->types->show();
		$data['branch_id'] = $branch_id;
		$data['shed_id'] = $shed_id;
		$data['content'] = $this->load->view('activity/lactation',$data,true);
		$this->load->view('layout/master',$data);
	}
/*
	public function ajaxWeightFeed(){
		$shed_id = $this->input->post('selectedShed');
		$branch_id = $this->input->post('branch_id');
		$html = "";
		foreach ($this->cowInShadeInBranch($shed_id,$branch_id) as $key => $value) {
			$html.='<tbody><tr>td>'.$cow->cow_id '</td><td>';
		}
	}


	public function cowInShadeInBranch($shed_id,$branch_id){
		return $this->lactations->cowInShadeInBranch($shed_id,$branch_id);
	}*/

	public function save_lactation()
	{

		/*echo "<pre>";
		var_dump($_POST['cow_id']);die;*/
		$date = str_replace('/', '-', $this->input->post('date'));
		$count = sizeof($_POST['cow_id']);
		for($i = 0;$i< $count;$i++) {

			$am = $this->lactations->get_today_am($date,$this->input->post('cow_id')[$i]);
			$pm = $this->lactations->get_today_pm($date,$this->input->post('cow_id')[$i]);
			$gender = $this->lactations->get_gender($this->input->post('cow_id')[$i]);
			$male_data = $this->lactations->get_today_for_maleCow($date,$this->input->post('cow_id')[$i]);
			if($am && $pm){
				$data = array('status' => 400,'message'=>'Woops!! Data Already Added For Today');
				header("Content-type: application/json");
				echo json_encode($data);
				exit();
			}
			elseif($am > 0 && $pm <= 0 && $gender == 'female'){
				$lac_pm = (isset($this->input->post('lactation_pm')[$i])?$this->input->post('lactation_pm')[$i]:0);
				$data = [
	        	'lactation_pm' => $this->input->post('lactation_pm')[$i],
	        	'last_lactation' => ($am + 0)
	        	];
	        	$this->lactations->save_lactation($data,$this->input->post('cow_id')[$i]);	
			}elseif(!$am && !$pm && $gender == 'female'){
				$data = [
		        	'concentrate' => $this->input->post('concentrate')[$i],
		        	'hay' => $this->input->post('hay')[$i],
		        	'green_fooder' => $this->input->post('green_fooder')[$i],
		        	't_val' => $this->input->post('t_val')[$i],
		        	'lactation_am' => $this->input->post('lactation_am')[$i],
		        	'lactation_pm' => $this->input->post('lactation_pm')[$i],
		        	'last_lactation' => $this->input->post('lactation_am_pm')[$i],
		        	'lac_date'=>$date,
		        ];
				$this->lactations->save_lactation($data,$this->input->post('cow_id')[$i]);
			}elseif(!empty($male_data) && $gender == 'male'){
				continue;
			}elseif(empty($male_data) && $gender == 'male'){
				$data = [
					'concentrate' => $this->input->post('concentrate')[$i],
					'hay' => $this->input->post('hay')[$i],
					'green_fooder' => $this->input->post('green_fooder')[$i],
					't_val' => $this->input->post('t_val')[$i],
					'last_lactation' => $this->input->post('lactation_am_pm')[$i],
					'lac_date'=>$date,
				];
				$this->lactations->save_lactation($data,$this->input->post('cow_id')[$i]);
			}
		}

		$tot_lac_data = [
        	'branch_id' => $this->input->post('branch_id'),
        	'shed_id' => $this->input->post('shed_id'),
        	't_concentrate' => $this->input->post('t_concen'),
        	't_hay' => $this->input->post('t_hay'),
        	't_food' => $this->input->post('t_food'),
        	't_feed' => $this->input->post('t_feed'),
        	't_milk' => $this->input->post('t_milk'),
        	'date'=>$date,
        ];
      
		$success = $this->lactations->save_total_lactation($tot_lac_data);
		if($success == true){
			$data = array('status' => 200,'message'=>'Success :) Data Added Successfully');
			header("Content-type: application/json");
			echo json_encode($data);
			exit();
		}
	}
}

