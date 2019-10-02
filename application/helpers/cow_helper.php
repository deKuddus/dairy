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

?>