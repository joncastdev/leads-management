<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_Model extends CI_Model {


	public function getLeads()
	{		

		// $this->db->select( 'A.id_lead,A.first_name,A.last_name,A.company,A.email,A.img,A.street,A.state,A.city,A.country,A.postal_code,A.title,A.phone,A.cell_phone,A.source,A.sector,A.income,A.fax,A.website,A.state_client,A.quantity_worker,A.qualification,A.id_skype,A.id_twiiter,A.description' );
		$this->db->select( 'A.id_lead,A.first_name,A.last_name,A.company,A.email,A.img,B.state,A.street,B.state,A.city,C.country,A.postal_code,A.title,A.phone,A.cell_phone,D.source,E.sector,A.income,A.fax,A.website,F.state_client,A.quantity_worker,H.id_qualification,A.id_skype,A.id_twiiter,A.description' );
		$this->db->from( 'leads AS A' );
		$this->db->join( 'states AS B', 'A.id_state = B.id_state', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'sources AS D', 'A.id_source = D.id_source', 'inner' );
		$this->db->join( 'sectors AS E', 'A.id_sector = E.id_sector', 'inner' );
		$this->db->join( 'state_clients AS F', 'A.id_state_client = F.id_state_client', 'inner' );
		$this->db->join( 'qualifications AS H', 'A.id_qualification = H.id_qualification', 'inner' );
		// $this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		// $this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		// $this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		$this->db->order_by("id_lead", "asc");		
		
		$query = $this->db->get()->result_array();

		// $query = $this->db->get()->result();

		// $query = $this->db->get();

		return $query;
		// return $query->result_array();
		// probando retornar como json
		// return  json_encode($query);	
	}


	public function getLeadsById($id)
	{
		$this->db->select( 'A.id_lead,A.first_name,A.last_name,A.company,A.email,A.img,B.state,A.street,B.state,A.city,C.country,A.postal_code,A.title,A.phone,A.cell_phone,D.source,E.sector,A.income,A.fax,A.website,F.state_client,A.quantity_worker,H.qualification,A.id_skype,A.id_twiiter,A.description' );
		$this->db->from( 'leads AS A' );
		$this->db->join( 'states AS B', 'A.id_state = B.id_state', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'sources AS D', 'A.id_source = D.id_source', 'inner' );
		$this->db->join( 'sectors AS E', 'A.id_sector = E.id_sector', 'inner' );
		$this->db->join( 'state_clients AS F', 'A.id_state_client = F.id_state_client', 'inner' );
		$this->db->join( 'qualifications AS H', 'A.id_qualification = H.id_qualification', 'inner' );
		$this->db->where( 'A.id_lead', $id );		

		$query = $this->db->get()->row_array();

		return $query;	
	}
	
	

	public function update($params)
	{	

		$this->db->set('first_name',$params['first_name']);
		$this->db->set('last_name',$params['last_name']);
		$this->db->set('email',$params['email']);				
		$this->db->where('id_user', $params['id_user']);
		$this->db->update('users');


	}

	public function deleteLeads($id)
	{

		$this->db->where('id_lead', $id);			
		$this->db->delete('leads');
		
	}


	public function getUsersExcel()
	{
		$this->db->select( 'A.first_name,A.last_name,C.country,D.state,B.role,A.created_at' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );

		$query = $this->db->get()->result_array();

		return $query;	
	}


	public function userRoleValidation($id)
	{
		$this->db->select( 'id_role' );
		$this->db->from( 'users' );		
		$this->db->where( 'id_user', $id );		

		$query = $this->db->get()->row_array();		

		return $query;		
	}



	public function getStatesCombo($param)
	{
		$this->db->select( 'B.state' );
		$this->db->from( 'countrys AS A' );
		$this->db->join( 'states AS B', 'A.id_country = B.id_country', 'inner' );
		$this->db->where( 'A.id_country', $param );
		// $this->db->where( 'A.id_country = 1' );

		$query = $this->db->get()->result();
		
		// return  json_encode($query);

		return $query;		
	}




}