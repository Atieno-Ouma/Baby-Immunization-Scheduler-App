<?php
Class Loginmodel extends CI_Model
{
 function can_login($username, $password)
 {
  
   $this -> db -> where('username', $username);
   $this -> db -> where('password',$password);
   $query = $this -> db -> get('allusers');
 //selects username and password and returns the results
 
  if($query->num_rows()>0){
return true;
  }
  else{
return false;
  }
 }
}
