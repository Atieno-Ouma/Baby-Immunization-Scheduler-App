<?php
Class Servicesmodel extends CI_Model
{
 function insert_data($data)
 {
  $this->db->insert("feedback",$data);

  }
}
