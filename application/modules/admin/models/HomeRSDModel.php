<?php

class HomeRSDModel extends CI_Model
{

 // fetch home research daat
 	public function fetchData()
	{
	  $this->db->where( array('type' => 'RSD', 'status' => 0) ); // which row need to fetch
		return $this->db->get( 'home' )->result_array(); // return fetched data to display
	}

	// to update research and development data
	public function updateData( $data )
	{
		if( empty($data) ) return false;  //return false when user nothing entered
		$this->db->where( array('type' => 'RSD', 'status' => 0) ); // where condition to update data
		
			$status = $this->db->update( 'home', array( 'title' => $data['title'], 'description' => $data['desc'] ) );  //updated query
		

		if( $status ) return true; // return true if updated successfully
		else false; // return false if not updated
  }
}