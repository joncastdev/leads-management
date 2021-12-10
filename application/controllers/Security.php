<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Security extends OGC_Controller {	


	public function __construct()
	{		
		parent::__construct();

		$this->load->model('Security_Model');			

	}


	public function index()
	{		
		
		$this->title = 'Login';

		$data = array();

		$data['title'] = $this->title;
		$data['navbar_front'] = $this->load->view('templates/inc/navbar_front','',TRUE);

		$this->load_view_base('templates/security/login',$data);

	}

	public function signIn()
	{
		$this->form_validation->set_rules('email', 'email', 'required|max_length[35]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[25]');


		if ($this->form_validation->run() == FALSE){			

			$this->index();	


		}else{		


			$email = $_POST["email"];
			$password = $_POST["password"];		

			if ($this->Security_Model->checkUser($email, $password)) {


				$userData = $this->Security_Model->userSession($email);					



				$data=array(
					'id_user' => $userData[0]->id_user,		
					'first_name' => $userData[0]->first_name,
					'last_name' => 	$userData[0]->last_name,	
					'email' => $userData[0]->email,		
					'role' => $userData[0]->role								
				);

				
				$this->session->set_userdata('user',$data);

				
				$userInfo = $this->session->userdata('user');

				$this->nivUsers($userInfo);

				
				$this->lastAccess($email);




			}else{  //end password verify
				

				

				$this->index();

			}


	}//end validation form


}

public function nivUsers($userInfo)
{


	switch ($userInfo['role']) {
		case "admin":			
		echo json_encode("admin");
		
		redirect(base_url('dashboard'));		
		break;		
		case "user":		
		redirect(base_url('dashboard'));			
		break;					
	}


}

public function lastAccess($email)
{

	$params=array(
		'last_access' => date('y-m-d')			
	);

	$this->Security_Model->LastAccess($email,$params);


}


public function signOut()
{ 	

	$this->session->unset_userdata('user');

	
	if ($this->session->userdata('user') === NULL) {				

		$this->session->set_flashdata('closeSession', 'You have closed session');

		redirect(base_url('login'));		

	}

	
	$this->session->sess_destroy();		

}


}
