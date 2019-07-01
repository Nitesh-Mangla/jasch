<?php

class HomePresenceModel extends CI_Model
{

	public function fetchData( $id = '' )
	{
		
		if( !empty($id) ) $this->db->where( array( 'type' => 'our_presence', 'status' => 0, 'id' => $id ) );
		else $this->db->where( array( 'type' => 'our_presence', 'status' => 0 ) );
		return $this->db->get( 'home' )->result_array();
	}

	public function updatePresenceData( $data, $image )
	{
			$v =array();
			$this->db->where( array( 'type' => 'our_presence', 'status' => 0, 'id' => $data['id'] ) );					
			if( !empty($image) )
			{
					$status = $this->db->update( 'home', array( 'title' => $data['title'], 'images' => $image ) );
			}
			else
			{
					$status = $this->db->update( 'home', array( 'title' => $data['title'] ) );	
			}

			if( $status ) return true;
			else false;
  	}
}