<?php
Class Pedimodel extends CI_Model
{
 function insert_data($data)
 {
  $this->db->insert("pediatrician",$data);

  }
}
