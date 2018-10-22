<?php
Class Schedulemodel extends CI_Model
{
 function insert_data($data)
 {
  $this->db->insert("scheduled",$data);

  }
}
