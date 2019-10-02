<?php
class Status extends CI_Model {

	protected $table = 'status';
 



   public function show(){
        $query =  $this->db->get($this->table);
        return $query->result();
    }
/* 
    public function store(){
        $data = array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'comment' => $this->input->post('comment'),
        );
        $this->db->insert($this->table, $data);
    }

    public function edit($id){
        $query =  $this->db->get_where($this->table, array('id' => $id));;
        return $query->result();
    }

    public function update($id){
        $data = array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'comment' => $this->input->post('comment'),
        );
        $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }
*/

}