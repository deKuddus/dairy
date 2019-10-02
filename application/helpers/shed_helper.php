<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

function shade_in_branch($branch_id){
  $CI =& get_instance();
  $query = $CI->db->query("SELECT * FROM sheds WHERE branch_id = $branch_id ORDER BY id ASC");
  return $query->result();
}



?>