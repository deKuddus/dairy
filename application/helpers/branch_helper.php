<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

function branches(){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT * FROM branches ORDER BY id ASC");
  return $query->result();
}



?>