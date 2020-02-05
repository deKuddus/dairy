<?php
class Welcomes extends CI_Model {

	protected $table_cow = 'cows';
    protected $table_lactation = 'daily_lactaion_hay_food';
    public  function total_cattles(){
        $query = $this->db->get($this->table_cow);
        $i= 0;
        foreach ($query->result() as $key => $cattle) {
            $age = age($cattle->dob);
            //$gender_c = gender($cattle->gender);
            if($age < 1){
                $i = $i+1;
            }
        }
        return $i;
    }
    public  function total_milking_cows(){
        $query = $this->db->where(['type' => 1])->get($this->table_cow);
        return count($query->result());
    }
    public  function total_heifers(){
        $query = $this->db->get($this->table_cow);
        $i= 0;
        foreach ($query->result() as $key => $cattle) {
            $age = age($cattle->dob);
            $gender_c = gender($cattle->gender);
            if($age < 2 && $age > 1 && $gender_c == 'female'){
                $i = $i+1;
            }
        }
        return $i;
    }
    public  function total_bulls(){
        $query = $this->db->get($this->table_cow);
        $i= 0;
        foreach ($query->result() as $key => $cattle) {
            $age = age($cattle->dob);
            $gender_c = gender($cattle->gender);
            if($age > 1 && $gender_c == 'male'){
                $i = $i+1;
            }
        }
        return $i;
    }
    public  function last_day_lactations(){
        $last_day = date('d-m-Y',strtotime("-1 days"));
        $query = $this->db->where('date',$last_day)->get($this->table_lactation);
        foreach ($query->result() as  $t_lact) {
            return $t_lact->t_milk;
        }
    }
    public  function today_lactations(){
        $today = date('d-m-Y');
        $query = $this->db->where('date',$today)->get($this->table_lactation);
        foreach ($query->result() as  $t_lact) {
            return $t_lact->t_milk;
        }
    }

    public  function green_fooder_for_tomorrow(){
        $green_fooder_final = 0;
        $query = $this->db->get($this->table_cow);
        foreach ($query->result() as $key => $cow) {
            $age_class = calculate_age_class($cow->gender,$cow->dob);
            if($age_class != "calf"){
                $food_data = calculate_food_ratio($cow->gender,$cow->dob);
                if(!empty($food_data)){foreach ($food_data as $grass) {}}
                    $green_f = ($grass->green_fooder *100) /$cow->weight;
                $green_fooder_final = $green_fooder_final+ number_format((float)$green_f, 2, '.', '');
            }
        }
        return $green_fooder_final;
    }
    public  function hay_for_tomorrow(){
        $c_hay_final = 0;
        $query = $this->db->get($this->table_cow);
        foreach ($query->result() as $key => $cow) {
            $age_class = calculate_age_class($cow->gender,$cow->dob);
            if($age_class != "calf"){
                $food_data = calculate_food_ratio($cow->gender,$cow->dob);
                if(!empty($food_data)){foreach ($food_data as $_hay) {}}
                   $c_hay = ($_hay->hay *100) /$cow->weight;
                $c_hay_final = $c_hay_final+ number_format((float)$c_hay, 2, '.', '');
            }
        }
        return $c_hay_final;
    }
    public  function concentrate_for_tomorrow(){
        $concentrate = 0;
        $query = $this->db->get($this->table_cow);
        foreach ($query->result() as $key => $cow) {
            $age_class = calculate_age_class($cow->gender,$cow->dob);
            if($age_class != "calf"){
                $food_data = calculate_food_ratio($cow->gender,$cow->dob);
                if(!empty($food_data)){
                    foreach ($food_data as $conc) {
                        $concentrate = $concentrate + number_format((float)calculate_concentrate($cow->gender,$cow->dob,$cow->weight,$conc->concentrate,$cow->last_lactation), 2, '.', '');
                    }
                }
            }
        }
        return $concentrate;
    }
    public  function cows_in_heat(){

    }
    public  function cows_go_to_heat(){

    }
    public  function pregnant_cows(){

    }
    public  function sick_cows(){

    }
}
?>