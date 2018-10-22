<?php
Class Babyaccountmodel extends CI_Model
{
	/*function fetch_single_data($accountid){
		$this->db->where("name",$name);
		$query=$this->db->get("babyaccount");
		return $query;
	}
 function update_data($data)
 {
  $this->db->update("babyaccount",$data);

  }*/
  function fetch_data(){
  	$query=$this->db->get("pediatrician");
  	return $query;
  }
   function fetch_data2(){
  	$query=$this->db->get("babyaccount");
  	return $query;
  }
   function fetch_data3(){
  	$query=$this->db->get("administered");
  	return $query;
  }
   function fetch_data4(){
  	$query=$this->db->get("scheduled");
  	return $query;
  }
   function fetch_data5(){
    $query=$this->db->get("medicine");
    return $query;
  }
}
