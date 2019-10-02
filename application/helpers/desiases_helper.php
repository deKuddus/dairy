<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

function diseases(){
   $CI =& get_instance();
   $query = $CI->db->query("SELECT * FROM diseases ORDER BY id ASC");
   if($query->num_rows() > 0){
    return  $query->result();
  }
}

?>