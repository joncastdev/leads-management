<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {


	public function getUsers()
	{
		$this->db->select( 'A.id_user,A.img,A.first_name,A.last_name,A.email,C.country,D.state,B.role,A.created_at,A.updated_at' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		$this->db->order_by("id_user", "asc");		
		
		$query = $this->db->get()->result_array();		

		return $query;		
	}


	public function getUsersById($id)
	{
		$this->db->select( 'A.id_user,A.img,A.first_name,A.last_name,A.email,C.country,D.state,B.role,,A.created_at,A.updated_at' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		$this->db->where( 'A.id_user', $id );		

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

	public function deleteUsers($id)
	{

		$this->db->where('id_user', $id);
		
		$this->db->where('id_role', 2);		
		$this->db->delete('users');
		
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

		$query = $this->db->get()->result();		
		

		return $query;		
	}




}