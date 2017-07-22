<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model
{
public function add($data){
	$this->load->database();
	
	$count = $this->db->insert('student',$data);
	
	if($count>0){
		return true;
	}
	else{
		return false;
	}
}

 public function fetch_details()
   {
	  $query = $this->db->get('student');  
         return $query; 
	  
   }
  public function delete_a_user($id){
      $this->db->where('student.id',$id);
       return $this->db->delete('student');
}

 public function edit_details($id){
	
  $this->db->where('id',$id);
    $query=$this->db->get('student');
    return $query;


} 
public function update_details($id,$data){
	$this->db->where('id',$id);
	$this->db->update('student',$data);
	
	
}

}
?>