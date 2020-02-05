<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

function cowInShade($shed_id,$branch_id){
 $CI =& get_instance();
 $query = $CI->db->query("SELECT Count(cow_id) as cow FROM cows WHERE shed_id = $shed_id AND branch_id = $branch_id");
 if($query->num_rows() > 0){
  foreach ( $query->result() as  $value) {
    echo $value->cow;
  }
}
}

function cowInShadeInBranch($shed_id,$branch_id){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT * FROM cows WHERE shed_id = $shed_id AND branch_id = $branch_id");
  if($query->num_rows() > 0){
    return $query->result();
  }
}

function motherCow(){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT cow_id  FROM cows WHERE gender = 2");
  if($query->num_rows() > 0){
    return $query->result();
  }
}

function fatherCow(){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT cow_id  FROM cows WHERE gender = 1");
  if($query->num_rows() > 0){
    return $query->result();
  }
}

function shedOfBranch($shed_id,$branch_id){
 $CI =& get_instance();
 $query = $CI->db->query("SELECT name FROM sheds WHERE id = $shed_id AND branch_id = $branch_id");
 if($query->num_rows() > 0){
  foreach ( $query->result() as  $value) {
    return $value->name;
  }
}
}

function age($dob){
  $rep = str_replace('/', '-', $dob);
  $dob1   = date_create($rep);
  $now   = date_create('now');
  $diff    = date_diff($dob1,$now);
  $days    = $diff->format("%a")+1;
  $age = $days/365;
  return $age;
}

function branch($id){
 $CI =& get_instance();
 $query = $CI->db->query("SELECT name FROM branches WHERE id = $id");
 if($query->num_rows() > 0){
  foreach ( $query->result() as  $value) {
    return $value->name;
  }
}
}

function shed($id){
 $CI =& get_instance();
 $query = $CI->db->query("SELECT name FROM sheds WHERE id = $id");
 if($query->num_rows() > 0){
  foreach ( $query->result() as  $value) {
    return $value->name;
  }
}
}

function calculate_food_ratio($gender,$dob){

  $age = age($dob);
  $gender_c = gender($gender);

  if($age > 2 && $gender_c == 'female'){

    $type = "cow";
    return get_food_ratio($type);

  }elseif($age > 1 && $gender_c == 'male'){

    $type = "bull";
    return get_food_ratio($type);

  }elseif($age < 2 && $age > 1 && $gender_c == 'female'){

    $type = "heifer";
    return get_food_ratio($type);

  }elseif($age < 1){

    $type = "calf";
    return get_food_ratio($type);

  }
}

function get_food_ratio($type){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT * FROM ratio WHERE cow_type = '$type' LIMIT 1");
  if($query->num_rows() > 0){
    return $query->result();
  }
}

function gender($gender){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT name FROM gender WHERE id = $gender");
  foreach ($query->result() as  $value) {
    return $value->name;
  }
}

function calculate_concentrate($gender,$dob,$weight,$parsent,$last_day_lactation=0){
  $age = age($dob);
  $gender_c = gender($gender);

  if($age > 2 && $gender_c == 'female'){

    $type = "cow";
    $calculation = ($last_day_lactation-3)/3;
    return  $concentrate = number_format((float)$calculation, 2, '.', '');

  }elseif($age > 1 && $gender_c == 'male'){

    $type = "bull";
    return $concentrate = $weight*$parsent/100;

  }elseif($age < 2 && $age > 1 && $gender_c == 'female'){

    $type = "heifer";
    return $concentrate = $weight*$parsent/100;

  }elseif($age < 1){

    //return $type = "calf";
    return 2;
  }
}

function calculate_age_class($gender,$dob){
  $age = age($dob);
  $gender_c = gender($gender);

  if($age > 2 && $gender_c == 'female'){

   return $type = "cow";

  }elseif($age > 1 && $gender_c == 'male'){

    return $type = "bull";

  }elseif($age < 2 && $age > 1 && $gender_c == 'female'){

    return $type = "heifer";

  }elseif($age < 1){

    return $type = "calf";

  }
}

function today_am_lactation($cow_id){
  $date = date('d-m-Y');
  $date = date('d-m-Y', strtotime($date . ' +1 day'));
  $CI =& get_instance();
  $query = $CI->db->query("SELECT lactation_am FROM cows WHERE cow_id = '$cow_id'  and lac_date = '$date'");
  foreach ($query->result() as  $value) {
    return $value->lactation_am;
  }
}

function today_pm_lactation($cow_id){
  $date = date('d-m-Y');
  $date = date('d-m-Y', strtotime($date . ' +1 day'));
  $CI =& get_instance();
  $query = $CI->db->query("SELECT lactation_pm FROM cows WHERE cow_id = '$cow_id' and lac_date = '$date'");
  foreach ($query->result() as  $value) {
    return $value->lactation_pm;
  }
}

function total_lactation($lactation_am,$lactation_pm){
  if(!empty($lactation_am)){
    $lactation_am = $lactation_am;
  }else{
    $lactation_am = 0;
  }
  if(!empty($lactation_pm)){
    $lactation_pm = $lactation_pm;
  }else{
    $lactation_pm = 0;
  }
  return $lactation_am + $lactation_pm;
}
?>