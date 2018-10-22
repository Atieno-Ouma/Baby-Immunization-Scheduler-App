<?php
Class Medicinemodel extends CI_Model
{
 function insert_data($data)
 {
  $this->db->insert("medicine",$data);

  }
}
