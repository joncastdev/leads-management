<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Model extends CI_Model {
	
	public function getCountrys()
	{
		
		$this->db->distinct();
		$this->db->select("id_country,country");
		$this->db->from("countrys");
		$this->db->order_by("country", "asc");
		$query = $this->db->get();	

		return $query->result();
		
	}

	public function getStates()
	{
		
		$this->db->distinct();
		$this->db->select("id_state,state");
		$this->db->from("states");
		$this->db->order_by("state", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}

	public function getSources()
	{
		
		$this->db->distinct();
		$this->db->select("id_source,source");
		$this->db->from("sources");
		$this->db->order_by("source", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}

	public function getSectors()
	{
		
		$this->db->distinct();
		$this->db->select("id_sector,sector");
		$this->db->from("sectors");
		$this->db->order_by("sector", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}


	public function getstateClients()
	{
		
		$this->db->distinct();
		$this->db->select("id_state_client,state_client");
		$this->db->from("state_clients");
		$this->db->order_by("state_client", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}


	public function getQualifications()
	{
		
		$this->db->distinct();
		$this->db->select("id_qualification,qualification");
		$this->db->from("qualifications");
		$this->db->order_by("qualification", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}





	

	public function countCharts()
	{		

		$this->db->select("COUNT(id_user) AS totalUsers");
		$this->db->from("users");
		// $this->db->where("id_role", 1);			
		$users = $this->db->get()->row();
		
		$this->db->select("COUNT(id_lead) AS totalLeads");
		$this->db->from("leads");		
		$leads = $this->db->get()->row();
		

		$query = array(
			$users,
			$leads		
		);


		return $query;		
	}

	public function imgProfile($email){

		$this->db->select( 'img' );
		$this->db->from( 'users' );
		$this->db->where("email", $email);		
		$query = $this->db->get()->row();

		return $query;

	}


	public function getStatesCombo($param)
	{
		$this->db->select( 'B.id_state,B.state' );
		$this->db->from( 'countrys AS A' );
		$this->db->join( 'states AS B', 'A.id_country = B.id_country', 'inner' );
		$this->db->where( 'A.id_country', $param );		

		$query = $this->db->get()->result();	

		return $query;		
	}






}