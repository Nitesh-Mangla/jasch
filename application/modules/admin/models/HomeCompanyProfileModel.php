<?php

class HomeCompanyProfileModel extends CI_Model
{

	// fetch company profile data for home page
	public function fetchData()
	 { 
		$this->db->where( 'type', 'company_profile' );  // fetch where type is company profile
		return $this->db->get( 'home' )->result_array();  //return fetched data to display
	}
 
	// to update data for home company profile

	public function updateProfileData( $data )
	{
		if( empty($data) ) return false;

		$this->db->where( 'type', 'company_profile' );  // update where type is company profile
		$status = $this->db->update( 'home', array( 'title' => $data['title'], 'description' => $data['desc'] ) );   // update query

		if( $status ) return true;  // return true if data is updated
		else false;                 // return false if not updated
	}
}