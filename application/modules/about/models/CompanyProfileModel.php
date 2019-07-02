<?php

class CompanyProfileModel extends CI_Model
{
	// fetch company profile data for home page
	public function fetchData()
	 { 
		$this->db->where( array('type' => 'company_profile', 'status' => 0 ));  // fetch where type is company profile
		return $this->db->get( 'about_us' )->result_array();  //return fetched data to display
	}
 
	// to update data for home company profile

	public function updateProfileData( $data, $image )
	{
		if( empty($data) ) return false;

		$this->db->where( array('type' => 'company_profile', 'status' => 0 ));  // update where type is company profile
		if(  !empty( $image )){
			$status = $this->db->update( 'about_us', array( 'title' => $data['title'], 'description' => $data['desc'], 'images' => $image ) );   // update query with image
	
		}else{
			$status = $this->db->update( 'about_us', array( 'title' => $data['title'], 'description' => $data['desc'] ) );   // update query	
		}
		

		if( $status ) return true;  // return true if data is updated
		else false;                 // return false if not updated
	}
}