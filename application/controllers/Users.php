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
	



	public function index(){
		$this-> load->view('Signup');
	}

}




	

?>