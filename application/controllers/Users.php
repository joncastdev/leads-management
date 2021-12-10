<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends OGC_Controller {


	public function __construct()
	{		
		parent::__construct();

		$this->authAdmin();				

	}


	public function index()
	{		

		$datas= $this->Users_Model->getUsers();

		

		$this->title = 'Users';

		$data = array();	
		$data['navbar_admin'] = $this->load->view('templates/admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('templates/admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;

		$data['data'] = $datas;

		

		$this->load_view_admin('templates/admin/users/index',$data);


	}

	public function usersTable()
	{

		$data= $this->Users_Model->getUsers();

		// echo json_encode($data);

		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}



}
