<?php
class InfrastructureModel extends CI_Model
{
	// fetch Infrastructure data for home page
	public function fetchData()
	 { 
		$this->db->where( array('type' => 'infrastructure', 'status' => 0 ));  // fetch where type is Infrastructure
		return $this->db->get( 'about_us' )->result_array();  //return fetched data to display
	}
 
	// to update data for about Infrastructure

	public function updateInfrastructureData( $data, $image )
	{
		if( empty($data) ) return false;

		$this->db->where( array('type' => 'infrastructure', 'status' => 0 ));  // update where type is Infrastructure
		if(  !empty( $image )){
			$status = $this->db->update( 'about_us', array( 'title' => $data['title'], 'description' => $data['desc'], 'images' => $image ) );   // update query with image
	
		}else{
			$status = $this->db->update( 'about_us', array( 'title' => $data['title'], 'description' => $data['desc'] ) );   // update query	
		}
		

		if( $status ) return true;  // return true if data is updated
		else false;                 // return false if not updated
	}
}