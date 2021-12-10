<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends OGC_Controller {

	

	public function __construct()
	{		
		parent::__construct();
		
		$this->auth();
		
	}


	public function index()
	{
		
		switch ($this->userInfo['role']) {
			case "admin":
			$this->dashboardAdmin();
			break;			
			case "user":
			$this->dashboardUser();			
			break;					
		}

	}

	public function dashboardAdmin()
	{
		$this->title = 'Dashboard Admin';


		$data = array();	
		$data['navbar_admin'] = $this->load->view('templates/admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('templates/admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;
		
		$this->load_view_admin('templates/admin/dashboard',$data);		

	}


	public function dashboardUser()
	{		
		$this->title = 'Dashboard User';

		$data = array();

		$data['navbar'] = $this->load->view('templates/users/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar'] = $this->load->view('templates/users/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;
		
		$this->load_view_user('templates/user/dashboard',$data);

	}



}

