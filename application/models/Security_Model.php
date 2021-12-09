<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_Model extends CI_Model {
	
	
	public function checkUser($email, $password)
	{
		$this->db->select( 'password' );
		$this->db->from( 'users' );
		$this->db->where( 'email', $email );
		$hash = $this->db->get()->row('password');		
		
		return $this->verifyHash( $password, $hash );
		
	}

	public function verifyHash( $password, $hash )
	{
		return password_verify( $password, $hash );

	}

	public function userSession($email)
	{
		$this->db->select( 'A.id_user,A.first_name,A.last_name,A.email,B.role' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->where( 'email', $email );
		$query = $this->db->get()->result();

		return $query;		
		
	}

	public function lastAccess($email,$params)
	{
		$this->db->where('email', $email);
		$this->db->update('users', $params);		
	}

	public function checkUserRegister($email)
	{
		$this->db->select( 'email' );
		$this->db->from( 'users' );
		$this->db->where( 'email', $email );
		$query = $this->db->get()->row('email');		
		
		return $query;		
	}
	


	public function lostPassword($email,$passwordNew)
	{
		$this->db->set('password',$passwordNew);
		$this->db->where('email', $email);
		$this->db->update('users');		


	}	
	


}