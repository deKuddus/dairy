<?php
class Activities extends CI_Model {
 
 	protected $weighing_table = 'weighing';
 	protected $sickness_table = 'sickness';
 	protected $heating_table = 'heating';
 	protected $pregnancy_table = 'pregnancy';
 	protected $deworming_table = 'deworming';
 	protected $medicine = "medicine";
 	protected $vaccination = "vaccination";
 	protected $treatment = "treatment";

    public  function weighing($data)
	{
		$this->db->insert($this->weighing_table, $data);
	}

	public  function sickness($data)
	{
		$this->db->insert($this->sickness_table, $data);
	}

	public  function heating($data)
	{
		$this->db->insert($this->heating_table, $data);
	}

	public  function pregnancy($data)
	{
		$this->db->insert($this->pregnancy_table, $data);
	}

	public  function deworming($data)
	{
		$this->db->insert($this->deworming_table, $data);
	}

	public  function vaccination($data)
	{
		$this->db->insert($this->vaccination, $data);
	}

	public  function treatment($data)
	{
		$this->db->insert($this->treatment, $data);
	}


	public  function medicine($medicine_name)
	{
		$this->db->select('*');
		$this->db->from($this->medicine);
		$this->db->like('name', $medicine_name);
		$result = $this->db->get();		
		echo json_encode($result->result(),true); 
	}

}