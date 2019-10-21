<?php
class Ratios extends CI_Model 
{
	protected $table = 'ratio';
 	public  function show()
 	{
 		$result = $this->db->get($this->table);
 		return $result->result();
 	}


 	public function edit($id)
 	{
 		$result = $this->db->where('id',$id)->get($this->table);
 		return $result->result();
 	}

 	public function update($data,$id)
 	{
 		$this->db->where('id',$id)->update($this->table,$data);
 	}
}