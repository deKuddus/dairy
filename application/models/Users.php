<?php
class Users extends CI_Model {
 


    public function store_user($image)
    {

    	$alloted_branch = implode(',',$this->input->post('allotted_branches'));

    	$data = array(
    		'name' => $this->input->post('fullname'),
    		'role' => $this->input->post('type'),
    		'alloted_branch' => $alloted_branch,
    		'email' => $this->input->post('email'),
    		'password' => $this->input->post('password'),
    		'image' => $image
    	);
    	$this->db->insert('users', $data);
 
    }

    public function user($id=0)
    {
        if($id == 0){
            $query=$this->db->get('users');
            return $result=$query->result();
        }else{
            $query =$this->db->get_where('users', array('id' => $id));
            return $result=$query->result();
        }
    }
}