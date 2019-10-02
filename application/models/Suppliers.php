<?php
class Suppliers extends CI_Model {
 
	protected $table = 'suppliers';

    public  function show()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }


    public function store($data){
        $this->db->insert($this->table,$data);
    }

    public function supplier_name($name){
    	$this->db->select('*');
		$this->db->from($this->table);
		$this->db->like('name', $name);
		$result = $this->db->get();		
		echo json_encode($result->result(),true); 
    }
}