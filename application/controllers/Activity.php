<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('branches');
		$this->load->model('sheds');
		$this->load->model('cows');
        $this->load->model('activities');
    }

	public function index()
	{
		$data['branches'] = $this->branches->show();
		$data['content'] = $this->load->view('activity/activity','',true);
		$this->load->view('layout/master');
	}

	public function show($branch_id)
	{

		$data['branch_id'] = $branch_id;
		$data['branches'] = $this->branches->show();
		$data['sheds'] = $this->sheds->sheds_by_branch($branch_id);
		$data['content'] = $this->load->view('activity/activity',$data,true);
		$this->load->view('layout/master',$data);
	}


	public function others($shed_id,$branch_id)
	{	
		$data['branch_id'] = $branch_id;
		$data['shed_id'] = $shed_id;
		$data['branches'] = $this->branches->show();
		$data['cows'] = $this->cows->cowInBranch($shed_id,$branch_id);
		$data['content'] = $this->load->view('activity/others',$data,true);
		$this->load->view('layout/master',$data);
	}

	public  function weighing()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'weighing' => $_POST['weight'][$counter],
			 	'created_at' => $date
			 ];
			 if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_weighing($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'weighing' => $_POST['weight'][$counter],
				 	'created_at' => $date
				];
				$success = $this->activities->update_weighing($_POST['cow_id'][$counter],$data);
			 }
		}

		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
	        echo json_encode($data);
	        exit();
		}
	}

	public  function sickness()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'isSick' => $_POST['isSick'][$counter],
			 	'sick_description' => $_POST['description'][$counter],
			 	'last_sick_date' => str_replace('/', '-',$_POST['date']),
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			  if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_sickness($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'isSick' => $_POST['isSick'][$counter],
				 	'sick_description' => $_POST['description'][$counter],
				 	'last_sick_date' => str_replace('/', '-',$_POST['date']),
				 	'created_at' => str_replace('/', '-',$_POST['date'])
				];
				$success = $this->activities->update_sickness($_POST['cow_id'][$counter],$data);
			 }
		}
		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
	        echo json_encode($data);
	        exit();
		}
	}

	public  function heating()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'inHeat' => $_POST['inHeat'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			  if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_heating($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'inHeat' => $_POST['isSick'][$counter],
				 	'created_at' => str_replace('/', '-',$_POST['date'])
				];
				$success = $this->activities->update_heating($_POST['cow_id'][$counter],$data);
			 }
		}

		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
	        echo json_encode($data);
	        exit();
		}
	}

	public  function pregnancy()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'isPregnant' => $_POST['isPregnant'][$counter],
			 	'last_pregnancy_date' => str_replace('/', '-',$_POST['date']),
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_pregnancy($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'isPregnant' => $_POST['isSick'][$counter],
				 	'last_pregnancy_date' => str_replace('/', '-',$_POST['date']),
				 	'created_at' => str_replace('/', '-',$_POST['date'])
				];
				$success = $this->activities->update_pregnancy($_POST['cow_id'][$counter],$data);
			 }
		}

		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
	        echo json_encode($data);
	        exit();
		}
	}

	public  function deworming()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			$data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'deworming_medicine_id' => $_POST['medicine_id'][$counter],
			 	'deworming_medicine_quantity' => $_POST['deworming_quantity'][$counter],
			 	'deworming_comments' => $_POST['comment'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			];
			if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_deworming($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'deworming_medicine_id' => $_POST['medicine_id'][$counter],
				 	'deworming_medicine_quantity' => $_POST['deworming_quantity'][$counter],
				 	'deworming_comments' => $_POST['comment'][$counter],
				 	'created_at' => str_replace('/', '-',$_POST['date'])
				];
				$success = $this->activities->update_deworming($_POST['cow_id'][$counter],$data);
			 }
		}
		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
			echo json_encode($data);
			exit();
		}
	}

	public  function vaccination()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'vaccination_medicine_id' => $_POST['medicine_id'][$counter],
			 	'vaccination_quantity' => $_POST['deworming_quantity'][$counter],
			 	'vaccination_comments' => $_POST['comment'][$counter],
			 	'last_vaccination_date' => str_replace('/', '-',$_POST['date']),
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_vaccination($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'vaccination_medicine_id' => $_POST['medicine_id'][$counter],
				 	'vaccination_quantity' => $_POST['deworming_quantity'][$counter],
				 	'vaccination_comments' => $_POST['comment'][$counter],
				 	'last_vaccination_date' => str_replace('/', '-',$_POST['date']),
				 	'created_at' => str_replace('/', '-',$_POST['date'])
			 	];
			 	$success = $this->activities->update_vaccination($_POST['cow_id'][$counter],$data);
			 }
		}

		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
			echo json_encode($data);
			exit();
		}
	}

	public  function treatment()
	{
		$date = str_replace('/', '-',$_POST['date']);
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cows_id' => $_POST['cow_id'][$counter],
			 	'treatment_medicine_id' => $_POST['medicine_id'][$counter],
			 	'treatment_disease_id' => $_POST['disease_id'][$counter],
			 	'treatment_tests' => $_POST['tests'][$counter],
			 	'treatment_medicine_quantity' => $_POST['medicine_quantity'][$counter],
			 	'treatment_doctor_name' => $_POST['doctor_name'][$counter],
			 	'treatment_doctor_contact' => $_POST['doctor_contact'][$counter],
			 	'treatment_doctor_visit' => $_POST['doctor_visit'][$counter],
			 	'treatment_remarks' => $_POST['remarks'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 if($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == false){
			 	$success = $this->activities->insert_treatment($data);
			 }elseif($this->activities->check_todays_activity($_POST['cow_id'][$counter],$date) == true){
			 	$data = [
				 	'treatment_medicine_id' => $_POST['medicine_id'][$counter],
				 	'treatment_disease_id' => $_POST['disease_id'][$counter],
				 	'treatment_tests' => $_POST['tests'][$counter],
				 	'treatment_medicine_quantity' => $_POST['medicine_quantity'][$counter],
				 	'treatment_doctor_name' => $_POST['doctor_name'][$counter],
				 	'treatment_doctor_contact' => $_POST['doctor_contact'][$counter],
				 	'treatment_doctor_visit' => $_POST['doctor_visit'][$counter],
				 	'treatment_remarks' => $_POST['remarks'][$counter],
				 	'created_at' => str_replace('/', '-',$_POST['date'])
			 	];
			 	$success = $this->activities->update_treatment($_POST['cow_id'][$counter],$data);
			 }
		}
		if($success == true){
			$data = array(
				'status' => 200,
				'message'   => 'Success! Data Added'
			);
			header("Content-type: application/json");
			echo json_encode($data);
			exit();
		}
	}


	// public function lactation($shed_id,$branch_id)
	// {
	// 	$this->load->model('types');
	// 	$data['types'] = $this->types->show();
	// 	$data['branch_id'] = $branch_id;
	// 	$data['shed_id'] = $shed_id;
	// 	$data['content'] = $this->load->view('activity/lactation',$data,true);
	// 	$this->load->view('layout/master',$data);
	// }



	public  function medicine($name)
	{
		return $this->activities->medicine($name);
	}



}
