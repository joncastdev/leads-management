<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends MAIN_Controller {

	

	public function __construct()
	{		
		parent::__construct();

		// $this->title = 'dashboard';
		

		// pequeño midleware para rutas
		$this->auth();
		
	}


	public function index()
	{
		// selecciono una vista a mostrar segun el role del usuario
		switch ($this->userInfo['role']) {
			case "admin":
			$this->dashboardAdmin();
			break;			
			case "user":
			$this->dashboardUser();			
			break;					
		}

		// print_r($this->userInfo);

		// print_r(gettype($this->userInfo));


		// print_r($this->getSession());

		// $this->dashboardAdmin();


	}

	public function dashboardAdmin()
	{		
		// $data = array();
		// se pasa las variables de info de usuario,
		// para poder usarlas en vistas y javascript
		// $data['navbar'] = $this->load->view('admin/inc/navbar',$this->userInfo,TRUE);
		// $data['sidebar'] = $this->load->view('admin/inc/sidebar',$this->userInfo,TRUE);
		// $data['title'] = $this->title;

		// print($this->userInfo['first_name']);

		$this->title = 'dashboard';


		$data = array();	
		$data['navbar_admin'] = $this->load->view('admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;
		// $data['user'] = $this->userInfo['first_name'];		
		$this->load_view_admin('templates/admin/dashboard',$data);
		
		// $this->load_layout('admin/dashboard',$data);

	}


	public function dashboardUser()
	{		

		$data = array();

		$data['navbar'] = $this->load->view('users/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar'] = $this->load->view('users/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;
		
		$this->load_view_user('templates/user/dashboard',$data);

	}



}

