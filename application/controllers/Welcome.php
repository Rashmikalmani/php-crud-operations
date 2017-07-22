<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	
	}
	
	public function add_user(){
		
			$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phno=$this->input->post('phno');
		$password=$this->input->post('password');
		
		$data=array('name'=>$name,'email'=>$email,'phoneno'=>$phno,'password'=>$password);
		
		$this->load->model('user');
		
		if($this->user->add($data))
		{
			echo "data inserted successfully";
		}
		
		else{
			echo "data not inserted";
		}
		
	}
	
	 public function view_user()
   {
	   
	    $this->load->database();  
	   $this->load->model('user');
       $data["user_list"] = $this->user->fetch_details();
       $this->load->view('view_user_page', $data); 
 
   }
   
   public function delete($id){
	$this->load->database();  
	 $this->load->model('user');
   $this->user->delete_a_user($id);

   $this->view_user();
}


  
public  function edit_details($id) {
	$this->load->database();  
	   $this->load->model('user');
       $data["edit_list"] = $this->user->edit_details($id);
       $this->load->view('edit_page', $data); 
  
} 
public function update_user(){
	$this->load->database();  
	   $this->load->model('user');
	$id= $this->input->post('id');
	$data = array(
'name' => $this->input->post('name'),
'email' => $this->input->post('email'),
'phoneno' => $this->input->post('phno'),
'password' => $this->input->post('password')
);
	$this->user->update_details($id,$data);
       $this->view_user();
}

}



?>