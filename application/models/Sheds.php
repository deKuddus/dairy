<?php
class Sheds extends CI_Model {

	protected $table = 'sheds';


    public function show()
    {
    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    public function store(){
        $data = array(
            'name' => $this->input->post('name'),
            'branch_id' => $this->input->post('branch_id')
        );
        $this->db->insert($this->table, $data);
    }

    public function edit($id){
        $query = $this->db->get_where($this->table,['id'=>$id]);
    	return $query->result();
    }

    public function update($id)
    {
    	$data = array(
            'name' => $this->input->post('name'),
            'branch_id' => $this->input->post('branch_id')
        );
        $this->db->where('id',$id)->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

    public function sheds_by_branch($branch_id){
        $query = $this->db->get_where($this->table,['branch_id'=>$branch_id]);
        return $query->result();
    }

}