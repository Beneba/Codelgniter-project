<?php
 	class User_model extends CI_Model{
 		public function create(){
 			$name = $this-> input->post('name');


 			$email= $this-> input->post('email');


 			$username=$this-> input-> post('username');


 			$password= $this-> input->post('password');

 			$data= array(

 				'name' => $name,
 				'email' => $email,
 				'username' => $username,
 				'password' => $password,
 				);

 			$result = $this->db->insert('users', $data);
 			return $result;
 		}

 		 public function get_data(){
 		// we get all the data from the user table in the database and save what ever we got in the $query variable

 			$query = $this->db->get('users');
 		// we now convert what was return to an array which can be displayed in the view and then save the arrayin a $result varieble
 			$results= $query->result_array();
 		// we return the result to the controller

 			return $results;
 		}
 		
 	}
?>