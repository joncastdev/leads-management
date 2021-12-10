<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MAIN_Controller {

	// private $userInfo;

	public function __construct()
	{		
		parent::__construct();

		$this->auth();		
	}


	public function index()
	{
		
		echo "Api Rest";

	}

	// metodo para obtener y mantener la session abierta
	// public function getSession()
	// {
	// 	return $this->session->userdata('user');

	// }

	public function getCountrys()
	{
		$data= $this->Api_Model->getCountrys();

		echo json_encode($data);

	}


	public function getStates()
	{

		$data= $this->Api_Model->getStates();

		echo json_encode($data);

	}

	public function getSources()
	{

		$data= $this->Api_Model->getSources();

		echo json_encode($data);

	}

	public function getSectors()
	{

		$data= $this->Api_Model->getSectors();

		echo json_encode($data);

	}

	public function getStateClients()
	{

		$data= $this->Api_Model->getStateClients();

		echo json_encode($data);

	}

	public function getQualifications()
	{

		$data= $this->Api_Model->getQualifications();

		echo json_encode($data);

	}
	
	
	
	
	

	public function getCombo()
	{
		$country=$_GET["countryVal"];

		$data = $this->Api_Model->getStatesCombo($country);

		echo json_encode($data);

	}


	public function getTotalChart()
	{
		

		$data = $this->Api_Model->countCharts();

		echo json_encode($data);

	}




}
