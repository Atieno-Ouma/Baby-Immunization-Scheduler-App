<?php
Class Registermodel extends CI_Model
{
 function insert_data($data)
 {
  $this->db->insert("allusers",$data);

  }
}
