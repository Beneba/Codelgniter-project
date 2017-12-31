<?php
	class Users extends CI_Controller{
		public function __construct(){
			parent::__construct();

			$this->load->model('User_model');	
	}

	public function create(){

		if($this->User_model->create()){
			echo "information saved successfully";
		}

			else{
				echo "Something went wrong. Please try again";
		}

	}
	

	public function getUserData(){

		//Call the get_data() function on the User_model to get
		//all users data from the database

		$users = $this->User_model->get_data();

		//Check if any result was returned
		if($user ===null){
			echo "No users found";
		}else{
			foreach ($users as $user) {
				//write code to display user details here
				//then go to this file application/config/routes.php
				//i have made some changes over there
			}
		}

	}


	public function index(){
		$this-> load->view('Signup');
	}

}




	

?>