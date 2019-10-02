<?php
class Branches extends CI_Model {

    protected $table = 'branches';



    public function show(){
        $query =  $this->db->get($this->table);
        return $query->result();
    }

    public function store(){
        $data = array(
            'name' => $this->input->post('name'),
            'address_line_1' => $this->input->post('address_line_1'),
            'address_line_2' => $this->input->post('address_line_2'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'contact' => $this->input->post('contact'),
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
            'address_line_1' => $this->input->post('address_line_1'),
            'address_line_2' => $this->input->post('address_line_2'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'contact' => $this->input->post('contact'),
        );
        $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }


}