<?php
class Cows extends CI_Model {

	protected $table = 'cows';
 
    public function __construct()
    {
        $this->load->model('branches');
        $this->load->model('sheds');
        $this->load->model('genders');
        $this->load->model('types');
        $this->load->model('status');
        $this->load->model('availability');
        $this->load->model('colors');
        $this->load->model('breedings');
    }

    public function show(){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('branches', 'branches.id = cows.branch_id');
        $this->db->order_by("branches.id");
        $query = $this->db->get();
        return $query->result();
    }

    public function store($image_name){
        $data = array(
            'cow_id' => $this->input->post('cow_id'),
            'branch_id' => $this->input->post('branch_id'),
            'shed_id' => $this->input->post('shed_id'),
            'gender' => $this->input->post('cow_gender'),
            'type' => $this->input->post('cow_type'),
            'status' => $this->input->post('cow_status'),
            'availability' => $this->input->post('availability_status'),
            'weight' => $this->input->post('cow_weight'),
            'dob' => $this->input->post('date_of_birth'),
            'color' => $this->input->post('cow_color'),
            'breeding_status' => $this->input->post('breeding_status'),
            'breeding_percentage' => $this->input->post('breeding_percentage'),
            'vendor_contact' => $this->input->post('vendor_contact'),
            'paternal_history' => $this->input->post('paternal_history'),
            'maternal_history' => $this->input->post('maternal_history'),
            'expected_sale_price' => $this->input->post('expected_selling_price'),
            'estimated_sale_date' => $this->input->post('estimated_sale_date'),
            'image' => $image_name,
            'supplier' => $this->input->post('supplier_name'),
            'purchase_date' => $this->input->post('purchase_date'),
            'purchase_place' => $this->input->post('purchase_place'),
            'purchase_price' => $this->input->post('purchase_price'),
        );
        $this->db->insert($this->table, $data);
    }


    public function edit($id){
        $query =  $this->db->get_where($this->table, array('cow_id' => $id));;
        return $query->result();
    }

    public function update_with_image($id,$image_name){
        $data = array(
            'branch_id' => $this->input->post('branch_id'),
            'shed_id' => $this->input->post('shed_id'),
            'gender' => $this->input->post('cow_gender'),
            'type' => $this->input->post('cow_type'),
            'status' => $this->input->post('cow_status'),
            'availability' => $this->input->post('availability_status'),
            'weight' => $this->input->post('cow_weight'),
            'dob' => $this->input->post('date_of_birth'),
            'color' => $this->input->post('cow_color'),
            'breeding_status' => $this->input->post('breeding_status'),
            'breeding_percentage' => $this->input->post('breeding_percentage'),
            'vendor_contact' => $this->input->post('vendor_contact'),
            'paternal_history' => $this->input->post('paternal_history'),
            'maternal_history' => $this->input->post('maternal_history'),
            'expected_sale_price' => $this->input->post('expected_selling_price'),
            'estimated_sale_date' => $this->input->post('estimated_sale_date'),
            'image' => $image_name,
            'supplier' => $this->input->post('supplier_name'),
            'purchase_date' => $this->input->post('purchase_date'),
            'purchase_place' => $this->input->post('purchase_place'),
            'purchase_price' => $this->input->post('purchase_price'),
        );
       $this->db->where('cow_id', $id)->update($this->table, $data);
    }


    public function update_without_image($id){
        $data = array(
            'branch_id' => $this->input->post('branch_id'),
            'shed_id' => $this->input->post('shed_id'),
            'gender' => $this->input->post('cow_gender'),
            'type' => $this->input->post('cow_type'),
            'status' => $this->input->post('cow_status'),
            'availability' => $this->input->post('availability_status'),
            'weight' => $this->input->post('cow_weight'),
            'dob' => $this->input->post('date_of_birth'),
            'color' => $this->input->post('cow_color'),
            'breeding_status' => $this->input->post('breeding_status'),
            'breeding_percentage' => $this->input->post('breeding_percentage'),
            'vendor_contact' => $this->input->post('vendor_contact'),
            'paternal_history' => $this->input->post('paternal_history'),
            'maternal_history' => $this->input->post('maternal_history'),
            'expected_sale_price' => $this->input->post('expected_selling_price'),
            'estimated_sale_date' => $this->input->post('estimated_sale_date'),
            'supplier' => $this->input->post('supplier_name'),
            'purchase_date' => $this->input->post('purchase_date'),
            'purchase_place' => $this->input->post('purchase_place'),
            'purchase_price' => $this->input->post('purchase_price'),
        );
       $this->db->where('cow_id', $id)->update($this->table, $data);
    }


    public function delete($id)
    {
        $this->db->delete($this->table, array('cow_id' => $id));
    }


    public function arrayData(){
    	$cow_data = array();
    	$cow_data['branches'] = $this->branches->show();
        $cow_data['sheds'] = $this->sheds->show();
        $cow_data['genders'] = $this->genders->show();
        $cow_data['types'] = $this->types->show();
        $cow_data['status'] = $this->status->show();
        $cow_data['availability'] = $this->availability->show();
        $cow_data['colors'] = $this->colors->show();
        $cow_data['breeding_status'] = $this->breedings->show();

        return $cow_data;
    }

    public function details($cow_id)
    {
        $query =  $this->db->get_where($this->table, array('cow_id' => $cow_id));;
        return $query->result();
    }


    public function shed($branch_id)
    {
        $query = $this->db->query("SELECT * FROM sheds WHERE  branch_id = $branch_id");
        return  $query->result();
         //print_r($query->result());
    }

    public  function cowInBranch($shed_id,$branch_id)
    {
         $query = $this->db->query("SELECT * FROM cows WHERE shed_id = $shed_id AND   branch_id = $branch_id");
        return  $query->result();
    }



}