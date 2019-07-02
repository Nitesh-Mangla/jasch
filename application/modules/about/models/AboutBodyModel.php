<?php

class AboutBodyModel extends CI_Model
{
	public function  fetchData()
	{
		$this->db->where( array('type' => 'profile', 'status' => 0) );
		return $this->db->get( 'about_us' )->result_array();
	}

	public function updateData( $data )
	{
		$this->db->where( array('type' => 'profile', 'status' => 0) );
		if( $this->db->update( 'about_us', array( 'type' => 'profile', 'title' => $data['title'], 'description' => $data['desc'] ) ) )
		{
			return true;
		}
		else false;
	}
}