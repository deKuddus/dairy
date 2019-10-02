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
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'weight' => $_POST['weight'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->weighing($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function sickness()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'isSick' => $_POST['isSick'][$counter],
			 	'description' => $_POST['description'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->sickness($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function heating()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'inHeat' => $_POST['inHeat'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->heating($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function pregnancy()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'isPregnant' => $_POST['isPregnant'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->pregnancy($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function deworming()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'medicine_id' => $_POST['medicine_id'][$counter],
			 	'quantity' => $_POST['deworming_quantity'][$counter],
			 	'comments' => $_POST['comment'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->deworming($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function vaccination()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'medicine_id' => $_POST['medicine_id'][$counter],
			 	'quantity' => $_POST['deworming_quantity'][$counter],
			 	'comments' => $_POST['comment'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->vaccination($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
	}

	public  function treatment()
	{
		for($counter = 0; $counter < sizeof($_POST["cow_id"]); $counter++){
			 $data = [
			 	'cow_id' => $_POST['cow_id'][$counter],
			 	'medicine_id' => $_POST['medicine_id'][$counter],
			 	'disease_id' => $_POST['disease_id'][$counter],
			 	'tests' => $_POST['tests'][$counter],
			 	'quantity' => $_POST['medicine_quantity'][$counter],
			 	'doctor_name' => $_POST['doctor_name'][$counter],
			 	'doctor_contact' => $_POST['doctor_contact'][$counter],
			 	'doctor_visit' => $_POST['doctor_visit'][$counter],
			 	'remarks' => $_POST['remarks'][$counter],
			 	'created_at' => str_replace('/', '-',$_POST['date'])
			 ];
			 $this->activities->treatment($data);
		}

		$data = array(
			'status' => 200,
			'message'   => 'success'
		);
		header("Content-type: application/json");
        echo json_encode($data);
        exit();
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



	public  function medicine($name)
	{
		return $this->activities->medicine($name);
	}


}
