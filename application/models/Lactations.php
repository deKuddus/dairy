<?php
class Lactations extends CI_Model {
 
	protected $table = 'cows';
	protected $lac_table = 'daily_lactaion_hay_food';

    public  function save_lactation($data,$cow_id){

    	$this->db->where('cow_id',$cow_id)->update($this->table,$data);
    }

    public function save_total_lactation($tot_lac_data){
        
    	if($this->db->insert($this->lac_table,$tot_lac_data)){
            return true;
        }
    }

    public function get_today_pm($date,$cow_id){

    	$query = $this->db->where(['cow_id'=>$cow_id,'lac_date'=>$date])->get($this->table);
    	foreach ($query->result() as  $value) {
            
    		return $value->lactation_pm;
        }
    		
    }
    public function get_today_am($date,$cow_id){

        $query = $this->db->where(['cow_id'=>$cow_id,'lac_date'=>$date])->get($this->table);
        foreach ($query->result() as  $value) {
            
            return $value->lactation_am;
        }

    }


    public function get_gender($cow_id){

        $query = $this->db->where(['cow_id'=>$cow_id])->get($this->table);
        foreach ($query->result() as  $value) {
           return gender($value->gender);
        }

    }


    public function get_today_for_maleCow($date,$cow_id){

        $query = $this->db->where(['cow_id'=>$cow_id,'lac_date'=>$date])->get($this->table);
        foreach ($query->result() as  $value) {
           return $value->concentrate;
        }

    }




}