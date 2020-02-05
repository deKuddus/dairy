<?php
class Activities extends CI_Model {
 
 	protected $table_others_activity = 'others_activity';
 	protected $medicine = 'medicine';


    public  function insert_weighing($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}

	public  function update_weighing($cow_id,$data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}
	public  function insert_sickness($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_sickness($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}
	public  function insert_heating($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_heating($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}
	public  function insert_pregnancy($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_pregnancy($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}
	public  function insert_deworming($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_deworming($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}

	public  function insert_vaccination($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_vaccination($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}
	public  function insert_treatment($data)
	{
		if($this->db->insert($this->table_others_activity, $data)){
			return true;
		}
	}
	public  function update_treatment($data)
	{
		if($this->db->where(['cows_id'=>$cow_id])->update($this->table_others_activity,$data)){
			return true;
		}
	}

	public  function medicine($medicine_name)
	{
		$this->db->select('*');
		$this->db->from($this->medicine);
		$this->db->like('name', $medicine_name);
		$result = $this->db->get();		
		echo json_encode($result->result(),true); 
	}

	public function check_todays_activity($cow_id,$date){
		$query = $this->db->select('cows_id')->from($this->table_others_activity)->where(['cow_id'=>$cow_id,'created_at'=>$date])->get();
		if(!empty($query->result())){
			return true;
		}else{
			return false;
		}
	}
}