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



				// se establece o agrega la info del usuario para la session
				$this->session->set_userdata('user',$data);

				// utlizo la info del usuario con session iniciada
				$userInfo = $this->session->userdata('user');


				// metodo para cargar vista segun nivel de usuario
				$this->nivUsers($userInfo);

				// echo json_encode($userData);
				// echo json_encode($userInfo);

				// metodo para actualizar el ultimo acceso
				$this->lastAccess($email);




			}else{  //end password verify
				// validacion ei existe un usuario con ese hash de contraseña


				// $this->session->set_flashdata('passwordCheck', 'usuario o contraseña incorrecta');

				// echo json_encode("User or password incorrect");


				// devuelte esto el metodo flashdata "usuario o contrase\u00f1a incorrecta", pero no funciona con form validation
				// $data=array(		
				// 	'msg_pass_check' => $this->session->flashdata('passwordCheck')					
				// );

				// $msg_user_check = "User or password incorrect";	
				// $data=array(		
				// 	'msg_pass_check' => $msg_user_check					
				// );


				// echo json_encode($data);
				$this->session->flashdata('passwordCheck','Username or password incorrect');

				redirect(base_url());

				// redirect(base_url("login"));

			}


	}//end validation form


}


// funcion para cargar vistas segun nivel de usuario
public function nivUsers($userInfo)
{


	switch ($userInfo['role']) {
		case "admin":			
		echo json_encode("admin");
		// no acepta el redirect, por culpa de prevent default
		// redirect(base_url('dashboard'));		
		break;		
		case "user":		
		echo json_encode("user");			
		break;					
	}


}

public function lastAccess($email)
{

	$params=array(
		'last_access' => date('H-i-s')			
	);

	$this->Security_Model->LastAccess($email,$params);


}


public function signOut()
{ 
	
	// primero elimino la info del usuario de la session,
	// osea la variable user
	$this->session->unset_userdata('user');

	// ahora verifico que no exista el usuario,para poder hacer un flashdata
	// en la vista, flash data no funciona con sess_destroy
	if ($this->session->userdata('user') === NULL) {				

		$this->session->set_flashdata('closeSession', 'You have closed session');

		redirect(base_url('login'));		

	}

	// Para borrar la sesión actual por completo
	$this->session->sess_destroy();		

}


}
